<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH07_NTOTHERINCOME".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $NT_AdvIP
 * @property string $NT_HazardPay
 * @property string $NT_Honorarium
 * @property string $NT_HRMAllowNTax
 * @property string $NT_HRMAllowTax
 * @property string $NT_IPAllow
 * @property string $NT_RLEAllowNTax
 * @property string $NT_RLEAllowTax
 * @property string $NT_RFDAlumniTick
 * @property string $NT_RFDCCLoan
 * @property string $NT_RFDCOOP
 * @property string $NT_RFDFAWU
 * @property string $NT_RFDHDMFMPL
 * @property string $NT_RFDHDMFP
 * @property string $NT_RFDHDMFU
 * @property string $NT_RFDHF
 * @property string $NT_RFDMedicare
 * @property string $NT_RFDPHIC
 * @property string $NT_RFDSSSCondo
 * @property string $NT_RFDSSSL
 * @property string $NT_RFDSSSP
 * @property string $NT_RFDTax
 * @property string $NT_RFDTaxAdv
 * @property string $NT_RFDTF
 * @property string $NT_RFDOthers
 * @property string $NT_RFDOthersRem
 * @property string $NT_BNMidYrNTax
 * @property string $NT_BNMidYrTax
 * @property string $NT_BNSLVLNTax
 * @property string $NT_BNSLVLTax
 * @property string $NT_BNTMPNTax
 * @property string $NT_BNTMPTax
 * @property string $NT_BNXmasNTax
 * @property string $NT_BNXmasTax
 * @property string $NT_SHSBNTMPNTax
 * @property string $NT_SHSBNTMPTax
 * @property string $NT_SSBNMidYrTax
 * @property string $NT_SSBNSLVLTax
 * @property string $NT_SSBNTMPTax
 * @property string $NT_SSBNXmasTax
 * @property string $NT_BonusNTax
 * @property string $NT_BonusTax
 * @property string $NT_AdjIPAllow
 * @property string $NT_AdviserFee
 * @property string $NT_BackPay
 * @property string $NT_BackPayEFA
 * @property string $NT_BackPayCOLA
 * @property string $NT_BigClassPay
 * @property string $NT_CLPPay
 * @property string $NT_ClassOrgAdvs
 * @property string $NT_CommOutrchPay
 * @property string $NT_CommImmersion
 * @property string $NT_Coordi
 * @property string $NT_CompreExam
 * @property string $NT_CriticWork
 * @property string $NT_DentPreBoard
 * @property string $NT_DentALE
 * @property string $NT_Differential
 * @property string $NT_EnhcmtSeminar
 * @property string $NT_EnrAdvising
 * @property string $NT_ExpertisePrm
 * @property string $NT_ExtProgPay
 * @property string $NT_Externship
 * @property string $NT_Goodwill
 * @property string $NT_GratuityNTax
 * @property string $NT_GratuityTax
 * @property string $NT_HardshipPay
 * @property string $NT_HonorariumNF
 * @property string $NT_HosptOrient
 * @property string $NT_IncluProg
 * @property string $NT_IncentiveLP
 * @property string $NT_IncrmtlProceeds
 * @property string $NT_InternshipPay
 * @property string $NT_MaternityBnft
 * @property string $NT_OneTimeIncentive
 * @property string $NT_Practicum
 * @property string $NT_Proctorship
 * @property string $NT_ReviewNTax
 * @property string $NT_ReviewTax
 * @property string $NT_RICE
 * @property string $NT_SalarySHS
 * @property string $NT_SpclExam
 * @property string $NT_Substitution
 * @property string $NT_Training
 * @property string $NT_TranspoAllow
 * @property string $NT_Tutorial
 * @property string $NT_OINTax
 * @property string $NT_OINTaxRem
 * @property string $NT_OITax
 * @property string $NT_OITaxRem
 */
