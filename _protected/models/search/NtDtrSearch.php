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
    public function rules()
    {
        return [
            [['EmpID', 'PrdID', 'NT_DAbsntRem', 'NT_DLWOPRem'], 'safe'],
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
        $query = NtDtr::find();

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

        $query->andFilterWhere(['like', 'EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'NT_DAbsntRem', $this->NT_DAbsntRem])
            ->andFilterWhere(['like', 'NT_DLWOPRem', $this->NT_DLWOPRem]);

        return $dataProvider;
    }
}
