<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Payroll_employee_setting".
 *
 * @property string $EmpID
 * @property string $name
 * @property resource $value
 */
class EmployeeSetting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_employee_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'name', 'value'], 'required'],
            [['value'], 'string'],
            [['EmpID', 'name'], 'string', 'max' => 128],
            [['EmpID', 'name'], 'unique', 'targetAttribute' => ['EmpID', 'name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Employee ID',
            'name' => 'Name',
            'value' => 'Value',
        ];
    }

    public function beforeSave($insert)
    {
        $this->value = serialize($this->value);
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $this->EmpID = trim($this->EmpID);
        $this->name = trim($this->name);
        $this->value = unserialize($this->value);
        parent::afterFind();
    }
}
