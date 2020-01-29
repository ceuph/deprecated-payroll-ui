<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH04_TCDTR".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $UG_HAbsntLec
 * @property string $UG_HAbsntLecRem
 * @property string $UG_HCMTLec
 * @property string $UG_HCMTLecRem
 * @property string $UG_HLWOPLec
 * @property string $UG_HLWOPLecRem
 * @property string $UG_HAbsntLab
 * @property string $UG_HAbsntLabRem
 * @property string $UG_HCMTLab
 * @property string $UG_HCMTLabRem
 * @property string $UG_HLWOPLab
 * @property string $UG_HLWOPLabRem
 * @property string $UG_HAbsntClc
 * @property string $UG_HAbsntClcRem
 * @property string $UG_HCMTClc
 * @property string $UG_HCMTClcRem
 * @property string $UG_HLWOPClc
 * @property string $UG_HLWOPClcRem
 * @property string $GS_HAbsntLec
 * @property string $GS_HAbsntLecRem
 * @property string $GS_HCMTLec
 * @property string $GS_HCMTLecRem
 * @property string $GS_HLWOPLec
 * @property string $GS_HLWOPLecRem
 * @property string $GS_HAbsntLab
 * @property string $GS_HAbsntLabRem
 * @property string $GS_HCMTLab
 * @property string $GS_HCMTLabRem
 * @property string $GS_HLWOPLab
 * @property string $GS_HLWOPLabRem
 * @property string $GS_HAbsntClc
 * @property string $GS_HAbsntClcRem
 * @property string $GS_HCMTClc
 * @property string $GS_HCMTClcRem
 * @property string $GS_HLWOPClc
 * @property string $GS_HLWOPClcRem
 */
class TcDtr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH04_TCDTR';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['UG_HAbsntLec', 'UG_HCMTLec', 'UG_HLWOPLec', 'UG_HAbsntLab', 'UG_HCMTLab', 'UG_HLWOPLab', 'UG_HAbsntClc', 'UG_HCMTClc', 'UG_HLWOPClc', 'GS_HAbsntLec', 'GS_HCMTLec', 'GS_HLWOPLec', 'GS_HAbsntLab', 'GS_HCMTLab', 'GS_HLWOPLab', 'GS_HAbsntClc', 'GS_HCMTClc', 'GS_HLWOPClc'], 'number'],
            [['PrdID', 'UG_HAbsntLecRem', 'UG_HCMTLecRem', 'UG_HLWOPLecRem', 'UG_HAbsntLabRem', 'UG_HCMTLabRem', 'UG_HLWOPLabRem', 'UG_HAbsntClcRem', 'UG_HCMTClcRem', 'UG_HLWOPClcRem', 'GS_HAbsntLecRem', 'GS_HCMTLecRem', 'GS_HLWOPLecRem', 'GS_HAbsntLabRem', 'GS_HCMTLabRem', 'GS_HLWOPLabRem', 'GS_HAbsntClcRem', 'GS_HCMTClcRem', 'GS_HLWOPClcRem'], 'string', 'max' => 32],
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
           'UG_HAbsntLec'   =>  'Undergrad - Lecture Hours Absent',
            'UG_HAbsntLecRem'   =>  'Undergrad - Lecture Hours Absent Remarks',
            'UG_HCMTLec'    =>  'Undergrad - Lecture Hours Class Monitoring Theme ',
            'UG_HCMTLecRem' =>  'Undergrad - Lecture Hours Class Monitoring Theme Remarks ',
            'UG_HLWOPLec'   =>  'Undergrad - Lecture Hours Leave Wihout Pay',
            'UG_HLWOPLecRem'    =>  'Undergrad - Lecture Hours Leave Wihout Pay Remarks',
            'UG_HAbsntLab'  =>  'Undergrad - Laboratory Hours Absent',
            'UG_HAbsntLabRem'   =>  'Undergrad - Laboratory Hours Absent Remarks',
            'UG_HCMTLab'    =>  'Undergrad - Laboratory Hours Class Monitoring Theme ',
            'UG_HCMTLabRem' =>  'Undergrad - Laboratory Hours Class Monitoring Theme Remarks ',
            'UG_HLWOPLab'   =>  'Undergrad - Laboratory Hours Leave Wihout Pay',
            'UG_HLWOPLabRem'    =>  'Undergrad - Laboratory Hours Leave Wihout Pay Remarks',
            'UG_HAbsntClc'  =>  'Undergrad - Clinic Hours Absent',
            'UG_HAbsntClcRem'   =>  'Undergrad - Clinic Hours Absent Remarks',
            'UG_HCMTClc'    =>  'Undergrad - Clinic Hours Class Monitoring Theme ',
            'UG_HCMTClcRem' =>  'Undergrad - Clinic Hours Class Monitoring Theme Remarks ',
            'UG_HLWOPClc'   =>  'Undergrad - Clinic Hours Leave Wihout Pay',
            'UG_HLWOPClcRem'    =>  'Undergrad - Clinic Hours Leave Wihout Pay Remarks',
            'GS_HAbsntLec'  =>  'Gradschool - Lecture Hours Absent',
            'GS_HAbsntLecRem'   =>  'Gradschool - Lecture Hours Absent Remarks',
            'GS_HCMTLec'    =>  'Gradschool - Lecture Hours Class Monitoring Theme ',
            'GS_HCMTLecRem' =>  'Gradschool - Lecture Hours Class Monitoring Theme Remarks ',
            'GS_HLWOPLec'   =>  'Gradschool - Lecture Hours Leave Wihout Pay',
            'GS_HLWOPLecRem'    =>  'Gradschool - Lecture Hours Leave Wihout Pay Remarks',
            'GS_HAbsntLab'  =>  'Gradschool - Laboratory Hours Absent',
            'GS_HAbsntLabRem'   =>  'Gradschool - Laboratory Hours Absent Remarks',
            'GS_HCMTLab'    =>  'Gradschool - Laboratory Hours Class Monitoring Theme ',
            'GS_HCMTLabRem' =>  'Gradschool - Laboratory Hours Class Monitoring Theme Remarks ',
            'GS_HLWOPLab'   =>  'Gradschool - Laboratory Hours Leave Wihout Pay',
            'GS_HLWOPLabRem'    =>  'Gradschool - Laboratory Hours Leave Wihout Pay Remarks',
            'GS_HAbsntClc'  =>  'Gradschool - Clinic Hours Absent',
            'GS_HAbsntClcRem'   =>  'Gradschool - Clinic Hours Absent Remarks',
            'GS_HCMTClc'    =>  'Gradschool - Clinic Hours Class Monitoring Theme ',
            'GS_HCMTClcRem' =>  'Gradschool - Clinic Hours Class Monitoring Theme Remarks ',
            'GS_HLWOPClc'   =>  'Gradschool - Clinic Hours Leave Wihout Pay',
            'GS_HLWOPClcRem'    =>  'Gradschool - Clinic Hours Leave Wihout Pay Remarks',

        ];
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }
}
