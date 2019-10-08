<?php

namespace app\models;

use app\helpers\Payroll;
use DateInterval;
use DateTime;
use DateTimeInterface;
use Yii;
use yii\db\Transaction;

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
    const STATUS_DISAPPROVE_HEAD = 3;
    const STATUS_APPROVE_HRD = 4;
    const STATUS_DISAPPROVE_HRD = 5;

    const TYPE_LEAVE_VACATION = 'TYPE_LEAVE_VACATION';
    const TYPE_LEAVE_SICK = 'TYPE_LEAVE_SICK';
    const TYPE_LEAVE_BIRTHDAY = 'TYPE_LEAVE_BIRTHDAY';
    const TYPE_LEAVE_EMERGENCY = 'TYPE_LEAVE_EMERGENCY';
    const TYPE_LEAVE_SOLO_PARENT = 'TYPE_LEAVE_SOLO_PARENT';
    const TYPE_LEAVE_PATERNITY = 'TYPE_LEAVE_PATERNITY';
    const TYPE_LEAVE_MATERNITY = 'TYPE_LEAVE_MATERNITY';
    const TYPE_LEAVE_UNION = 'TYPE_LEAVE_UNION';
    const TYPE_LEAVE_SPECIAL_WOMEN = 'TYPE_LEAVE_SPECIAL_WOMEN';
    const TYPE_LEAVE_NUPTIAL = 'TYPE_LEAVE_NUPTIAL';
    const TYPE_LEAVE_OFFICIAL_BUSINESS = 'TYPE_LEAVE_OFFICIAL_BUSINESS';

    const TYPE_LEAVE = 'TYPE_LEAVE';
    const TYPE_ABSENCE = 'TYPE_ABSENCE';

    private $_EmpID;
    private $_date_from;
    private $_date_to;

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
            [['EmpID', 'type_leave', 'date_from', 'date_to', 'type'], 'required'],
            [['date_from', 'date_to', 'date_created', 'date_updated', 'date_approve_head', 'date_approve_hrd'], 'safe'],
            [['status'], 'integer'],
            [['EmpID', 'type_leave', 'type'], 'string', 'max' => 50],
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
            'type' => 'Type',
            'type_leave' => 'Sub-Type',
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

        $this->_EmpID = $this->EmpID;
        $this->_date_from = $this->date_from;
        $this->_date_to = $this->date_to;
    }

    public function beforeDelete()
    {
        // Delete details related to this leave application.
        LeaveApplicationDetail::deleteAll(['EmpID' => $this->EmpID, 'date_to' => $this->date_to]);
        return parent::beforeDelete();
    }

    public function beforeValidate()
    {
        if (null === $this->status) {
            $this->status = self::STATUS_PENDING;
        }

        if ($this->isNewRecord && self::STATUS_PENDING != $this->status) {
            $this->addError('status', 'Status should be pending for new applications.');
        }

        if (!$this->isNewRecord && self::STATUS_PENDING != $this->status) {
            if ($this->_EmpID != $this->EmpID) {
                $this->addError('EmpID', 'Status should be pending before changing EmpID');
            }

            if ($this->_date_from != $this->date_from) {
                $this->addError('date_from', 'Status should be pending before changing Date From');
            }

            if ($this->_date_to != $this->date_to) {
                $this->addError('date_to', 'Status should be pending before changing Date To');
            }
        }

        if (self::STATUS_PENDING == $this->status) {
            $this->createDetails();
        }

        return parent::beforeValidate();
    }

    public function beforeSave($insert)
    {
        if (self::STATUS_PENDING == $this->status) {
            $this->date_approve_head = null;
            $this->date_approve_hrd = null;
        }

        if (self::STATUS_APPROVE_HEAD == $this->status || self::STATUS_DISAPPROVE_HEAD == $this->status) {
            if (empty($this->date_approve_head)) {
                $this->date_approve_head = date(Payroll::DATE_FORMAT);
            }
        }

        if (self::STATUS_APPROVE_HRD == $this->status || self::STATUS_DISAPPROVE_HRD == $this->status) {
            if (empty($this->date_approve_head)) {
                $this->date_approve_head = date(Payroll::DATE_FORMAT);
            }
            if (empty($this->date_approve_hrd)) {
                $this->date_approve_hrd = date(Payroll::DATE_FORMAT);
            }
        }
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

    /**
     * Populate leave details with the breakdown of dates based on specified range.
     *
     * For example, the employee's day off is saturday and the specified range is
     * Thu, Jan 13 to Tue, Jan 18; the leave details will be populated with
     * the following dates:
     *
     *  - Jan 13
     *  - Jan 14
     *  - Jan 17
     *  - Jan 18
     *
     * @throws \yii\db\Exception
     */
    public function createDetails()
    {
        $START_DATE = Payroll::strToDate($this->date_from);
        $date_iterator = Payroll::strToDate($this->date_from);
        $END_DATE = Payroll::strToDate($this->date_to);
        $transaction = Yii::$app->db->beginTransaction();
        $this->beforeCreateDetails($transaction);

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
                $transaction->rollBack();
                foreach ($leaveApplicationDetail->errors as $error) {
                    $this->addError('EmpID', implode(', ', $error));
                }
                return;
            }
            $date_iterator->add(new DateInterval('P1D'));
        } while ($date_iterator->format('Ymd') <= $END_DATE->format('Ymd'));
        $transaction->commit();
    }

    public function beforeCreateDetails(Transaction $transaction)
    {
        if (!$this->isNewRecord) {
            try {
                // Delete details related to this leave application.
                LeaveApplicationDetail::deleteAll(['EmpID' => $this->_EmpID, 'date_to' => $this->_date_to]);
            } catch (\Exception $e) {
                $transaction->rollBack();
                throw $e;
            }
        }
    }
}
