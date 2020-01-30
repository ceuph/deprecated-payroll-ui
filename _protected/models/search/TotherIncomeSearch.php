<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TotherIncome;

/**
 * TotherIncomeSearch represents the model behind the search form of `app\models\TotherIncome`.
 */
class TotherIncomeSearch extends TotherIncome
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
            [['EmpID', 'PrdID', 'TC_RFDOthersRem', 'TC_OINTaxRem', 'TC_OITaxRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['TC_AdvIP', 'TC_HazardPay', 'TC_Honorarium', 'TC_HRMAllowNTax', 'TC_HRMAllowTax', 'TC_IPAllow', 'TC_RLEAllowNTax', 'TC_RLEAllowTax', 'TC_RFDAlumniTick', 'TC_RFDCCLoan', 'TC_RFDCOOP', 'TC_RFDFAWU', 'TC_RFDHDMFMPL', 'TC_RFDHDMFP', 'TC_RFDHDMFU', 'TC_RFDHF', 'TC_RFDMedicare', 'TC_RFDPHIC', 'TC_RFDSSSCondo', 'TC_RFDSSSL', 'TC_RFDSSSP', 'TC_RFDTax', 'TC_RFDTaxAdv', 'TC_RFDTF', 'TC_RFDOthers', 'TC_BNMidYrNTax', 'TC_BNMidYrTax', 'TC_BNSLVLNTax', 'TC_BNSLVLTax', 'TC_BNTMPNTax', 'TC_BNTMPTax', 'TC_BNXmasNTax', 'TC_BNXmasTax', 'TC_SHSBNTMPNTax', 'TC_SHSBNTMPTax', 'TC_SSBNMidYrTax', 'TC_SSBNSLVLTax', 'TC_SSBNTMPTax', 'TC_SSBNXmasTax', 'TC_BonusNTax', 'TC_BonusTax', 'TC_AdjIPAllow', 'TC_AdviserFee', 'TC_BackPay', 'TC_BackPayEFA', 'TC_BackPayCOLA', 'TC_BigClassPay', 'TC_CLPPay', 'TC_ClassOrgAdvs', 'TC_CommOutrchPay', 'TC_CommImmersion', 'TC_Coordi', 'TC_CompreExam', 'TC_CriticWork', 'TC_DentPreBoard', 'TC_DentALE', 'TC_Differential', 'TC_EnhcmtSeminar', 'TC_EnrAdvising', 'TC_ExpertisePrm', 'TC_ExtProgPay', 'TC_Externship', 'TC_Goodwill', 'TC_GratuityNTax', 'TC_GratuityTax', 'TC_HardshipPay', 'TC_HolidayPay', 'TC_HonorariumNF', 'TC_HosptOrient', 'TC_IncluProg', 'TC_IncentiveLP', 'TC_IncrmtlProceeds', 'TC_InternshipPay', 'TC_MaternityBnft', 'TC_OneTimeIncentive', 'TC_Practicum', 'TC_Proctorship', 'TC_ReviewNTax', 'TC_ReviewTax', 'TC_RICE', 'TC_SalarySHS', 'TC_SpclExam', 'TC_Substitution', 'TC_Training', 'TC_TranspoAllow', 'TC_Tutorial', 'TC_OINTax', 'TC_OITax'], 'number'],
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
        $query = TotherIncome::find()->joinWith(['employeeList']);

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

        $dataProvider->setSort([
        'attributes' => [
            'PrdID' => [
                'asc' => ['PrdID' => SORT_ASC],
                'desc' => ['PrdID' => SORT_DESC],
                'default' => SORT_DESC,
            ],
            'EmpID' => [
                'asc' => ['EmpID' => SORT_ASC],
                'desc' => ['EmpID' => SORT_DESC],
                'default' => SORT_ASC
            ],
            'lname' => [
                'asc' => ['lname' => SORT_ASC],
                'desc' => ['lname' => SORT_DESC],
                'default' => SORT_ASC
            ],
            'fname' => [
                'asc' => ['fname' => SORT_ASC],
                'desc' => ['fname' => SORT_DESC],
                'default' => SORT_ASC,
            ],
            'campus' => [
                'asc' => ['campus' => SORT_ASC],
                'desc' => ['campus' => SORT_DESC],
                'default' => SORT_ASC,
            ],
            'schoolCollege' => [
                'asc' => ['schoolCollege' => SORT_ASC],
                'desc' => ['schoolCollege' => SORT_DESC],
                'default' => SORT_ASC,
            ],
            'department' => [
                'asc' => ['department' => SORT_ASC],
                'desc' => ['department' => SORT_DESC],
                'default' => SORT_ASC,
            ],
    
        ],

    ]);

        // grid filtering conditions
        $query->andFilterWhere([
            'TC_AdvIP' => $this->TC_AdvIP,
            'TC_HazardPay' => $this->TC_HazardPay,
            'TC_Honorarium' => $this->TC_Honorarium,
            'TC_HRMAllowNTax' => $this->TC_HRMAllowNTax,
            'TC_HRMAllowTax' => $this->TC_HRMAllowTax,
            'TC_IPAllow' => $this->TC_IPAllow,
            'TC_RLEAllowNTax' => $this->TC_RLEAllowNTax,
            'TC_RLEAllowTax' => $this->TC_RLEAllowTax,
            'TC_RFDAlumniTick' => $this->TC_RFDAlumniTick,
            'TC_RFDCCLoan' => $this->TC_RFDCCLoan,
            'TC_RFDCOOP' => $this->TC_RFDCOOP,
            'TC_RFDFAWU' => $this->TC_RFDFAWU,
            'TC_RFDHDMFMPL' => $this->TC_RFDHDMFMPL,
            'TC_RFDHDMFP' => $this->TC_RFDHDMFP,
            'TC_RFDHDMFU' => $this->TC_RFDHDMFU,
            'TC_RFDHF' => $this->TC_RFDHF,
            'TC_RFDMedicare' => $this->TC_RFDMedicare,
            'TC_RFDPHIC' => $this->TC_RFDPHIC,
            'TC_RFDSSSCondo' => $this->TC_RFDSSSCondo,
            'TC_RFDSSSL' => $this->TC_RFDSSSL,
            'TC_RFDSSSP' => $this->TC_RFDSSSP,
            'TC_RFDTax' => $this->TC_RFDTax,
            'TC_RFDTaxAdv' => $this->TC_RFDTaxAdv,
            'TC_RFDTF' => $this->TC_RFDTF,
            'TC_RFDOthers' => $this->TC_RFDOthers,
            'TC_BNMidYrNTax' => $this->TC_BNMidYrNTax,
            'TC_BNMidYrTax' => $this->TC_BNMidYrTax,
            'TC_BNSLVLNTax' => $this->TC_BNSLVLNTax,
            'TC_BNSLVLTax' => $this->TC_BNSLVLTax,
            'TC_BNTMPNTax' => $this->TC_BNTMPNTax,
            'TC_BNTMPTax' => $this->TC_BNTMPTax,
            'TC_BNXmasNTax' => $this->TC_BNXmasNTax,
            'TC_BNXmasTax' => $this->TC_BNXmasTax,
            'TC_SHSBNTMPNTax' => $this->TC_SHSBNTMPNTax,
            'TC_SHSBNTMPTax' => $this->TC_SHSBNTMPTax,
            'TC_SSBNMidYrTax' => $this->TC_SSBNMidYrTax,
            'TC_SSBNSLVLTax' => $this->TC_SSBNSLVLTax,
            'TC_SSBNTMPTax' => $this->TC_SSBNTMPTax,
            'TC_SSBNXmasTax' => $this->TC_SSBNXmasTax,
            'TC_BonusNTax' => $this->TC_BonusNTax,
            'TC_BonusTax' => $this->TC_BonusTax,
            'TC_AdjIPAllow' => $this->TC_AdjIPAllow,
            'TC_AdviserFee' => $this->TC_AdviserFee,
            'TC_BackPay' => $this->TC_BackPay,
            'TC_BackPayEFA' => $this->TC_BackPayEFA,
            'TC_BackPayCOLA' => $this->TC_BackPayCOLA,
            'TC_BigClassPay' => $this->TC_BigClassPay,
            'TC_CLPPay' => $this->TC_CLPPay,
            'TC_ClassOrgAdvs' => $this->TC_ClassOrgAdvs,
            'TC_CommOutrchPay' => $this->TC_CommOutrchPay,
            'TC_CommImmersion' => $this->TC_CommImmersion,
            'TC_Coordi' => $this->TC_Coordi,
            'TC_CompreExam' => $this->TC_CompreExam,
            'TC_CriticWork' => $this->TC_CriticWork,
            'TC_DentPreBoard' => $this->TC_DentPreBoard,
            'TC_DentALE' => $this->TC_DentALE,
            'TC_Differential' => $this->TC_Differential,
            'TC_EnhcmtSeminar' => $this->TC_EnhcmtSeminar,
            'TC_EnrAdvising' => $this->TC_EnrAdvising,
            'TC_ExpertisePrm' => $this->TC_ExpertisePrm,
            'TC_ExtProgPay' => $this->TC_ExtProgPay,
            'TC_Externship' => $this->TC_Externship,
            'TC_Goodwill' => $this->TC_Goodwill,
            'TC_GratuityNTax' => $this->TC_GratuityNTax,
            'TC_GratuityTax' => $this->TC_GratuityTax,
            'TC_HardshipPay' => $this->TC_HardshipPay,
            'TC_HolidayPay' => $this->TC_HolidayPay,
            'TC_HonorariumNF' => $this->TC_HonorariumNF,
            'TC_HosptOrient' => $this->TC_HosptOrient,
            'TC_IncluProg' => $this->TC_IncluProg,
            'TC_IncentiveLP' => $this->TC_IncentiveLP,
            'TC_IncrmtlProceeds' => $this->TC_IncrmtlProceeds,
            'TC_InternshipPay' => $this->TC_InternshipPay,
            'TC_MaternityBnft' => $this->TC_MaternityBnft,
            'TC_OneTimeIncentive' => $this->TC_OneTimeIncentive,
            'TC_Practicum' => $this->TC_Practicum,
            'TC_Proctorship' => $this->TC_Proctorship,
            'TC_ReviewNTax' => $this->TC_ReviewNTax,
            'TC_ReviewTax' => $this->TC_ReviewTax,
            'TC_RICE' => $this->TC_RICE,
            'TC_SalarySHS' => $this->TC_SalarySHS,
            'TC_SpclExam' => $this->TC_SpclExam,
            'TC_Substitution' => $this->TC_Substitution,
            'TC_Training' => $this->TC_Training,
            'TC_TranspoAllow' => $this->TC_TranspoAllow,
            'TC_Tutorial' => $this->TC_Tutorial,
            'TC_OINTax' => $this->TC_OINTax,
            'TC_OITax' => $this->TC_OITax,
        ]);

        $query->andFilterWhere(['like', 'SH07_TCOTHERINCOME.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH07_TCOTHERINCOME.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'TC_RFDOthersRem', $this->TC_RFDOthersRem])
            ->andFilterWhere(['like', 'TC_OINTaxRem', $this->TC_OINTaxRem])
            ->andFilterWhere(['like', 'TC_OITaxRem', $this->TC_OITaxRem])
             ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
