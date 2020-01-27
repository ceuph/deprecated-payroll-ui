<?php

namespace app\models;

use app\helpers\Payroll;

use Yii;

/**
 * This is the model class for table "SH03_NTLEAVECREDITS".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $LC_NT_VLAdj
 * @property string $LC_NT_VLDAWP
 * @property string $LC_NT_VLRem
 * @property string $LC_NT_VL
 * @property string $LC_NT_SLAdj
 * @property string $LC_NT_SLDAWP
 * @property string $LC_NT_SLRem
 * @property string $LC_NT_SL
 * @property string $LC_NT_BLAdj
 * @property string $LC_NT_BLDAWP
 * @property string $LC_NT_BLRem
 * @property string $LC_NT_BL
 * @property string $LC_NT_ELAdj
 * @property string $LC_NT_ELDAWP
 * @property string $LC_NT_ELRem
 * @property string $LC_NT_EL
 * @property string $LC_NT_SPLAdj
 * @property string $LC_NT_SPLDAWP
 * @property string $LC_NT_SPLRem
 * @property string $LC_NT_SPL
 * @property string $LC_NT_PLAdj
 * @property string $LC_NT_PLDAWP
 * @property string $LC_NT_PLRem
 * @property string $LC_NT_PL
 * @property string $LC_NT_MLAdj
 * @property string $LC_NT_MLDAWP
 * @property string $LC_NT_MLRem
 * @property string $LC_NT_ML
 * @property string $LC_NT_ULAdj
 * @property string $LC_NT_ULDAWP
 * @property string $LC_NT_ULRem
 * @property string $LC_NT_UL
 * @property string $LC_NT_SLWAdj
 * @property string $LC_NT_SLWDAWP
 * @property string $LC_NT_SLWRem
 * @property string $LC_NT_SLW
 * @property string $LC_NT_NLAdj
 * @property string $LC_NT_NLDAWP
 * @property string $LC_NT_NLRem
 * @property string $LC_NT_NL
 * @property string $NT_OB
 * @property string $NT_OBRem
 */
