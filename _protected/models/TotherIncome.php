<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH07_TCOTHERINCOME".
 *
 * @property string $EmpID
 * @property string $PrdID
 * @property string $TC_AdvIP
 * @property string $TC_HazardPay
 * @property string $TC_Honorarium
 * @property string $TC_HRMAllowNTax
 * @property string $TC_HRMAllowTax
 * @property string $TC_IPAllow
 * @property string $TC_RLEAllowNTax
 * @property string $TC_RLEAllowTax
 * @property string $TC_RFDAlumniTick
 * @property string $TC_RFDCCLoan
 * @property string $TC_RFDCOOP
 * @property string $TC_RFDFAWU
 * @property string $TC_RFDHDMFMPL
 * @property string $TC_RFDHDMFP
 * @property string $TC_RFDHDMFU
 * @property string $TC_RFDHF
 * @property string $TC_RFDMedicare
 * @property string $TC_RFDPHIC
 * @property string $TC_RFDSSSCondo
 * @property string $TC_RFDSSSL
 * @property string $TC_RFDSSSP
 * @property string $TC_RFDTax
 * @property string $TC_RFDTaxAdv
 * @property string $TC_RFDTF
 * @property string $TC_RFDOthers
 * @property string $TC_RFDOthersRem
 * @property string $TC_BNMidYrNTax
 * @property string $TC_BNMidYrTax
 * @property string $TC_BNSLVLNTax
 * @property string $TC_BNSLVLTax
 * @property string $TC_BNTMPNTax
 * @property string $TC_BNTMPTax
 * @property string $TC_BNXmasNTax
 * @property string $TC_BNXmasTax
 * @property string $TC_SHSBNTMPNTax
 * @property string $TC_SHSBNTMPTax
 * @property string $TC_SSBNMidYrTax
 * @property string $TC_SSBNSLVLTax
 * @property string $TC_SSBNTMPTax
 * @property string $TC_SSBNXmasTax
 * @property string $TC_BonusNTax
 * @property string $TC_BonusTax
 * @property string $TC_AdjIPAllow
 * @property string $TC_AdviserFee
 * @property string $TC_BackPay
 * @property string $TC_BackPayEFA
 * @property string $TC_BackPayCOLA
 * @property string $TC_BigClassPay
 * @property string $TC_CLPPay
 * @property string $TC_ClassOrgAdvs
 * @property string $TC_CommOutrchPay
 * @property string $TC_CommImmersion
 * @property string $TC_Coordi
 * @property string $TC_CompreExam
 * @property string $TC_CriticWork
 * @property string $TC_DentPreBoard
 * @property string $TC_DentALE
 * @property string $TC_Differential
 * @property string $TC_EnhcmtSeminar
 * @property string $TC_EnrAdvising
 * @property string $TC_ExpertisePrm
 * @property string $TC_ExtProgPay
 * @property string $TC_Externship
 * @property string $TC_Goodwill
 * @property string $TC_GratuityNTax
 * @property string $TC_GratuityTax
 * @property string $TC_HardshipPay
 * @property string $TC_HolidayPay
 * @property string $TC_HonorariumNF
 * @property string $TC_HosptOrient
 * @property string $TC_IncluProg
 * @property string $TC_IncentiveLP
 * @property string $TC_IncrmtlProceeds
 * @property string $TC_InternshipPay
 * @property string $TC_MaternityBnft
 * @property string $TC_OneTimeIncentive
 * @property string $TC_Practicum
 * @property string $TC_Proctorship
 * @property string $TC_ReviewNTax
 * @property string $TC_ReviewTax
 * @property string $TC_RICE
 * @property string $TC_SalarySHS
 * @property string $TC_SpclExam
 * @property string $TC_Substitution
 * @property string $TC_Training
 * @property string $TC_TranspoAllow
 * @property string $TC_Tutorial
 * @property string $TC_OINTax
 * @property string $TC_OINTaxRem
 * @property string $TC_OITax
 * @property string $TC_OITaxRem
 */
