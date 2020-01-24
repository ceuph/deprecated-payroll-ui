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
    public function rules()
    {
        return [
            [['PrdID', 'EmpID'], 'safe'],
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
        $query = TcTeachingLoad::find();

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
            'UG_LoadLec' => $this->UG_LoadLec,
            'UG_LoadLab' => $this->UG_LoadLab,
            'UG_LoadClc' => $this->UG_LoadClc,
            'GS_LoadLec' => $this->GS_LoadLec,
            'GS_LoadLab' => $this->GS_LoadLab,
            'GS_LoadClc' => $this->GS_LoadClc,
            'TC_SemMonth' => $this->TC_SemMonth,
        ]);

        $query->andFilterWhere(['like', 'PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'EmpID', $this->EmpID]);

        return $dataProvider;
    }
}
