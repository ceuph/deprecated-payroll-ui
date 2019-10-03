<?php

namespace app\models;

use app\helpers\Payroll;
use DateInterval;
use DateTime;
use DateTimeInterface;
use Yii;
use yii\db\Exception;

/**
 * This is the model class for table "leave_application".
 *
 * @property string $EmpID
 * @property string $type_leave
 * @property string $date_from
 * @property string $date_to
 * @property string $date_created
 * @property string $date_updated
 * @property string $date_approve_head
 * @property string $date_approve_hrd
 * @property int $status
 */
class LeaveApplication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    const STATUS_PENDING = 1;
    const STATUS_APPROVE_HEAD = 2;
    const STATUS_DIS_APPROVE_HEAD = 3;
    const STATUS_APPROVE_HRD = 4;
    const STATUS_DIS_APPROVE_HRD = 5;


    public static function tableName()
    {
        return 'Payroll_leave_application';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'type_leave', 'date_from', 'date_to'], 'required'],
            [['date_from', 'date_to', 'date_created', 'date_updated', 'date_approve_head', 'date_approve_hrd'], 'safe'],
            [['status'], 'integer'],
            [['EmpID', 'type_leave'], 'string', 'max' => 50],
            [['date_to', 'EmpID'], 'unique', 'targetAttribute' => ['date_to', 'EmpID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'type_leave' => 'Type Leave',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            'date_created' => 'Date Created',
            'date_updated' => 'Date Updated',
            'date_approve_head' => 'Date Approve Head',
            'date_approve_hrd' => 'Date Approve Hrd',
            'status' => 'Status',
        ];
    }

    public function afterFind() {
        parent::afterFind ();
        $this->date_from=Yii::$app->formatter->asDateTime($this->date_from);
        $this->date_to=Yii::$app->formatter->asDateTime($this->date_to);
    }

    public function beforeDelete()
    {
        // Delete details related to this leave application.
        LeaveApplicationDetail::deleteAll(['EmpID' => $this->EmpID, 'date_to' => $this->date_to]);
        return parent::beforeDelete();
    }

    public function beforeSave($insert)
    {
        $START_DATE = Payroll::strToDate($this->date_from);
        $date_iterator = Payroll::strToDate($this->date_from);
        $END_DATE = Payroll::strToDate($this->date_to);
        $transact = Yii::$app->db->beginTransaction();
        if (!$insert) {
            try {
                // Delete details related to this leave application.
                LeaveApplicationDetail::deleteAll(['EmpID' => $this->EmpID, 'date_to' => $this->date_to]);
            } catch (\Exception $e) {
                $transact->rollBack();
                throw $e;
            }
        }
        // start creating the details
        do {
            if (0 == $date_iterator->format('w')
                || Payroll::getSetting(Payroll::SETTING_DAY_OFF, $this->EmpID, null)
                == $date_iterator->format('w')) {
                $date_iterator->add(new DateInterval('P1D'));
                continue;
            }

            $leaveApplicationDetail = new LeaveApplicationDetail();
            $leaveApplicationDetail->EmpID = $this->EmpID;
            $leaveApplicationDetail->dateToText = $this->date_to;

            if ($START_DATE == $date_iterator) {
                // Get date and time set by user to determine if afternoon half-day or under-time.
                $leaveApplicationDetail->dateBreakFromText = $date_iterator;
            } else {
                // If not the first day of leave, set the start of office hour as starting time.
                $leaveApplicationDetail->dateBreakFromText = $date_iterator->format('Y-m-d ')
                    . Payroll::getSetting(Payroll::SETTING_OFFICE_BEGIN_HOUR, $this->EmpID, ' 08:00');
            }

            if ($END_DATE->format('Ymd') == $date_iterator->format('Ymd')) {
                // Get date and time set by user to determine if morning half-day or under-time.
                $leaveApplicationDetail->dateBreakToText = $END_DATE;
            } else {
                // If not the last day of leave, set the end of office hour as ending time.
                $leaveApplicationDetail->dateBreakToText = $date_iterator->format('Y-m-d ')
                    . Payroll::getSetting(Payroll::SETTING_OFFICE_END_HOUR, $this->EmpID, ' 17:00');
            }

            if (!$leaveApplicationDetail->save()) {
                $transact->rollBack();
                throw new Exception('An error occurred while saving leave application.');
            }

            $date_iterator->add(new DateInterval('P1D'));
        } while ($date_iterator->format('Ymd') <= $END_DATE->format('Ymd'));
        $transact->commit();
        return parent::beforeSave($insert);
    }

    public function setDateFromText($date)
    {
        $date = $date instanceof DateTimeInterface ? $date : new DateTime($date);
        $this->date_from = $date->format('Y-m-d H:i:s');
    }

    public function getDateFromText()
    {
        return date('D, d M y', $this->date_from);
    }

    public function setDateToText($date)
    {
        $date = $date instanceof DateTimeInterface ? $date : new DateTime($date);
        $this->date_to = $date->format('Y-m-d H:i:s');
    }

    public function getDateToText()
    {
        return date('D, d M y', $this->date_to);
    }
}
