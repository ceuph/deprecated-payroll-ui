<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\NtDtr;

/**
 * NtDtrSearch represents the model behind the search form of `app\models\NtDtr`.
 */
class NtDtrSearch extends NtDtr
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
            [['EmpID', 'PrdID', 'NT_DAbsntRem', 'NT_DLWOPRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['NT_DAbsnt', 'NT_HLate', 'NT_HUdt', 'NT_DLWOP', 'NT_OTHReg', 'NT_OTHNDReg', 'NT_OTHRegExc', 'NT_OTHNDRegExc', 'NT_OTHSpcl', 'NT_OTHNDSpcl', 'NT_OTHSpclExc', 'NT_OTHNDSpclExc', 'NT_OTHLgl', 'NT_OTHNDLgl', 'NT_OTHLglExc', 'NT_OTHNDLglExc', 'NT_OTHHolSun', 'NT_OTHNDHolSun', 'NT_OTHHolSunExc', 'NT_OTHNDHolExc'], 'number'],
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
        $query = NtDtr::find()->joinWith(['employeeList']);

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
            'NT_DAbsnt' => $this->NT_DAbsnt,
            'NT_HLate' => $this->NT_HLate,
            'NT_HUdt' => $this->NT_HUdt,
            'NT_DLWOP' => $this->NT_DLWOP,
            'NT_OTHReg' => $this->NT_OTHReg,
            'NT_OTHNDReg' => $this->NT_OTHNDReg,
            'NT_OTHRegExc' => $this->NT_OTHRegExc,
            'NT_OTHNDRegExc' => $this->NT_OTHNDRegExc,
            'NT_OTHSpcl' => $this->NT_OTHSpcl,
            'NT_OTHNDSpcl' => $this->NT_OTHNDSpcl,
            'NT_OTHSpclExc' => $this->NT_OTHSpclExc,
            'NT_OTHNDSpclExc' => $this->NT_OTHNDSpclExc,
            'NT_OTHLgl' => $this->NT_OTHLgl,
            'NT_OTHNDLgl' => $this->NT_OTHNDLgl,
            'NT_OTHLglExc' => $this->NT_OTHLglExc,
            'NT_OTHNDLglExc' => $this->NT_OTHNDLglExc,
            'NT_OTHHolSun' => $this->NT_OTHHolSun,
            'NT_OTHNDHolSun' => $this->NT_OTHNDHolSun,
            'NT_OTHHolSunExc' => $this->NT_OTHHolSunExc,
            'NT_OTHNDHolExc' => $this->NT_OTHNDHolExc,
        ]);

        $query->andFilterWhere(['like', 'SH04_NTDTR.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH04_NTDTR.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'NT_DAbsntRem', $this->NT_DAbsntRem])
            ->andFilterWhere(['like', 'NT_DLWOPRem', $this->NT_DLWOPRem])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