class TotherIncome extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH07_TCOTHERINCOME';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'PrdID'], 'required'],
            [['TC_AdvIP', 'TC_HazardPay', 'TC_Honorarium', 'TC_HRMAllowNTax', 'TC_HRMAllowTax', 'TC_IPAllow', 'TC_RLEAllowNTax', 'TC_RLEAllowTax', 'TC_RFDAlumniTick', 'TC_RFDCCLoan', 'TC_RFDCOOP', 'TC_RFDFAWU', 'TC_RFDHDMFMPL', 'TC_RFDHDMFP', 'TC_RFDHDMFU', 'TC_RFDHF', 'TC_RFDMedicare', 'TC_RFDPHIC', 'TC_RFDSSSCondo', 'TC_RFDSSSL', 'TC_RFDSSSP', 'TC_RFDTax', 'TC_RFDTaxAdv', 'TC_RFDTF', 'TC_RFDOthers', 'TC_BNMidYrNTax', 'TC_BNMidYrTax', 'TC_BNSLVLNTax', 'TC_BNSLVLTax', 'TC_BNTMPNTax', 'TC_BNTMPTax', 'TC_BNXmasNTax', 'TC_BNXmasTax', 'TC_SHSBNTMPNTax', 'TC_SHSBNTMPTax', 'TC_SSBNMidYrTax', 'TC_SSBNSLVLTax', 'TC_SSBNTMPTax', 'TC_SSBNXmasTax', 'TC_BonusNTax', 'TC_BonusTax', 'TC_AdjIPAllow', 'TC_AdviserFee', 'TC_BackPay', 'TC_BackPayEFA', 'TC_BackPayCOLA', 'TC_BigClassPay', 'TC_CLPPay', 'TC_ClassOrgAdvs', 'TC_CommOutrchPay', 'TC_CommImmersion', 'TC_Coordi', 'TC_CompreExam', 'TC_CriticWork', 'TC_DentPreBoard', 'TC_DentALE', 'TC_Differential', 'TC_EnhcmtSeminar', 'TC_EnrAdvising', 'TC_ExpertisePrm', 'TC_ExtProgPay', 'TC_Externship', 'TC_Goodwill', 'TC_GratuityNTax', 'TC_GratuityTax', 'TC_HardshipPay', 'TC_HolidayPay', 'TC_HonorariumNF', 'TC_HosptOrient', 'TC_IncluProg', 'TC_IncentiveLP', 'TC_IncrmtlProceeds', 'TC_InternshipPay', 'TC_MaternityBnft', 'TC_OneTimeIncentive', 'TC_Practicum', 'TC_Proctorship', 'TC_ReviewNTax', 'TC_ReviewTax', 'TC_RICE', 'TC_SalarySHS', 'TC_SpclExam', 'TC_Substitution', 'TC_Training', 'TC_TranspoAllow', 'TC_Tutorial', 'TC_OINTax', 'TC_OITax'], 'number'],
            [['PrdID', 'TC_RFDOthersRem', 'TC_OINTaxRem', 'TC_OITaxRem'], 'string', 'max' => 32],
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
            'TC_AdvIP'  =>  'Teaching Advance IP',
            'TC_HazardPay'  =>  'Teaching Hazard Pay',
            'TC_Honorarium' =>  'Teaching Honorarium',
            'TC_HRMAllowNTax'   =>  'Teaching HRM Allowance Non Taxable',
            'TC_HRMAllowTax'    =>  'Teaching HRM Allowance Taxable',
            'TC_IPAllow'    =>  'Teaching IP Allowance',
            'TC_RLEAllowNTax'   =>  'Teaching RLE Allowance Non Taxable',
            'TC_RLEAllowTax'    =>  'Teaching RLE Allowance Taxable',
            'TC_RFDAlumniTick'  =>  'Teaching Refund Alumni Ticket',
            'TC_RFDCCLoan'  =>  'Teaching Refund CC Loan',
            'TC_RFDCOOP'    =>  'Teaching Refund COOP',
            'TC_RFDFAWU'    =>  'Teaching Refund FAWU',
            'TC_RFDHDMFMPL' =>  'Teaching Refund HDMF - MPL',
            'TC_RFDHDMFP'   =>  'Teaching Refund HDMF Premium',
            'TC_RFDHDMFU'   =>  'Teaching Refund HDMF U',
            'TC_RFDHF'  =>  'Teaching Refund Handling Fee',
            'TC_RFDMedicare'    =>  'Teaching Refund Medicare',
            'TC_RFDPHIC'    =>  'Teaching Refund Philhealth',
            'TC_RFDSSSCondo'    =>  'Teaching Refund SSS Condonation',
            'TC_RFDSSSL'    =>  'Teaching Refund SSS Loan',
            'TC_RFDSSSP'    =>  'Teaching Refund SSS Premium',
            'TC_RFDTax' =>  'Teaching Refund Tax',
            'TC_RFDTaxAdv'  =>  'Teaching Refund Tax Advances',
            'TC_RFDTF'  =>  'Teaching Refund Tuition Fee',
            'TC_RFDOthers'  =>  'Teaching Refund Others',
            'TC_RFDOthersRem'   =>  'Teaching Refund Others - Remarks',
            'TC_BNMidYrNTax'    =>  'Teaching Bonus Mid Year Non Taxable',
            'TC_BNMidYrTax' =>  'Teaching Bonus Mid Year Taxable',
            'TC_BNSLVLNTax' =>  'Teaching Bonus SLVL Non Taxable',
            'TC_BNSLVLTax'  =>  'Teaching Bonus SLVL Taxable',
            'TC_BNTMPNTax'  =>  'Teaching Bonus Thirteenth Month Pay Non Taxable',
            'TC_BNTMPTax'   =>  'Teaching Bonus Thirteenth Month Pay Taxable',
            'TC_BNXmasNTax' =>  'Teaching Bonus Christmas Non Taxable',
            'TC_BNXmasTax'  =>  'Teaching Bonus Christmas Taxable',
            'TC_SHSBNTMPNTax'   =>  'Teaching Senior Highschool Staff Bonus Thirteenth Month Pay Non Taxable',
            'TC_SHSBNTMPTax'    =>  'Teaching Senior Highschool Staff Bonus Thirteenth Month Pay Taxable',
            'TC_SSBNMidYrTax'   =>  'Teaching Senior Staff Bonus Mid Year Taxable',
            'TC_SSBNSLVLTax'    =>  'Teaching Senior Staff Bonus SLVL Taxable',
            'TC_SSBNTMPTax' =>  'Teaching Senior Staff Bonus Thirteenth Month Pay Taxable',
            'TC_SSBNXmasTax'    =>  'Teaching Senior Staff Bonus Christmas Taxable',
            'TC_BonusNTax'  =>  'Teaching Bonus Non Taxable',
            'TC_BonusTax'   =>  'Teaching Bonus Taxable',
            'TC_AdjIPAllow' =>  'Teaching Adjustment IP Allowance',
            'TC_AdviserFee' =>  'Teaching Adviser Fee',
            'TC_BackPay'    =>  'Teaching Back Pay',
            'TC_BackPayEFA' =>  'Teaching Back Pay COLA',
            'TC_BackPayCOLA'    =>  'Teaching Back Pay EFA',
            'TC_BigClassPay'    =>  'Teaching Big Class Pay',
            'TC_CLPPay' =>  'Teaching Clinical Laboratory Practice Pay',
            'TC_ClassOrgAdvs'   =>  'Teaching Class Organization Advisers',
            'TC_CommOutrchPay'  =>  'Teaching Community Outreach Pay',
            'TC_CommImmersion'  =>  'Teaching Community Immersion',
            'TC_Coordi' =>  'Teaching Coordination',
            'TC_CompreExam' =>  'Teaching Compre Examiniation',
            'TC_CriticWork' =>  'Teaching Critical Work',
            'TC_DentPreBoard'   =>  'Teaching Dentistry ALE',
            'TC_DentALE'    =>  'Teaching Dentistry Pre Board',
            'TC_Differential'   =>  'Teaching Differential',
            'TC_EnhcmtSeminar'  =>  'Teaching Enhancement Seminar',
            'TC_EnrAdvising'    =>  'Teaching Enrollment Advising',
            'TC_ExpertisePrm'   =>  'Teaching Expertise Premium',
            'TC_ExtProgPay' =>  'Teaching External Program Pay',
            'TC_Externship' =>  'Teaching Externship',
            'TC_Goodwill'   =>  'Teaching Goodwill',
            'TC_GratuityNTax'   =>  'Teaching Gratuity Non Taxable',
            'TC_GratuityTax'    =>  'Teaching Gratuity Taxable',
            'TC_HardshipPay'    =>  'Teaching Hardship Pay',
            'TC_HolidayPay' =>  'Teaching Holiday Pay',
            'TC_HonorariumNF'   =>  'Teaching Honorarium Non Fixed',
            'TC_HosptOrient'    =>  'Teaching Hospital Orientation',
            'TC_IncluProg'  =>  'Teaching Inclusion Program',
            'TC_IncentiveLP'    =>  'Teaching Incentive LP',
            'TC_IncrmtlProceeds'    =>  'Teaching Incremental Proceeds',
            'TC_InternshipPay'  =>  'Teaching Internship Pay',
            'TC_MaternityBnft'  =>  'Teaching Maternity Benefit',
            'TC_OneTimeIncentive'   =>  'Teaching One time Incentive',
            'TC_Practicum'  =>  'Teaching Practicum',
            'TC_Proctorship'    =>  'Teaching Proctorship',
            'TC_ReviewNTax' =>  'Teaching Review Non Taxable',
            'TC_ReviewTax'  =>  'Teaching Review Taxable',
            'TC_RICE'   =>  'Teaching RICE',
            'TC_SalarySHS'  =>  'Teaching Salary Senior High School',
            'TC_SpclExam'   =>  'Teaching Special Exam',
            'TC_Substitution'   =>  'Teaching Substitution',
            'TC_Training'   =>  'Teaching Training',
            'TC_TranspoAllow'   =>  'Teaching Transportation Allowance',
            'TC_Tutorial'   =>  'Teaching Tutorial',
            'TC_OINTax' =>  'Teaching Other Income Non Taxable',
            'TC_OINTaxRem'  =>  'Teaching Other Income Non Taxable Remarks',
            'TC_OITax'  =>  'Teaching Other Income Taxable',
            'TC_OITaxRem'   =>  'Teaching Other Income Taxable Remarks',

        ];
    }
}
