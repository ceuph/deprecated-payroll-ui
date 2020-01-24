<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PayrollEmployeeList;

/**
 * PayrollEmployeeListSearch represents the model behind the search form of `app\models\PayrollEmployeeList`.
 */
class PayrollEmployeeListSearch extends PayrollEmployeeList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'LName', 'FName', 'MName', 'MI', 'SchoolCollege', 'Gender', 'Department', 'Position', 'Campus', 'MainJob'], 'safe'],
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
        $query = PayrollEmployeeList::find();

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
        $query->andFilterWhere(['like', 'EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'LName', $this->LName])
            ->andFilterWhere(['like', 'FName', $this->FName])
            ->andFilterWhere(['like', 'MName', $this->MName])
            ->andFilterWhere(['like', 'MI', $this->MI])
            ->andFilterWhere(['like', 'SchoolCollege', $this->SchoolCollege])
            ->andFilterWhere(['like', 'Gender', $this->Gender])
            ->andFilterWhere(['like', 'Department', $this->Department])
            ->andFilterWhere(['like', 'Position', $this->Position])
            ->andFilterWhere(['like', 'Campus', $this->Campus])
            ->andFilterWhere(['like', 'MainJob', $this->MainJob]);

        return $dataProvider;
    }
}
