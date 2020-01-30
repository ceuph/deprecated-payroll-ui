<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NtLeaveCredits;

/**
 * NtLeaveCreditsSearch represents the model behind the search form of `app\models\NtLeaveCredits`.
 */
class NtLeaveCreditsSearch extends NtLeaveCredits
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
            [['EmpID', 'PrdID', 'LC_NT_VLRem', 'LC_NT_SLRem', 'LC_NT_BLRem', 'LC_NT_ELRem', 'LC_NT_SPLRem', 'LC_NT_PLRem', 'LC_NT_MLRem', 'LC_NT_ULRem', 'LC_NT_SLWRem', 'LC_NT_NLRem', 'NT_OBRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['LC_NT_VLAdj', 'LC_NT_VLDAWP', 'LC_NT_VL', 'LC_NT_SLAdj', 'LC_NT_SLDAWP', 'LC_NT_SL', 'LC_NT_BLAdj', 'LC_NT_BLDAWP', 'LC_NT_BL', 'LC_NT_ELAdj', 'LC_NT_ELDAWP', 'LC_NT_EL', 'LC_NT_SPLAdj', 'LC_NT_SPLDAWP', 'LC_NT_SPL', 'LC_NT_PLAdj', 'LC_NT_PLDAWP', 'LC_NT_PL', 'LC_NT_MLAdj', 'LC_NT_MLDAWP', 'LC_NT_ML', 'LC_NT_ULAdj', 'LC_NT_ULDAWP', 'LC_NT_UL', 'LC_NT_SLWAdj', 'LC_NT_SLWDAWP', 'LC_NT_SLW', 'LC_NT_NLAdj', 'LC_NT_NLDAWP', 'LC_NT_NL', 'NT_OB'], 'number'],
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
        $query = NtLeaveCredits::find()->joinWith(['employeeList']);

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
            'LC_NT_VLAdj' => $this->LC_NT_VLAdj,
            'LC_NT_VLDAWP' => $this->LC_NT_VLDAWP,
            'LC_NT_VL' => $this->LC_NT_VL,
            'LC_NT_SLAdj' => $this->LC_NT_SLAdj,
            'LC_NT_SLDAWP' => $this->LC_NT_SLDAWP,
            'LC_NT_SL' => $this->LC_NT_SL,
            'LC_NT_BLAdj' => $this->LC_NT_BLAdj,
            'LC_NT_BLDAWP' => $this->LC_NT_BLDAWP,
            'LC_NT_BL' => $this->LC_NT_BL,
            'LC_NT_ELAdj' => $this->LC_NT_ELAdj,
            'LC_NT_ELDAWP' => $this->LC_NT_ELDAWP,
            'LC_NT_EL' => $this->LC_NT_EL,
            'LC_NT_SPLAdj' => $this->LC_NT_SPLAdj,
            'LC_NT_SPLDAWP' => $this->LC_NT_SPLDAWP,
            'LC_NT_SPL' => $this->LC_NT_SPL,
            'LC_NT_PLAdj' => $this->LC_NT_PLAdj,
            'LC_NT_PLDAWP' => $this->LC_NT_PLDAWP,
            'LC_NT_PL' => $this->LC_NT_PL,
            'LC_NT_MLAdj' => $this->LC_NT_MLAdj,
            'LC_NT_MLDAWP' => $this->LC_NT_MLDAWP,
            'LC_NT_ML' => $this->LC_NT_ML,
            'LC_NT_ULAdj' => $this->LC_NT_ULAdj,
            'LC_NT_ULDAWP' => $this->LC_NT_ULDAWP,
            'LC_NT_UL' => $this->LC_NT_UL,
            'LC_NT_SLWAdj' => $this->LC_NT_SLWAdj,
            'LC_NT_SLWDAWP' => $this->LC_NT_SLWDAWP,
            'LC_NT_SLW' => $this->LC_NT_SLW,
            'LC_NT_NLAdj' => $this->LC_NT_NLAdj,
            'LC_NT_NLDAWP' => $this->LC_NT_NLDAWP,
            'LC_NT_NL' => $this->LC_NT_NL,
            'NT_OB' => $this->NT_OB,
        ]);

        $query->andFilterWhere(['like', 'SH03_NTLEAVECREDITS.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH03_NTLEAVECREDITS.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'LC_NT_VLRem', $this->LC_NT_VLRem])
            ->andFilterWhere(['like', 'LC_NT_SLRem', $this->LC_NT_SLRem])
            ->andFilterWhere(['like', 'LC_NT_BLRem', $this->LC_NT_BLRem])
            ->andFilterWhere(['like', 'LC_NT_ELRem', $this->LC_NT_ELRem])
            ->andFilterWhere(['like', 'LC_NT_SPLRem', $this->LC_NT_SPLRem])
            ->andFilterWhere(['like', 'LC_NT_PLRem', $this->LC_NT_PLRem])
            ->andFilterWhere(['like', 'LC_NT_MLRem', $this->LC_NT_MLRem])
            ->andFilterWhere(['like', 'LC_NT_ULRem', $this->LC_NT_ULRem])
            ->andFilterWhere(['like', 'LC_NT_SLWRem', $this->LC_NT_SLWRem])
            ->andFilterWhere(['like', 'LC_NT_NLRem', $this->LC_NT_NLRem])
            ->andFilterWhere(['like', 'NT_OBRem', $this->NT_OBRem])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
