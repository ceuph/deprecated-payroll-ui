<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Payroll_employee_list".
 *
 * @property string $EmpID
 * @property string $LName
 * @property string $FName
 * @property string $MName
 * @property string $MI
 * @property string $SchoolCollege
 * @property string $Gender
 * @property string $Department
 * @property string $Position
 * @property string $Campus
 * @property string $MainJob
 */
class PayrollEmployeeList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_employee_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'LName', 'FName', 'MName', 'MI'], 'required'],
            [['EmpID', 'LName', 'FName', 'MName', 'SchoolCollege', 'Position', 'Campus', 'MainJob'], 'string', 'max' => 50],
            [['MI'], 'string', 'max' => 3],
            [['Gender'], 'string', 'max' => 1],
            [['Department'], 'string', 'max' => 10],
            [['EmpID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'LName' => 'L Name',
            'FName' => 'F Name',
            'MName' => 'M Name',
            'MI' => 'Mi',
            'SchoolCollege' => 'School College',
            'Gender' => 'Gender',
            'Department' => 'Department',
            'Position' => 'Position',
            'Campus' => 'Campus',
            'MainJob' => 'Main Job',
        ];
    }

}
