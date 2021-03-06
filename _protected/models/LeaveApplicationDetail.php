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
 * @property string $ug_lec
 * @property string $ug_lab
 * @property string $gs_lec
 * @property string $gs_lab
 * @property int $type
 * @property string|DateTimeInterface $dateToText
 * @property string|DateTimeInterface $dateBreakFromText
 * @property string|DateTimeInterface $dateBreakToText
 */
class LeaveApplicationDetail extends \yii\db\ActiveRecord
{
    const TYPE_NOT_PROCESSED = 'NOT_PROCESSED';
    const TYPE_NON_TEACHING = 'NON_TEACHING';
    const TYPE_TEACHING_LECTURE = 'TEACHING_LECTURE';
    const TYPE_TEACHING_LABORATORY = 'TEACHING_LABORATORY';
    const TYPE_GRADUATE_SCHOOL_LECTURE = 'GRADUATE_SCHOOL_LECTURE';
    const TYPE_GRADUATE_SCHOOL_LABORATORY = 'GRADUATE_SCHOOL_LABORATORY';

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
            [['days', 'ug_lec', 'ug_lab', 'gs_lec', 'gs_lab'], 'number'],
            [['EmpID'], 'string', 'max' => 150],
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
        if (null == $this->type) {
            $this->type = self::TYPE_NOT_PROCESSED;
        }
        return parent::beforeValidate();
    }

    public function beforeSave($insert)
    {
        $this->computeDays();
        $this->computeHours();
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $this->EmpID = trim($this->EmpID);
        $this->type = trim($this->type);
        parent::afterFind();
    }

    /**
     * Sets the $this->days based on computed value. Result is based on the number of hours
     * leave per day divided by the number of required office hours per day.
     * @throws \Exception
     */
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

        if ($this->days > 0) {
            $this->addType(self::TYPE_NON_TEACHING);
        }
    }

    public function computeHours()
    {
        // TODO compute teaching hours affected based on class schedule, if done, don't forget 'to remove' lines below
        $this->ug_lec = 1; // to remove
        $this->ug_lab = 1.5; // to remove
        $this->gs_lec = 2; // to remove
        $this->gs_lab = 2.5; // to remove

        if ($this->ug_lec > 0) {
            $this->addType(self::TYPE_TEACHING_LECTURE);
        }

        if ($this->ug_lab > 0) {
            $this->addType(self::TYPE_TEACHING_LABORATORY);
        }

        if ($this->gs_lec > 0) {
            $this->addType(self::TYPE_GRADUATE_SCHOOL_LECTURE);
        }

        if ($this->gs_lab > 0) {
            $this->addType(self::TYPE_GRADUATE_SCHOOL_LABORATORY);
        }
    }

    public function addType($type)
    {
        $types = explode('|', $this->type);

        if (in_array(self::TYPE_NOT_PROCESSED, $types)) {
            unset($types[array_search(self::TYPE_NOT_PROCESSED, $types)]);
        }

        if (!in_array($type, $types)) {
            $types[] = $type;
        }

        $this->type = implode('|', $types);
    }

    public function isType($type)
    {
        return in_array($type, explode('|', $this->type));
    }
}