class NtOtherIncome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH07_NTOTHERINCOME';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['NT_AdvIP', 'NT_HazardPay', 'NT_Honorarium', 'NT_HRMAllowNTax', 'NT_HRMAllowTax', 'NT_IPAllow', 'NT_RLEAllowNTax', 'NT_RLEAllowTax', 'NT_RFDAlumniTick', 'NT_RFDCCLoan', 'NT_RFDCOOP', 'NT_RFDFAWU', 'NT_RFDHDMFMPL', 'NT_RFDHDMFP', 'NT_RFDHDMFU', 'NT_RFDHF', 'NT_RFDMedicare', 'NT_RFDPHIC', 'NT_RFDSSSCondo', 'NT_RFDSSSL', 'NT_RFDSSSP', 'NT_RFDTax', 'NT_RFDTaxAdv', 'NT_RFDTF', 'NT_RFDOthers', 'NT_BNMidYrNTax', 'NT_BNMidYrTax', 'NT_BNSLVLNTax', 'NT_BNSLVLTax', 'NT_BNTMPNTax', 'NT_BNTMPTax', 'NT_BNXmasNTax', 'NT_BNXmasTax', 'NT_SHSBNTMPNTax', 'NT_SHSBNTMPTax', 'NT_SSBNMidYrTax', 'NT_SSBNSLVLTax', 'NT_SSBNTMPTax', 'NT_SSBNXmasTax', 'NT_BonusNTax', 'NT_BonusTax', 'NT_AdjIPAllow', 'NT_AdviserFee', 'NT_BackPay', 'NT_BackPayEFA', 'NT_BackPayCOLA', 'NT_BigClassPay', 'NT_CLPPay', 'NT_ClassOrgAdvs', 'NT_CommOutrchPay', 'NT_CommImmersion', 'NT_Coordi', 'NT_CompreExam', 'NT_CriticWork', 'NT_DentPreBoard', 'NT_DentALE', 'NT_Differential', 'NT_EnhcmtSeminar', 'NT_EnrAdvising', 'NT_ExpertisePrm', 'NT_ExtProgPay', 'NT_Externship', 'NT_Goodwill', 'NT_GratuityNTax', 'NT_GratuityTax', 'NT_HardshipPay', 'NT_HonorariumNF', 'NT_HosptOrient', 'NT_IncluProg', 'NT_IncentiveLP', 'NT_IncrmtlProceeds', 'NT_InternshipPay', 'NT_MaternityBnft', 'NT_OneTimeIncentive', 'NT_Practicum', 'NT_Proctorship', 'NT_ReviewNTax', 'NT_ReviewTax', 'NT_RICE', 'NT_SalarySHS', 'NT_SpclExam', 'NT_Substitution', 'NT_Training', 'NT_TranspoAllow', 'NT_Tutorial', 'NT_OINTax', 'NT_OITax'], 'number'],
            [['PrdID', 'NT_RFDOthersRem', 'NT_OINTaxRem', 'NT_OITaxRem'], 'string', 'max' => 32],
            [['EmpID', 'PrdID'], 'unique', 'targetAttribute' => ['EmpID', 'PrdID']],
        ];
    }

    public function getEmployeeList()
    {
        return $this->hasOne(PayrollEmployeeList::className(), ['EmpID' => 'EmpID']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'EmpID' => 'Emp ID',
            'PrdID' => 'Prd ID',
            'NT_AdvIP'  =>  'Non-Teaching Advance IP',
            'NT_HazardPay'  =>  'Non-Teaching Hazard Pay',
            'NT_Honorarium' =>  'Non-Teaching Honorarium',
            'NT_HRMAllowNTax'   =>  'Non-Teaching HRM Allowance Non Taxable',
            'NT_HRMAllowTax'    =>  'Non-Teaching HRM Allowance Taxable',
            'NT_IPAllow'    =>  'Non-Teaching IP Allowance',
            'NT_RLEAllowNTax'   =>  'Non-Teaching RLE Allowance Non Taxable',
            'NT_RLEAllowTax'    =>  'Non-Teaching RLE Allowance Taxable',
            'NT_RFDAlumniTick'  =>  'Non-Teaching Refund Alumni Ticket',
            'NT_RFDCCLoan'  =>  'Non-Teaching Refund CC Loan',
            'NT_RFDCOOP'    =>  'Non-Teaching Refund COOP',
            'NT_RFDFAWU'    =>  'Non-Teaching Refund FAWU',
            'NT_RFDHDMFMPL' =>  'Non-Teaching Refund HDMF - MPL',
            'NT_RFDHDMFP'   =>  'Non-Teaching Refund HDMF Premium',
            'NT_RFDHDMFU'   =>  'Non-Teaching Refund HDMF U',
            'NT_RFDHF'  =>  'Non-Teaching Refund Handling Fee',
            'NT_RFDMedicare'    =>  'Non-Teaching Refund Medicare',
            'NT_RFDPHIC'    =>  'Non-Teaching Refund Philhealth',
            'NT_RFDSSSCondo'    =>  'Non-Teaching Refund SSS Condonation',
            'NT_RFDSSSL'    =>  'Non-Teaching Refund SSS Loan',
            'NT_RFDSSSP'    =>  'Non-Teaching Refund SSS Premium',
            'NT_RFDTax' =>  'Non-Teaching Refund Tax',
            'NT_RFDTaxAdv'  =>  'Non-Teaching Refund Tax Advances',
            'NT_RFDTF'  =>  'Non-Teaching Refund Tuition Fee',
            'NT_RFDOthers'  =>  'Non-Teaching Refund Others',
            'NT_RFDOthersRem'   =>  'Non-Teaching Refund Others - Remarks',
            'NT_BNMidYrNTax'    =>  'Non-Teaching Bonus Mid Year Non Taxable',
            'NT_BNMidYrTax' =>  'Non-Teaching Bonus Mid Year Taxable',
            'NT_BNSLVLNTax' =>  'Non-Teaching Bonus SLVL Non Taxable',
            'NT_BNSLVLTax'  =>  'Non-Teaching Bonus SLVL Taxable',
            'NT_BNTMPNTax'  =>  'Non-Teaching Bonus Thirteenth Month Pay Non Taxable',
            'NT_BNTMPTax'   =>  'Non-Teaching Bonus Thirteenth Month Pay Taxable',
            'NT_BNXmasNTax' =>  'Non-Teaching Bonus Christmas Non Taxable',
            'NT_BNXmasTax'  =>  'Non-Teaching Bonus Christmas Taxable',
            'NT_SHSBNTMPNTax'   =>  'Non-Teaching Senior Highschool Staff Bonus Thirteenth Month Pay Non Taxable',
            'NT_SHSBNTMPTax'    =>  'Non-Teaching Senior Highschool Staff Bonus Thirteenth Month Pay Taxable',
            'NT_SSBNMidYrTax'   =>  'Non-Teaching Senior Staff Bonus Mid Year Taxable',
            'NT_SSBNSLVLTax'    =>  'Non-Teaching Senior Staff Bonus SLVL Taxable',
            'NT_SSBNTMPTax' =>  'Non-Teaching Senior Staff Bonus Thirteenth Month Pay Taxable',
            'NT_SSBNXmasTax'    =>  'Non-Teaching Senior Staff Bonus Christmas Taxable',
            'NT_BonusNTax'  =>  'Non-Teaching Bonus Non Taxable',
            'NT_BonusTax'   =>  'Non-Teaching Bonus Taxable',
            'NT_AdjIPAllow' =>  'Non-Teaching Adjustment IP Allowance',
            'NT_AdviserFee' =>  'Non-Teaching Adviser Fee',
            'NT_BackPay'    =>  'Non-Teaching Back Pay',
            'NT_BackPayEFA' =>  'Non-Teaching Back Pay COLA',
            'NT_BackPayCOLA'    =>  'Non-Teaching Back Pay EFA',
            'NT_BigClassPay'    =>  'Non-Teaching Big Class Pay',
            'NT_CLPPay' =>  'Non-Teaching Clinical Laboratory Practice Pay',
            'NT_ClassOrgAdvs'   =>  'Non-Teaching Class Organization Advisers',
            'NT_CommOutrchPay'  =>  'Non-Teaching Community Outreach Pay',
            'NT_CommImmersion'  =>  'Non-Teaching Community Immersion',
            'NT_Coordi' =>  'Non-Teaching Coordination',
            'NT_CompreExam' =>  'Non-Teaching Compre Examiniation',
            'NT_CriticWork' =>  'Non-Teaching Critical Work',
            'NT_DentPreBoard'   =>  'Non-Teaching Dentistry ALE',
            'NT_DentALE'    =>  'Non-Teaching Dentistry Pre Board',
            'NT_Differential'   =>  'Non-Teaching Differential',
            'NT_EnhcmtSeminar'  =>  'Non-Teaching Enhancement Seminar',
            'NT_EnrAdvising'    =>  'Non-Teaching Enrollment Advising',
            'NT_ExpertisePrm'   =>  'Non-Teaching Expertise Premium',
            'NT_ExtProgPay' =>  'Non-Teaching External Program Pay',
            'NT_Externship' =>  'Non-Teaching Externship',
            'NT_Goodwill'   =>  'Non-Teaching Goodwill',
            'NT_GratuityNTax'   =>  'Non-Teaching Gratuity Non Taxable',
            'NT_GratuityTax'    =>  'Non-Teaching Gratuity Taxable',
            'NT_HardshipPay'    =>  'Non-Teaching Hardship Pay',
            'NT_HonorariumNF'   =>  'Non-Teaching Honorarium Non Fixed',
            'NT_HosptOrient'    =>  'Non-Teaching Hospital Orientation',
            'NT_IncluProg'  =>  'Non-Teaching Incentive LP',
            'NT_IncentiveLP'    =>  'Non-Teaching Inclusion Progra,',
            'NT_IncrmtlProceeds'    =>  'Non-Teaching Incremental Proceeds',
            'NT_InternshipPay'  =>  'Non-Teaching Internship Pay',
            'NT_MaternityBnft'  =>  'Non-Teaching Maternity Benefit',
            'NT_OneTimeIncentive'   =>  'Non-Teaching One time Incentive',
            'NT_Practicum'  =>  'Non-Teaching Practicum',
            'NT_Proctorship'    =>  'Non-Teaching Proctorship',
            'NT_ReviewNTax' =>  'Non-Teaching Review Non Taxable',
            'NT_ReviewTax'  =>  'Non-Teaching Review Taxable',
            'NT_RICE'   =>  'Non-Teaching RICE',
            'NT_SalarySHS'  =>  'Non-Teaching Salary Senior High School',
            'NT_SpclExam'   =>  'Non-Teaching Special Exam',
            'NT_Substitution'   =>  'Non-Teaching Substitution',
            'NT_Training'   =>  'Non-Teaching Training',
            'NT_TranspoAllow'   =>  'Non-Teaching Transportation Allowance',
            'NT_Tutorial'   =>  'Non-Teaching Tutorial',
            'NT_OINTax' =>  'Non-Teaching Other Income Non Taxable',
            'NT_OINTaxRem'  =>  'Non-Teaching Other Income Non Taxable Remarks',
            'NT_OITax'  =>  'Non-Teaching Other Income Taxable',
            'NT_OITaxRem'   =>  'Non-Teaching Other Income Taxable Remarks',

        ];
    }

    public function getPayPeriod()
    {
        return $this->hasOne(PayrollPayPeriodList::className(), ['PrdID' => 'PrdID']);
    }
}
