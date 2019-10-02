<?php

namespace app\models;

use Faker\Provider\DateTime;
use DateTimeInterface;
use Yii;

/**
 * This is the model class for table "leave_application".
 *
 * @property string $EmpID
 * @property string $PrdID
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
