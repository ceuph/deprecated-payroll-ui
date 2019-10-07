<?php


namespace app\helpers;

use app\models\EmployeeSetting;
use app\models\GsLeaveCredits;
use app\models\LeaveApplication;
use app\models\LeaveApplicationDetail;
use app\models\NtLeaveCredits;
use app\models\Setting;
use app\models\UgLeaveCredits;
use DateTimeInterface;
use DateTime;
use Exception;
use yii\db\Query;

class Payroll
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * Setting start for office hours (e.g. 08:00).
     */
    const SETTING_OFFICE_BEGIN_HOUR = 'SETTING_OFFICE_BEGIN_HOUR';

    /**
     * Setting end for office hours (e.g. 17:00).
     */
    const SETTING_OFFICE_END_HOUR = 'SETTING_OFFICE_END_HOUR';

    /**
     * Setting number of office hours (e.g. 8 for 8hrs per day).
     */
    const SETTING_OFFICE_HOUR_NUMBER = 'SETTING_OFFICE_HOUR_NUMBER';

    /**
     * Setting number of office hours per week (e.g. 40 for 40hrs per week).
     */
    const SETTING_OFFICE_WEEK_HOUR = 'SETTING_OFFICE_WEEK_HOUR';

    /**
     * Setting day off 0 - sunday, 6 - saturday.
     */
    const SETTING_DAY_OFF = 'SETTING_DAY_OFF';

    /**
     * Setting break time.
     */
    const SETTING_BREAK_TIME = 'SETTING_BREAK_TIME';

    /**
     * @param $date string
     * @return DateTime|DateTimeInterface
     * @throws Exception
     */
    public static function strToDate($date)
    {
        return $date instanceof DateTimeInterface ? $date : new DateTime($date);
    }

    /**
     * @param $date string
     * @return string
     * @throws Exception
     */
    public static function dateFormat($date)
    {
        return self::strToDate($date)->format(self::DATE_FORMAT);
    }

    /**
     * Get the leave application and its corresponding details.
     * @param $dateFrom DateTimeInterface|string starting date of pay period.
     * @param $dateTo DateTimeInterface|string end date of pay period.
     * @param $joinDetails bool set to true to inner join details.
     * @return Query
     * @throws Exception
     */
    public static function leaveQuery($dateFrom, $dateTo, $joinDetails = false)
    {
        $query = new Query();
        $query
            ->select(
                'hdr.EmpID, hdr.type hdr_type, type_leave, date_from, hdr.date_to,
                date_approve_head, date_approve_hrd, status'
            )
            ->from(LeaveApplication::tableName() . ' hdr');

        if ($joinDetails) {
            $query
                ->addSelect('dtl.type dtl_type, date_break_from, date_break_to, days, ug_lec, ug_lab, gs_lec, gs_lab')
                ->innerJoin(LeaveApplicationDetail::tableName() . ' dtl', 'hdr.EmpID = dtl.EmpID AND hdr.date_to = dtl.date_to');
        }

        $query->where('hdr.status <> :status
        AND (
            (hdr.date_from >= :start_from AND hdr.date_from <= :start_to)
            OR (hdr.date_to >= :end_from AND hdr.date_to <= :end_to)
            OR (hdr.date_to < :between_from AND hdr.date_to > :between_to)
        )', [
            ':status' => LeaveApplication::STATUS_PENDING,
            ':start_from' => self::dateFormat($dateFrom),
            ':start_to' => self::dateFormat($dateTo),
            ':end_from' => self::dateFormat($dateFrom),
            ':end_to' => self::dateFormat($dateTo),
            ':between_from' => self::dateFormat($dateFrom),
            ':between_to' => self::dateFormat($dateTo),
        ]);

        return $query;
    }

    /**
     * @param $processDate |DateTimeInterface string start date of pay period
     * @param $userDate |DateTimeInterface string start date from employee leave, absence, etc.
     * @return DateTimeInterface
     * @throws Exception
     */
    public static function dateFrom($processDate, $userDate)
    {
        $processDate = self::strToDate($processDate);
        $userDate = self::strToDate($userDate);
        return $processDate > $userDate ? $processDate : $userDate;
    }

    /**
     * @param $processDate string|DateTimeInterface end date of pay period
     * @param $userDate string|DateTimeInterface end date from employee leave, absence, etc.
     * @return DateTimeInterface
     * @throws Exception
     */
    public static function dateTo($processDate, $userDate)
    {
        $processDate = self::strToDate($processDate);
        $userDate = self::strToDate($userDate);
        return $processDate < $userDate ? $processDate : $userDate;
    }

    /**
     * List possible settings.
     * @return array key as name, value as description
     */
    public static function listSettings()
    {
        return [
            self::SETTING_BREAK_TIME => 'Break Time (e.g. 12:00-13:00)',
            self::SETTING_DAY_OFF => 'Day Off (0 - Sunday, 6 - Saturday)',
            self::SETTING_OFFICE_BEGIN_HOUR => 'Start of Office Hour (e.g. 08:00)',
            self::SETTING_OFFICE_END_HOUR => 'End of Office Hour (e.g. 17:00)',
            self::SETTING_OFFICE_HOUR_NUMBER => 'Number of Office Hour per Day (e.g. 8 for 8hrs)',
            self::SETTING_OFFICE_WEEK_HOUR => 'Number of Office Hour per Week (e.g. 40 for 40hrs)',
        ];
    }

    /**
     * Retrieves employee setting. If employee setting does not exist, retrieve global
     * setting. If also not exist, return default value.
     * @param $name string
     * @param null $empid string
     * @param null $defaut_value mixed
     * @return mixed
     */
    public static function getSetting($name, $empid = null, $defaut_value = null)
    {
        $setting = null;
        if ($empid && $setting = EmployeeSetting::findOne(['EmpID' => $empid, 'name' => $name])) {
            $setting = $setting->value;
        } elseif ($setting = Setting::findOne(['name' => $name])) {
            $setting = $setting->value;
        } else {
            $setting = $defaut_value;
        }

        return $setting;
    }

    /**
     * Determine the field to set the value and the source to get the value based on 3 different types.
     * @param $type string LeaveApplication::TYPE_LEAVE|LeaveApplication::TYPE_ABSENCE
     * @param $type_leave  string LeaveApplication::TYPE_LEAVE_*
     * @param $type_detail string LeaveApplicationDetail::TYPE_TEACHING_*
     * @param $source set source based on type_detail
     * @return string
     */
    public static function getFieldSource($type, $type_leave, $type_detail, &$source)
    {
        $field = null;
        $prefix = null;
        $suffix = null;
        $hour_suffix = null;
        $field = null;

        if (LeaveApplicationDetail::TYPE_NON_TEACHING == $type_detail) {
            $prefix = 'LC_NT_';
            $hour_suffix = LeaveApplication::TYPE_ABSENCE == $type ? 'DAWP' : '';
            $source = 'days';
        }

        if (LeaveApplicationDetail::TYPE_TEACHING_LECTURE == $type_detail || LeaveApplicationDetail::TYPE_TEACHING_LABORATORY == $type_detail) {
            $prefix = LeaveApplicationDetail::TYPE_TEACHING_LECTURE == $type_detail ? 'LEC_UG' : 'LAB_UG';
            $hour_suffix = LeaveApplication::TYPE_ABSENCE == $type ? 'HAWP' : '';
            $source = LeaveApplicationDetail::TYPE_TEACHING_LECTURE == $type_detail ? 'ug_lec' : 'ug_lab';
        }

        if (LeaveApplicationDetail::TYPE_GRADUATE_SCHOOL_LECTURE == $type_detail || LeaveApplicationDetail::TYPE_GRADUATE_SCHOOL_LABORATORY == $type_detail) {
            $prefix = LeaveApplicationDetail::TYPE_GRADUATE_SCHOOL_LECTURE == $type_detail ? 'LEC_GS' : 'LAB_GS';
            $hour_suffix = LeaveApplication::TYPE_ABSENCE == $type ? 'HAWP' : '';
            $source = LeaveApplicationDetail::TYPE_GRADUATE_SCHOOL_LECTURE == $type_detail ? 'gs_lec' : 'gs_lab';
        }

        switch ($type_leave) {
            case LeaveApplication::TYPE_LEAVE_VACATION:
                $suffix = 'VL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_SICK:
                $suffix = 'SL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_BIRTHDAY:
                $suffix = 'BL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_EMERGENCY:
                $suffix = 'EL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_SOLO_PARENT:
                $suffix = 'SPL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_PATERNITY:
                $suffix = 'PL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_MATERNITY:
                $suffix = 'ML' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_UNION:
                $suffix = 'UL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_SPECIAL_WOMEN:
                $suffix = 'SLW' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_NUPTIAL:
                $suffix = 'NL' . $hour_suffix;
                break;
            case LeaveApplication::TYPE_LEAVE_OFFICIAL_BUSINESS:
                $suffix = 'OB';
                break;
        }

        return $prefix . $suffix;
    }

    /**
     * Determine the model to use based on dtl_type.
     * @param $dtl_type string LeaveApplicationDetail::TYPE_TEACHING_*
     * @param $emp_id string employee number
     * @param $period string period id
     * @return GsLeaveCredits|NtLeaveCredits|UgLeaveCredits|null
     */
    public static function getLeaveCreditModel($dtl_type, $emp_id, $period)
    {
        $leaveCreditModel = null;
        if (LeaveApplicationDetail::TYPE_NON_TEACHING == $dtl_type) {
            $leaveCreditModel = NtLeaveCredits::findOne(['EmpID' => $emp_id, 'PrdID' => $period]);
            if (null === $leaveCreditModel) {
                $leaveCreditModel = new NtLeaveCredits();
            }
        }

        if (LeaveApplicationDetail::TYPE_TEACHING_LECTURE == $dtl_type || LeaveApplicationDetail::TYPE_TEACHING_LABORATORY == $dtl_type) {
            $leaveCreditModel = UgLeaveCredits::findOne(['EmpID' => $emp_id, 'PrdID' => $period]);
            if (null === $leaveCreditModel) {
                $leaveCreditModel = new UgLeaveCredits();
            }
        }

        if (LeaveApplicationDetail::TYPE_GRADUATE_SCHOOL_LECTURE == $dtl_type || LeaveApplicationDetail::TYPE_GRADUATE_SCHOOL_LABORATORY == $dtl_type) {
            $leaveCreditModel = GsLeaveCredits::findOne(['EmpID' => $emp_id, 'PrdID' => $period]);
            if (null === $leaveCreditModel) {
                $leaveCreditModel = new GsLeaveCredits();
            }
        }

        $leaveCreditModel->EmpID = $emp_id;
        $leaveCreditModel->PrdID = $period;

        return $leaveCreditModel;
    }
}