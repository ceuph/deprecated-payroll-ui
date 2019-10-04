<?php


namespace app\helpers;

use app\models\EmployeeSetting;
use app\models\LeaveApplication;
use app\models\LeaveApplicationDetail;
use app\models\Setting;
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
     * @param $dateFrom DateTimeInterface|string starting date of pay period.
     * @param $dateTo DateTimeInterface|string end date of pay period.
     * @param $joinDetails bool set to true to inner join details.
     * @return Query
     * @throws Exception
     */
    public static function leaveQuery($dateFrom, $dateTo, $joinDetails = false)
    {
        $query = new Query();
        $query->from(LeaveApplication::tableName() . ' hdr');

        if ($joinDetails) {
            $query->innerJoin(LeaveApplicationDetail::tableName() . ' dtl', 'hdr.EmpID = dtl.EmpID AND hdr.date_to = dtl.date_to');
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
}