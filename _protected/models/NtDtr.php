<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH04_NTDTR".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $NT_DAbsnt
 * @property string $NT_DAbsntRem
 * @property string $NT_HLate
 * @property string $NT_HUdt
 * @property string $NT_DLWOP
 * @property string $NT_DLWOPRem
 * @property string $NT_OTHReg
 * @property string $NT_OTHNDReg
 * @property string $NT_OTHRegExc
 * @property string $NT_OTHNDRegExc
 * @property string $NT_OTHSpcl
 * @property string $NT_OTHNDSpcl
 * @property string $NT_OTHSpclExc
 * @property string $NT_OTHNDSpclExc
 * @property string $NT_OTHLgl
 * @property string $NT_OTHNDLgl
 * @property string $NT_OTHLglExc
 * @property string $NT_OTHNDLglExc
 * @property string $NT_OTHHolSun
 * @property string $NT_OTHNDHolSun
 * @property string $NT_OTHHolSunExc
 * @property string $NT_OTHNDHolExc
 */
class NtDtr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH04_NTDTR';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['NT_DAbsnt', 'NT_HLate', 'NT_HUdt', 'NT_DLWOP', 'NT_OTHReg', 'NT_OTHNDReg', 'NT_OTHRegExc', 'NT_OTHNDRegExc', 'NT_OTHSpcl', 'NT_OTHNDSpcl', 'NT_OTHSpclExc', 'NT_OTHNDSpclExc', 'NT_OTHLgl', 'NT_OTHNDLgl', 'NT_OTHLglExc', 'NT_OTHNDLglExc', 'NT_OTHHolSun', 'NT_OTHNDHolSun', 'NT_OTHHolSunExc', 'NT_OTHNDHolExc'], 'number'],
            [['PrdID', 'NT_DAbsntRem', 'NT_DLWOPRem'], 'string', 'max' => 32],
            [['EmpID', 'PrdID'], 'unique', 'targetAttribute' => ['EmpID', 'PrdID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'PrdID' => 'Prd ID',
            'NT_DAbsnt' =>  'Days Absent',
            'NT_DAbsntRem'  =>  'Days Absent Remarks',
            'NT_HLate'  =>  'Hours Late',
            'NT_HUdt'   =>  'Hours Undertime',
            'NT_DLWOP'  =>  'Days Leave Without Pay',
            'NT_DLWOPRem'   =>  'Days Leave Without Pay Remarks',
            'NT_OTHReg' =>  'Overtime Hours - Regular Holiday',
            'NT_OTHNDReg'   =>  'Overtime Hours - Night Differential Regular Holiday',
            'NT_OTHRegExc'  =>  'Overtime Hours - Regular Holiday Excess',
            'NT_OTHNDRegExc'    =>  'Overtime Hours - Night Differential Regular Holiday Excess',
            'NT_OTHSpcl'    =>  'Overtime Hours - Special Holiday',
            'NT_OTHNDSpcl'  =>  'Overtime Hours - Night Differential Special Holiday',
            'NT_OTHSpclExc' =>  'Overtime Hours - Special Holiday Excess',
            'NT_OTHNDSpclExc'   =>  'Overtime Hours - Night Differential Special Holiday Excess',
            'NT_OTHLgl' =>  'Overtime Hours - Legal Holiday',
            'NT_OTHNDLgl'   =>  'Overtime Hours - Night Differential Legal Holiday',
            'NT_OTHLglExc'  =>  'Overtime Hours - Legal Holiday Excess',
            'NT_OTHNDLglExc'    =>  'Overtime Hours - Night Differential Legal Holiday Excess',
            'NT_OTHHolSun'  =>  'Overtime Hours - Holiday Sunday',
            'NT_OTHNDHolSun'    =>  'Overtime Hours - Night Differential Holiday Sunday',
            'NT_OTHHolSunExc'   =>  'Overtime Hours - Holiday Sunday Excess',
            'NT_OTHNDHolExc'    =>  'Overtime Hours - Night Differential Holiday Sunday Excess',

        ];
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }
}
