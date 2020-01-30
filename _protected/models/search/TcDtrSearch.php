<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TcDtr;

/**
 * TcDtrSearch represents the model behind the search form of `app\models\TcDtr`.
 */
class TcDtrSearch extends TcDtr
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
            [['EmpID', 'PrdID', 'UG_HAbsntLecRem', 'UG_HCMTLecRem', 'UG_HLWOPLecRem', 'UG_HAbsntLabRem', 'UG_HCMTLabRem', 'UG_HLWOPLabRem', 'UG_HAbsntClcRem', 'UG_HCMTClcRem', 'UG_HLWOPClcRem', 'GS_HAbsntLecRem', 'GS_HCMTLecRem', 'GS_HLWOPLecRem', 'GS_HAbsntLabRem', 'GS_HCMTLabRem', 'GS_HLWOPLabRem', 'GS_HAbsntClcRem', 'GS_HCMTClcRem', 'GS_HLWOPClcRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['UG_HAbsntLec', 'UG_HCMTLec', 'UG_HLWOPLec', 'UG_HAbsntLab', 'UG_HCMTLab', 'UG_HLWOPLab', 'UG_HAbsntClc', 'UG_HCMTClc', 'UG_HLWOPClc', 'GS_HAbsntLec', 'GS_HCMTLec', 'GS_HLWOPLec', 'GS_HAbsntLab', 'GS_HCMTLab', 'GS_HLWOPLab', 'GS_HAbsntClc', 'GS_HCMTClc', 'GS_HLWOPClc'], 'number'],
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
        $query = TcDtr::find()->joinWith(['employeeList']);

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
            'UG_HAbsntLec' => $this->UG_HAbsntLec,
            'UG_HCMTLec' => $this->UG_HCMTLec,
            'UG_HLWOPLec' => $this->UG_HLWOPLec,
            'UG_HAbsntLab' => $this->UG_HAbsntLab,
            'UG_HCMTLab' => $this->UG_HCMTLab,
            'UG_HLWOPLab' => $this->UG_HLWOPLab,
            'UG_HAbsntClc' => $this->UG_HAbsntClc,
            'UG_HCMTClc' => $this->UG_HCMTClc,
            'UG_HLWOPClc' => $this->UG_HLWOPClc,
            'GS_HAbsntLec' => $this->GS_HAbsntLec,
            'GS_HCMTLec' => $this->GS_HCMTLec,
            'GS_HLWOPLec' => $this->GS_HLWOPLec,
            'GS_HAbsntLab' => $this->GS_HAbsntLab,
            'GS_HCMTLab' => $this->GS_HCMTLab,
            'GS_HLWOPLab' => $this->GS_HLWOPLab,
            'GS_HAbsntClc' => $this->GS_HAbsntClc,
            'GS_HCMTClc' => $this->GS_HCMTClc,
            'GS_HLWOPClc' => $this->GS_HLWOPClc,
        ]);

        $query->andFilterWhere(['like', 'SH04_TCDTR.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH04_TCDTR.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'UG_HAbsntLecRem', $this->UG_HAbsntLecRem])
            ->andFilterWhere(['like', 'UG_HCMTLecRem', $this->UG_HCMTLecRem])
            ->andFilterWhere(['like', 'UG_HLWOPLecRem', $this->UG_HLWOPLecRem])
            ->andFilterWhere(['like', 'UG_HAbsntLabRem', $this->UG_HAbsntLabRem])
            ->andFilterWhere(['like', 'UG_HCMTLabRem', $this->UG_HCMTLabRem])
            ->andFilterWhere(['like', 'UG_HLWOPLabRem', $this->UG_HLWOPLabRem])
            ->andFilterWhere(['like', 'UG_HAbsntClcRem', $this->UG_HAbsntClcRem])
            ->andFilterWhere(['like', 'UG_HCMTClcRem', $this->UG_HCMTClcRem])
            ->andFilterWhere(['like', 'UG_HLWOPClcRem', $this->UG_HLWOPClcRem])
            ->andFilterWhere(['like', 'GS_HAbsntLecRem', $this->GS_HAbsntLecRem])
            ->andFilterWhere(['like', 'GS_HCMTLecRem', $this->GS_HCMTLecRem])
            ->andFilterWhere(['like', 'GS_HLWOPLecRem', $this->GS_HLWOPLecRem])
            ->andFilterWhere(['like', 'GS_HAbsntLabRem', $this->GS_HAbsntLabRem])
            ->andFilterWhere(['like', 'GS_HCMTLabRem', $this->GS_HCMTLabRem])
            ->andFilterWhere(['like', 'GS_HLWOPLabRem', $this->GS_HLWOPLabRem])
            ->andFilterWhere(['like', 'GS_HAbsntClcRem', $this->GS_HAbsntClcRem])
            ->andFilterWhere(['like', 'GS_HCMTClcRem', $this->GS_HCMTClcRem])
            ->andFilterWhere(['like', 'GS_HLWOPClcRem', $this->GS_HLWOPClcRem])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
