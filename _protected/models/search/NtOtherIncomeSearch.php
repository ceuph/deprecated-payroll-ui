<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NtOtherIncome;

/**
 * NtOtherIncomeSearch represents the model behind the search form of `app\models\NtOtherIncome`.
 */
class NtOtherIncomeSearch extends NtOtherIncome
{
    /**
     * {@inheritdoc}
     */
    public $fname;
    public $lname;
    public $schoolCollege;
    public $campus;
    public $department;
    public function rules()
    {
        return [
            [['EmpID', 'PrdID', 'NT_RFDOthersRem', 'NT_OINTaxRem', 'NT_OITaxRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['NT_AdvIP', 'NT_HazardPay', 'NT_Honorarium', 'NT_HRMAllowNTax', 'NT_HRMAllowTax', 'NT_IPAllow', 'NT_RLEAllowNTax', 'NT_RLEAllowTax', 'NT_RFDAlumniTick', 'NT_RFDCCLoan', 'NT_RFDCOOP', 'NT_RFDFAWU', 'NT_RFDHDMFMPL', 'NT_RFDHDMFP', 'NT_RFDHDMFU', 'NT_RFDHF', 'NT_RFDMedicare', 'NT_RFDPHIC', 'NT_RFDSSSCondo', 'NT_RFDSSSL', 'NT_RFDSSSP', 'NT_RFDTax', 'NT_RFDTaxAdv', 'NT_RFDTF', 'NT_RFDOthers', 'NT_BNMidYrNTax', 'NT_BNMidYrTax', 'NT_BNSLVLNTax', 'NT_BNSLVLTax', 'NT_BNTMPNTax', 'NT_BNTMPTax', 'NT_BNXmasNTax', 'NT_BNXmasTax', 'NT_SHSBNTMPNTax', 'NT_SHSBNTMPTax', 'NT_SSBNMidYrTax', 'NT_SSBNSLVLTax', 'NT_SSBNTMPTax', 'NT_SSBNXmasTax', 'NT_BonusNTax', 'NT_BonusTax', 'NT_AdjIPAllow', 'NT_AdviserFee', 'NT_BackPay', 'NT_BackPayEFA', 'NT_BackPayCOLA', 'NT_BigClassPay', 'NT_CLPPay', 'NT_ClassOrgAdvs', 'NT_CommOutrchPay', 'NT_CommImmersion', 'NT_Coordi', 'NT_CompreExam', 'NT_CriticWork', 'NT_DentPreBoard', 'NT_DentALE', 'NT_Differential', 'NT_EnhcmtSeminar', 'NT_EnrAdvising', 'NT_ExpertisePrm', 'NT_ExtProgPay', 'NT_Externship', 'NT_Goodwill', 'NT_GratuityNTax', 'NT_GratuityTax', 'NT_HardshipPay', 'NT_HonorariumNF', 'NT_HosptOrient', 'NT_IncluProg', 'NT_IncentiveLP', 'NT_IncrmtlProceeds', 'NT_InternshipPay', 'NT_MaternityBnft', 'NT_OneTimeIncentive', 'NT_Practicum', 'NT_Proctorship', 'NT_ReviewNTax', 'NT_ReviewTax', 'NT_RICE', 'NT_SalarySHS', 'NT_SpclExam', 'NT_Substitution', 'NT_Training', 'NT_TranspoAllow', 'NT_Tutorial', 'NT_OINTax', 'NT_OITax'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = NtOtherIncome::find()->joinWith(['employeeList']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'NT_AdvIP' => $this->NT_AdvIP,
            'NT_HazardPay' => $this->NT_HazardPay,
            'NT_Honorarium' => $this->NT_Honorarium,
            'NT_HRMAllowNTax' => $this->NT_HRMAllowNTax,
            'NT_HRMAllowTax' => $this->NT_HRMAllowTax,
            'NT_IPAllow' => $this->NT_IPAllow,
            'NT_RLEAllowNTax' => $this->NT_RLEAllowNTax,
            'NT_RLEAllowTax' => $this->NT_RLEAllowTax,
            'NT_RFDAlumniTick' => $this->NT_RFDAlumniTick,
            'NT_RFDCCLoan' => $this->NT_RFDCCLoan,
            'NT_RFDCOOP' => $this->NT_RFDCOOP,
            'NT_RFDFAWU' => $this->NT_RFDFAWU,
            'NT_RFDHDMFMPL' => $this->NT_RFDHDMFMPL,
            'NT_RFDHDMFP' => $this->NT_RFDHDMFP,
            'NT_RFDHDMFU' => $this->NT_RFDHDMFU,
            'NT_RFDHF' => $this->NT_RFDHF,
            'NT_RFDMedicare' => $this->NT_RFDMedicare,
            'NT_RFDPHIC' => $this->NT_RFDPHIC,
            'NT_RFDSSSCondo' => $this->NT_RFDSSSCondo,
            'NT_RFDSSSL' => $this->NT_RFDSSSL,
            'NT_RFDSSSP' => $this->NT_RFDSSSP,
            'NT_RFDTax' => $this->NT_RFDTax,
            'NT_RFDTaxAdv' => $this->NT_RFDTaxAdv,
            'NT_RFDTF' => $this->NT_RFDTF,
            'NT_RFDOthers' => $this->NT_RFDOthers,
            'NT_BNMidYrNTax' => $this->NT_BNMidYrNTax,
            'NT_BNMidYrTax' => $this->NT_BNMidYrTax,
            'NT_BNSLVLNTax' => $this->NT_BNSLVLNTax,
            'NT_BNSLVLTax' => $this->NT_BNSLVLTax,
            'NT_BNTMPNTax' => $this->NT_BNTMPNTax,
            'NT_BNTMPTax' => $this->NT_BNTMPTax,
            'NT_BNXmasNTax' => $this->NT_BNXmasNTax,
            'NT_BNXmasTax' => $this->NT_BNXmasTax,
            'NT_SHSBNTMPNTax' => $this->NT_SHSBNTMPNTax,
            'NT_SHSBNTMPTax' => $this->NT_SHSBNTMPTax,
            'NT_SSBNMidYrTax' => $this->NT_SSBNMidYrTax,
            'NT_SSBNSLVLTax' => $this->NT_SSBNSLVLTax,
            'NT_SSBNTMPTax' => $this->NT_SSBNTMPTax,
            'NT_SSBNXmasTax' => $this->NT_SSBNXmasTax,
            'NT_BonusNTax' => $this->NT_BonusNTax,
            'NT_BonusTax' => $this->NT_BonusTax,
            'NT_AdjIPAllow' => $this->NT_AdjIPAllow,
            'NT_AdviserFee' => $this->NT_AdviserFee,
            'NT_BackPay' => $this->NT_BackPay,
            'NT_BackPayEFA' => $this->NT_BackPayEFA,
            'NT_BackPayCOLA' => $this->NT_BackPayCOLA,
            'NT_BigClassPay' => $this->NT_BigClassPay,
            'NT_CLPPay' => $this->NT_CLPPay,
            'NT_ClassOrgAdvs' => $this->NT_ClassOrgAdvs,
            'NT_CommOutrchPay' => $this->NT_CommOutrchPay,
            'NT_CommImmersion' => $this->NT_CommImmersion,
            'NT_Coordi' => $this->NT_Coordi,
            'NT_CompreExam' => $this->NT_CompreExam,
            'NT_CriticWork' => $this->NT_CriticWork,
            'NT_DentPreBoard' => $this->NT_DentPreBoard,
            'NT_DentALE' => $this->NT_DentALE,
            'NT_Differential' => $this->NT_Differential,
            'NT_EnhcmtSeminar' => $this->NT_EnhcmtSeminar,
            'NT_EnrAdvising' => $this->NT_EnrAdvising,
            'NT_ExpertisePrm' => $this->NT_ExpertisePrm,
            'NT_ExtProgPay' => $this->NT_ExtProgPay,
            'NT_Externship' => $this->NT_Externship,
            'NT_Goodwill' => $this->NT_Goodwill,
            'NT_GratuityNTax' => $this->NT_GratuityNTax,
            'NT_GratuityTax' => $this->NT_GratuityTax,
            'NT_HardshipPay' => $this->NT_HardshipPay,
            'NT_HonorariumNF' => $this->NT_HonorariumNF,
            'NT_HosptOrient' => $this->NT_HosptOrient,
            'NT_IncluProg' => $this->NT_IncluProg,
            'NT_IncentiveLP' => $this->NT_IncentiveLP,
            'NT_IncrmtlProceeds' => $this->NT_IncrmtlProceeds,
            'NT_InternshipPay' => $this->NT_InternshipPay,
            'NT_MaternityBnft' => $this->NT_MaternityBnft,
            'NT_OneTimeIncentive' => $this->NT_OneTimeIncentive,
            'NT_Practicum' => $this->NT_Practicum,
            'NT_Proctorship' => $this->NT_Proctorship,
            'NT_ReviewNTax' => $this->NT_ReviewNTax,
            'NT_ReviewTax' => $this->NT_ReviewTax,
            'NT_RICE' => $this->NT_RICE,
            'NT_SalarySHS' => $this->NT_SalarySHS,
            'NT_SpclExam' => $this->NT_SpclExam,
            'NT_Substitution' => $this->NT_Substitution,
            'NT_Training' => $this->NT_Training,
            'NT_TranspoAllow' => $this->NT_TranspoAllow,
            'NT_Tutorial' => $this->NT_Tutorial,
            'NT_OINTax' => $this->NT_OINTax,
            'NT_OITax' => $this->NT_OITax,
        ]);

        $query->andFilterWhere(['like', 'SH07_NTOTHERINCOME.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH07_NTOTHERINCOME.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'NT_RFDOthersRem', $this->NT_RFDOthersRem])
            ->andFilterWhere(['like', 'NT_OINTaxRem', $this->NT_OINTaxRem])
            ->andFilterWhere(['like', 'NT_OITaxRem', $this->NT_OITaxRem])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