class NtLeaveCredits extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH03_NTLEAVECREDITS';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['LC_NT_VLAdj', 'LC_NT_VLDAWP', 'LC_NT_VL', 'LC_NT_SLAdj', 'LC_NT_SLDAWP', 'LC_NT_SL', 'LC_NT_BLAdj', 'LC_NT_BLDAWP', 'LC_NT_BL', 'LC_NT_ELAdj', 'LC_NT_ELDAWP', 'LC_NT_EL', 'LC_NT_SPLAdj', 'LC_NT_SPLDAWP', 'LC_NT_SPL', 'LC_NT_PLAdj', 'LC_NT_PLDAWP', 'LC_NT_PL', 'LC_NT_MLAdj', 'LC_NT_MLDAWP', 'LC_NT_ML', 'LC_NT_ULAdj', 'LC_NT_ULDAWP', 'LC_NT_UL', 'LC_NT_SLWAdj', 'LC_NT_SLWDAWP', 'LC_NT_SLW', 'LC_NT_NLAdj', 'LC_NT_NLDAWP', 'LC_NT_NL', 'NT_OB'], 'number'],
            [['PrdID', 'LC_NT_VLRem', 'LC_NT_SLRem', 'LC_NT_BLRem', 'LC_NT_ELRem', 'LC_NT_SPLRem', 'LC_NT_PLRem', 'LC_NT_MLRem', 'LC_NT_ULRem', 'LC_NT_SLWRem', 'LC_NT_NLRem', 'NT_OBRem'], 'string', 'max' => 32],
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
            'LC_NT_VLAdj'   =>  'Non-Teaching Vacation Leave Adjustment or New Balance',
            'LC_NT_VLDAWP'  =>  'Non-Teaching Vacation Hours Absent With Pay',
            'LC_NT_VLRem'   =>  'Non-Teaching Vacation Leave Remarks',
            'LC_NT_VL'  =>  'Non-Teaching Vacation Leave Used',
            'LC_NT_SLAdj'   =>  'Non-Teaching Sick Leave Adjustment or New Balance',
            'LC_NT_SLDAWP'  =>  'Non-Teaching Sick Hours Absent With Pay',
            'LC_NT_SLRem'   =>  'Non-Teaching Sick Leave Remarks',
            'LC_NT_SL'  =>  'Non-Teaching Sick Leave Used',
            'LC_NT_BLAdj'   =>  'Non-Teaching Birthday Leave Adjustment or New Balance',
            'LC_NT_BLDAWP'  =>  'Non-Teaching Birthday Hours Absent With Pay',
            'LC_NT_BLRem'   =>  'Non-Teaching Birthday Leave Remarks',
            'LC_NT_BL'  =>  'Non-Teaching Birthday Leave Used',
            'LC_NT_ELAdj'   =>  'Non-Teaching Emergency Leave Adjustment or New Balance',
            'LC_NT_ELDAWP'  =>  'Non-Teaching Emergency Hours Absent With Pay',
            'LC_NT_ELRem'   =>  'Non-Teaching Emergency Leave Remarks',
            'LC_NT_EL'  =>  'Non-Teaching Emergency Leave Used',
            'LC_NT_SPLAdj'  =>  'Non-Teaching Solo Parent Leave Adjustment or New Balance',
            'LC_NT_SPLDAWP' =>  'Non-Teaching Solo Parent Hours Absent With Pay',
            'LC_NT_SPLRem'  =>  'Non-Teaching Solo Parent Leave Remarks',
            'LC_NT_SPL' =>  'Non-Teaching Solo Parent Leave Used',
            'LC_NT_PLAdj'   =>  'Non-Teaching Paternity Leave Adjustment or New Balance',
            'LC_NT_PLDAWP'  =>  'Non-Teaching Paternity Hours Absent With Pay',
            'LC_NT_PLRem'   =>  'Non-Teaching Paternity Leave Remarks',
            'LC_NT_PL'  =>  'Non-Teaching Paternity Leave Used',
            'LC_NT_MLAdj'   =>  'Non-Teaching Maternity Leave Adjustment or New Balance',
            'LC_NT_MLDAWP'  =>  'Non-Teaching Maternity Hours Absent With Pay',
            'LC_NT_MLRem'   =>  'Non-Teaching Maternity Leave Remarks',
            'LC_NT_ML'  =>  'Non-Teaching Maternity Leave Used',
            'LC_NT_ULAdj'   =>  'Non-Teaching Union Leave Adjustment or New Balance',
            'LC_NT_ULDAWP'  =>  'Non-Teaching Union Hours Absent With Pay',
            'LC_NT_ULRem'   =>  'Non-Teaching Union Leave Remarks',
            'LC_NT_UL'  =>  'Non-Teaching Union Leave Used',
            'LC_NT_SLWAdj'  =>  'Non-Teaching Special Leave for Women Leave Adjustment or New Balance',
            'LC_NT_SLWDAWP' =>  'Non-Teaching Special Leave for Women Hours Absent With Pay',
            'LC_NT_SLWRem'  =>  'Non-Teaching Special Leave for Women Leave Remarks',
            'LC_NT_SLW' =>  'Non-Teaching Special Leave for Women Used',
            'LC_NT_NLAdj'   =>  'Non-Teaching Nuptial Leave Adjustment or New Balance',
            'LC_NT_NLDAWP'  =>  'Non-Teaching Nuptial Hours Absent With Pay',
            'LC_NT_NLRem'   =>  'Non-Teaching Nuptial Leave Remarks',
            'LC_NT_NL'  =>  'Non-Teaching Nuptial Leave Used',
            'NT_OB' =>  'Non-Teaching Official Business Used',
            'NT_OBRem'  =>  'Non-Teaching Official Business Remarks',

        ];
    }

    public function beforeSave($insert)
    {
        if(substr($this->PrdID, -2) == 01)
        {
            $this->LC_NT_VLAdj = Payroll::getSetting(Payroll::SETTING_VL_CREDITS,$this->EmpID);
            $this->LC_NT_SLAdj = Payroll::getSetting(Payroll::SETTING_SL_CREDITS,$this->EmpID);
            $this->LC_NT_BLAdj = Payroll::getSetting(Payroll::SETTING_BD_CREDITS,$this->EmpID);
            $this->LC_NT_ELAdj = Payroll::getSetting(Payroll::SETTING_EL_CREDITS,$this->EmpID);
            $this->LC_NT_SLAdj = Payroll::getSetting(Payroll::SETTING_SL_CREDITS,$this->EmpID);
            $this->LC_NT_PLAdj = Payroll::getSetting(Payroll::SETTING_PL_CREDITS,$this->EmpID);
            $this->LC_NT_MLAdj = Payroll::getSetting(Payroll::SETTING_ML_CREDITS,$this->EmpID);
            $this->LC_NT_ULAdj = Payroll::getSetting(Payroll::SETTING_UL_CREDITS,$this->EmpID);
            $this->LC_NT_SLWAdj = Payroll::getSetting(Payroll::SETTING_SLW_CREDITS,$this->EmpID);
            $this->LC_NT_NLAdj = Payroll::getSetting(Payroll::SETTING_NL_CREDITS,$this->EmpID);
        }
        
        return parent::beforeSave($insert);
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }
}
