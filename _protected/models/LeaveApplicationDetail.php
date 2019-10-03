<?php

namespace app\models;

use app\helpers\Payroll;
use DateTime;
use DateTimeInterface;
use Yii;
use yii\log\Logger;

/**
 * This is the model class for table "Payroll_leave_application_detail".
 *
 * @property string $EmpID
 * @property string $date_to
 * @property string $date_break_from
 * @property string $date_break_to
 * @property string $days
 * @property string $hours
 * @property int $type
 * @property string|DateTimeInterface $dateToText
 * @property string|DateTimeInterface $dateBreakFromText
 * @property string|DateTimeInterface $dateBreakToText
 */
class LeaveApplicationDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_leave_application_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'date_to', 'date_break_from', 'date_break_to', 'type'], 'required'],
            [['date_to', 'date_break_from', 'date_break_to'], 'safe'],
            [['hours', 'days', 'type'], 'number'],
            [['EmpID'], 'string', 'max' => 50],
            [['date_to', 'EmpID', 'date_break_from', 'date_break_to'], 'unique', 'targetAttribute' => ['date_to', 'EmpID', 'date_break_from', 'date_break_to']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'date_to' => 'Date To',
            'date_break' => 'Date Break From',
            'date_break_to' => 'Date Break To',
            'hours' => 'Hours',
            'days' => 'Days',
            'type' => 'Type',
        ];
    }

    public function setDateToText($date)
    {
        $date = $date instanceof DateTimeInterface ? $date : new DateTime($date);
        $this->date_to = $date->format('Y-m-d H:i:s');
    }

    public function getDateToText()
    {
        return $this->date_to;
    }

    public function setDateBreakFromText($date)
    {
        $date = $date instanceof DateTimeInterface ? $date : new DateTime($date);
        $this->date_break_from = $date->format('Y-m-d H:i:s');
    }

    public function getDateBreakFromText()
    {
        return $this->date_break_from;
    }

    public function setDateBreakToText($date)
    {
        $date = $date instanceof DateTimeInterface ? $date : new DateTime($date);
        $this->date_break_to = $date->format('Y-m-d H:i:s');
    }

    public function getDateBreakToText()
    {
        return $this->date_break_to;
    }

    public function beforeValidate()
    {
        if (null === $this->type) {
            // Type has no use yet. Set to -1 as default.
            $this->type = -1;
        }
        return parent::beforeValidate();
    }

    public function beforeSave($insert)
    {
        $this->computeDays();
        $this->computeHours();
        return parent::beforeSave($insert);
    }

    public function computeDays()
    {
        // TODO skip function if pure teaching
        $offset = 0;
        list($break_from, $break_to) = explode('-', Payroll::getSetting(Payroll::SETTING_BREAK_TIME, $this->EmpID, '12:00-13:00'));
        $self_from = Payroll::strToDate($this->dateBreakFromText);
        $self_to = Payroll::strToDate($this->dateBreakToText);
        $break_from = new DateTime($self_from->format('Y-m-d ') . $break_from);
        $break_to = new DateTime($self_to->format('Y-m-d ') . $break_to);

        if ($self_from >= $break_from) {
            $break_from = $self_from;
        }

        if ($break_to >= $self_to) {
            $break_to = $self_to;
        }

        if ($break_to > $break_from) {
            $interval = $break_from->diff($break_to);
            $offset = $interval->h;
            if ($interval->i > 0) {
                $offset += $interval->i / 60;
            }
            //Yii::$app->log->logger->log('OFFSET IS EQUAL TO ' . print_r($offset, true), Logger::LEVEL_TRACE);
        }

        $interval = $self_from->diff($self_to);
        $this->days = ($interval->h - $offset) / Payroll::getSetting(Payroll::SETTING_OFFICE_HOUR_NUMBER, $this->EmpID, 8);
        if ($interval->i > 0) {
            $this->days += $interval->i / 60 / 8;
        }
    }

    public function computeHours()
    {
        // TODO compute teaching hours affected based on class schedule
    }
}
