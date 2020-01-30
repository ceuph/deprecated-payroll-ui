<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TcTeachingLoad;

/**
 * TcTeachingLoadSearch represents the model behind the search form of `app\models\TcTeachingLoad`.
 */
class TcTeachingLoadSearch extends TcTeachingLoad
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
            [['PrdID', 'EmpID','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['UG_LoadLec', 'UG_LoadLab', 'UG_LoadClc', 'GS_LoadLec', 'GS_LoadLab', 'GS_LoadClc', 'TC_SemMonth'], 'number'],
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
        $query = TcTeachingLoad::find()->joinWith(['employeeList']);

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
            'UG_LoadLec' => $this->UG_LoadLec,
            'UG_LoadLab' => $this->UG_LoadLab,
            'UG_LoadClc' => $this->UG_LoadClc,
            'GS_LoadLec' => $this->GS_LoadLec,
            'GS_LoadLab' => $this->GS_LoadLab,
            'GS_LoadClc' => $this->GS_LoadClc,
            'TC_SemMonth' => $this->TC_SemMonth,
        ]);

        $query->andFilterWhere(['like', 'SH02_TCTEACHINGLOAD.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'SH02_TCTEACHINGLOAD.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
