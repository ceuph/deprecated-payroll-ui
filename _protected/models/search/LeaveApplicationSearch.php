<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\LeaveApplication;

/**
 * LeaveApplicationSearch represents the model behind the search form of `app\models\LeaveApplication`.
 */
class LeaveApplicationSearch extends LeaveApplication
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['EmpID', 'type_leave', 'date_from', 'date_to', 'date_created', 'date_updated', 'date_approve_head', 'date_approve_hrd','type'], 'safe'],
            [['status'], 'integer'],
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
        $query = LeaveApplication::find();

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
            'date_from' => $this->date_from,
            'date_to' => $this->date_to,
            'date_created' => $this->date_created,
            'date_updated' => $this->date_updated,
            'date_approve_head' => $this->date_approve_head,
            'date_approve_hrd' => $this->date_approve_hrd,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'EmpID', $this->EmpID])
             ->andFilterWhere(['like', 'type_leave', $this->type_leave]);


        return $dataProvider;
    }
}
