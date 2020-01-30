<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OtherDeductions;

/**
 * OtherDeductionsSearch represents the model behind the search form of `app\models\OtherDeductions`.
 */
class OtherDeductionsSearch extends OtherDeductions
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
            [['EmpID', 'PrdID','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['FAWU_AF', 'FAWU_UD', 'FAWU_WF', 'HDMF_UPG', 'HDMF_MPL2', 'Coop', 'Tuition', 'Tour', 'AlumniTick', 'ParkingFee', 'GradExp', 'TogaRent', 'StuUniform', 'Vaccine', 'OtherDeduc', 'AdjWTAX', 'AdjHDMF', 'AdjPHIC', 'AdjSSS', 'OPBasic', 'OPEFA', 'OPCOLA', 'OPBonusXmas', 'OPBonusMidYr', 'OPTMP', 'OPAdvIP', 'OPAllowIP', 'OPVLSL'], 'number'],
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
        $query = OtherDeductions::find()->joinWith(['employeeList']);

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
            'FAWU_AF' => $this->FAWU_AF,
            'FAWU_UD' => $this->FAWU_UD,
            'FAWU_WF' => $this->FAWU_WF,
            'HDMF_UPG' => $this->HDMF_UPG,
            'HDMF_MPL2' => $this->HDMF_MPL2,
            'Coop' => $this->Coop,
            'Tuition' => $this->Tuition,
            'Tour' => $this->Tour,
            'AlumniTick' => $this->AlumniTick,
            'ParkingFee' => $this->ParkingFee,
            'GradExp' => $this->GradExp,
            'TogaRent' => $this->TogaRent,
            'StuUniform' => $this->StuUniform,
            'Vaccine' => $this->Vaccine,
            'OtherDeduc' => $this->OtherDeduc,
            'AdjWTAX' => $this->AdjWTAX,
            'AdjHDMF' => $this->AdjHDMF,
            'AdjPHIC' => $this->AdjPHIC,
            'AdjSSS' => $this->AdjSSS,
            'OPBasic' => $this->OPBasic,
            'OPEFA' => $this->OPEFA,
            'OPCOLA' => $this->OPCOLA,
            'OPBonusXmas' => $this->OPBonusXmas,
            'OPBonusMidYr' => $this->OPBonusMidYr,
            'OPTMP' => $this->OPTMP,
            'OPAdvIP' => $this->OPAdvIP,
            'OPAllowIP' => $this->OPAllowIP,
            'OPVLSL' => $this->OPVLSL,
        ]);

        $query->andFilterWhere(['like', 'SH09_OTHERDEDUCTIONS.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH09_OTHERDEDUCTIONS.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
