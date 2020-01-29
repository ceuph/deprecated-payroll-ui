<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GsLeaveCredits;

/**
 * GsLeaveCreditsSearch represents the model behind the search form of `app\models\GsLeaveCredits`.
 */
class GsLeaveCreditsSearch extends GsLeaveCredits
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
            [['EmpID', 'PrdID', 'LEC_GSVLRem', 'LEC_GSOLVLRem', 'LEC_GSSLRem', 'LEC_GSOLSLRem', 'LEC_GSBLRem', 'LEC_GSELRem', 'LEC_GSSPLRem', 'LEC_GSPLRem', 'LEC_GSMLRem', 'LEC_GSULRem', 'LEC_GSSLWRem', 'LEC_GSNLRem', 'GSOBLecRem', 'LAB_GSVLRem', 'LAB_GSOLVLRem', 'LAB_GSSLRem', 'LAB_GSOLSLRem', 'LAB_GSBLRem', 'LAB_GSELRem', 'LAB_GSSPLRem', 'LAB_GSPLRem', 'LAB_GSMLRem', 'LAB_GSULRem', 'LAB_GSSLWRem', 'LAB_GSNLRem', 'GSOBLabRem', 'CLC_GSVLRem', 'CLC_GSOLVLRem', 'CLC_GSSLRem', 'CLC_GSOLSLRem', 'CLC_GSBLRem', 'CLC_GSELRem', 'CLC_GSSPLRem', 'CLC_GSPLRem', 'CLC_GSMLRem', 'CLC_GSULRem', 'CLC_GSSLWRem', 'CLC_GSNLRem', 'GSOBClcRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['LEC_GSVLAdj', 'LEC_GSVLHAWP', 'LEC_GSVL', 'LEC_GSOLVLAdj', 'LEC_GSOLVLHAWP', 'LEC_GSOLVL', 'LEC_GSSLAdj', 'LEC_GSSLHAWP', 'LEC_GSSL', 'LEC_GSOLSLAdj', 'LEC_GSOLSLHAWP', 'LEC_GSOLSL', 'LEC_GSBLAdj', 'LEC_GSBLHAWP', 'LEC_GSBL', 'LEC_GSELAdj', 'LEC_GSELHAWP', 'LEC_GSEL', 'LEC_GSSPLAdj', 'LEC_GSSPLHAWP', 'LEC_GSSPL', 'LEC_GSPLAdj', 'LEC_GSPLHAWP', 'LEC_GSPL', 'LEC_GSMLAdj', 'LEC_GSMLHAWP', 'LEC_GSML', 'LEC_GSULAdj', 'LEC_GSULHAWP', 'LEC_GSUL', 'LEC_GSSLWAdj', 'LEC_GSSLWHAWP', 'LEC_GSSLW', 'LEC_GSNLAdj', 'LEC_GSNLHAWP', 'LEC_GSNL', 'GSOBLec', 'LAB_GSVLAdj', 'LAB_GSVLHAWP', 'LAB_GSVL', 'LAB_GSOLVLAdj', 'LAB_GSOLVLHAWP', 'LAB_GSOLVL', 'LAB_GSSLAdj', 'LAB_GSSLHAWP', 'LAB_GSSL', 'LAB_GSOLSLAdj', 'LAB_GSOLSLHAWP', 'LAB_GSOLSL', 'LAB_GSBLAdj', 'LAB_GSBLHAWP', 'LAB_GSBL', 'LAB_GSELAdj', 'LAB_GSELHAWP', 'LAB_GSEL', 'LAB_GSSPLAdj', 'LAB_GSSPLHAWP', 'LAB_GSSPL', 'LAB_GSPLAdj', 'LAB_GSPLHAWP', 'LAB_GSPL', 'LAB_GSMLAdj', 'LAB_GSMLHAWP', 'LAB_GSML', 'LAB_GSULAdj', 'LAB_GSULHAWP', 'LAB_GSUL', 'LAB_GSSLWAdj', 'LAB_GSSLWHAWP', 'LAB_GSSLW', 'LAB_GSNLAdj', 'LAB_GSNLHAWP', 'LAB_GSNL', 'GSOBLab', 'CLC_GSVLAdj', 'CLC_GSVLHAWP', 'CLC_GSVL', 'CLC_GSOLVLAdj', 'CLC_GSOLVLHAWP', 'CLC_GSOLVL', 'CLC_GSSLAdj', 'CLC_GSSLHAWP', 'CLC_GSSL', 'CLC_GSOLSLAdj', 'CLC_GSOLSLHAWP', 'CLC_GSOLSL', 'CLC_GSBLAdj', 'CLC_GSBLHAWP', 'CLC_GSBL', 'CLC_GSELAdj', 'CLC_GSELHAWP', 'CLC_GSEL', 'CLC_GSSPLAdj', 'CLC_GSSPLHAWP', 'CLC_GSSPL', 'CLC_GSPLAdj', 'CLC_GSPLHAWP', 'CLC_GSPL', 'CLC_GSMLAdj', 'CLC_GSMLHAWP', 'CLC_GSML', 'CLC_GSULAdj', 'CLC_GSULHAWP', 'CLC_GSUL', 'CLC_GSSLWAdj', 'CLC_GSSLWHAWP', 'CLC_GSSLW', 'CLC_GSNLAdj', 'CLC_GSNLHAWP', 'CLC_GSNL', 'GSOBClc'], 'number'],
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
        $query = GsLeaveCredits::find()->joinWith(['employeeList']);

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
            'LEC_GSVLAdj' => $this->LEC_GSVLAdj,
            'LEC_GSVLHAWP' => $this->LEC_GSVLHAWP,
            'LEC_GSVL' => $this->LEC_GSVL,
            'LEC_GSOLVLAdj' => $this->LEC_GSOLVLAdj,
            'LEC_GSOLVLHAWP' => $this->LEC_GSOLVLHAWP,
            'LEC_GSOLVL' => $this->LEC_GSOLVL,
            'LEC_GSSLAdj' => $this->LEC_GSSLAdj,
            'LEC_GSSLHAWP' => $this->LEC_GSSLHAWP,
            'LEC_GSSL' => $this->LEC_GSSL,
            'LEC_GSOLSLAdj' => $this->LEC_GSOLSLAdj,
            'LEC_GSOLSLHAWP' => $this->LEC_GSOLSLHAWP,
            'LEC_GSOLSL' => $this->LEC_GSOLSL,
            'LEC_GSBLAdj' => $this->LEC_GSBLAdj,
            'LEC_GSBLHAWP' => $this->LEC_GSBLHAWP,
            'LEC_GSBL' => $this->LEC_GSBL,
            'LEC_GSELAdj' => $this->LEC_GSELAdj,
            'LEC_GSELHAWP' => $this->LEC_GSELHAWP,
            'LEC_GSEL' => $this->LEC_GSEL,
            'LEC_GSSPLAdj' => $this->LEC_GSSPLAdj,
            'LEC_GSSPLHAWP' => $this->LEC_GSSPLHAWP,
            'LEC_GSSPL' => $this->LEC_GSSPL,
            'LEC_GSPLAdj' => $this->LEC_GSPLAdj,
            'LEC_GSPLHAWP' => $this->LEC_GSPLHAWP,
            'LEC_GSPL' => $this->LEC_GSPL,
            'LEC_GSMLAdj' => $this->LEC_GSMLAdj,
            'LEC_GSMLHAWP' => $this->LEC_GSMLHAWP,
            'LEC_GSML' => $this->LEC_GSML,
            'LEC_GSULAdj' => $this->LEC_GSULAdj,
            'LEC_GSULHAWP' => $this->LEC_GSULHAWP,
            'LEC_GSUL' => $this->LEC_GSUL,
            'LEC_GSSLWAdj' => $this->LEC_GSSLWAdj,
            'LEC_GSSLWHAWP' => $this->LEC_GSSLWHAWP,
            'LEC_GSSLW' => $this->LEC_GSSLW,
            'LEC_GSNLAdj' => $this->LEC_GSNLAdj,
            'LEC_GSNLHAWP' => $this->LEC_GSNLHAWP,
            'LEC_GSNL' => $this->LEC_GSNL,
            'GSOBLec' => $this->GSOBLec,
            'LAB_GSVLAdj' => $this->LAB_GSVLAdj,
            'LAB_GSVLHAWP' => $this->LAB_GSVLHAWP,
            'LAB_GSVL' => $this->LAB_GSVL,
            'LAB_GSOLVLAdj' => $this->LAB_GSOLVLAdj,
            'LAB_GSOLVLHAWP' => $this->LAB_GSOLVLHAWP,
            'LAB_GSOLVL' => $this->LAB_GSOLVL,
            'LAB_GSSLAdj' => $this->LAB_GSSLAdj,
            'LAB_GSSLHAWP' => $this->LAB_GSSLHAWP,
            'LAB_GSSL' => $this->LAB_GSSL,
            'LAB_GSOLSLAdj' => $this->LAB_GSOLSLAdj,
            'LAB_GSOLSLHAWP' => $this->LAB_GSOLSLHAWP,
            'LAB_GSOLSL' => $this->LAB_GSOLSL,
            'LAB_GSBLAdj' => $this->LAB_GSBLAdj,
            'LAB_GSBLHAWP' => $this->LAB_GSBLHAWP,
            'LAB_GSBL' => $this->LAB_GSBL,
            'LAB_GSELAdj' => $this->LAB_GSELAdj,
            'LAB_GSELHAWP' => $this->LAB_GSELHAWP,
            'LAB_GSEL' => $this->LAB_GSEL,
            'LAB_GSSPLAdj' => $this->LAB_GSSPLAdj,
            'LAB_GSSPLHAWP' => $this->LAB_GSSPLHAWP,
            'LAB_GSSPL' => $this->LAB_GSSPL,
            'LAB_GSPLAdj' => $this->LAB_GSPLAdj,
            'LAB_GSPLHAWP' => $this->LAB_GSPLHAWP,
            'LAB_GSPL' => $this->LAB_GSPL,
            'LAB_GSMLAdj' => $this->LAB_GSMLAdj,
            'LAB_GSMLHAWP' => $this->LAB_GSMLHAWP,
            'LAB_GSML' => $this->LAB_GSML,
            'LAB_GSULAdj' => $this->LAB_GSULAdj,
            'LAB_GSULHAWP' => $this->LAB_GSULHAWP,
            'LAB_GSUL' => $this->LAB_GSUL,
            'LAB_GSSLWAdj' => $this->LAB_GSSLWAdj,
            'LAB_GSSLWHAWP' => $this->LAB_GSSLWHAWP,
            'LAB_GSSLW' => $this->LAB_GSSLW,
            'LAB_GSNLAdj' => $this->LAB_GSNLAdj,
            'LAB_GSNLHAWP' => $this->LAB_GSNLHAWP,
            'LAB_GSNL' => $this->LAB_GSNL,
            'GSOBLab' => $this->GSOBLab,
            'CLC_GSVLAdj' => $this->CLC_GSVLAdj,
            'CLC_GSVLHAWP' => $this->CLC_GSVLHAWP,
            'CLC_GSVL' => $this->CLC_GSVL,
            'CLC_GSOLVLAdj' => $this->CLC_GSOLVLAdj,
            'CLC_GSOLVLHAWP' => $this->CLC_GSOLVLHAWP,
            'CLC_GSOLVL' => $this->CLC_GSOLVL,
            'CLC_GSSLAdj' => $this->CLC_GSSLAdj,
            'CLC_GSSLHAWP' => $this->CLC_GSSLHAWP,
            'CLC_GSSL' => $this->CLC_GSSL,
            'CLC_GSOLSLAdj' => $this->CLC_GSOLSLAdj,
            'CLC_GSOLSLHAWP' => $this->CLC_GSOLSLHAWP,
            'CLC_GSOLSL' => $this->CLC_GSOLSL,
            'CLC_GSBLAdj' => $this->CLC_GSBLAdj,
            'CLC_GSBLHAWP' => $this->CLC_GSBLHAWP,
            'CLC_GSBL' => $this->CLC_GSBL,
            'CLC_GSELAdj' => $this->CLC_GSELAdj,
            'CLC_GSELHAWP' => $this->CLC_GSELHAWP,
            'CLC_GSEL' => $this->CLC_GSEL,
            'CLC_GSSPLAdj' => $this->CLC_GSSPLAdj,
            'CLC_GSSPLHAWP' => $this->CLC_GSSPLHAWP,
            'CLC_GSSPL' => $this->CLC_GSSPL,
            'CLC_GSPLAdj' => $this->CLC_GSPLAdj,
            'CLC_GSPLHAWP' => $this->CLC_GSPLHAWP,
            'CLC_GSPL' => $this->CLC_GSPL,
            'CLC_GSMLAdj' => $this->CLC_GSMLAdj,
            'CLC_GSMLHAWP' => $this->CLC_GSMLHAWP,
            'CLC_GSML' => $this->CLC_GSML,
            'CLC_GSULAdj' => $this->CLC_GSULAdj,
            'CLC_GSULHAWP' => $this->CLC_GSULHAWP,
            'CLC_GSUL' => $this->CLC_GSUL,
            'CLC_GSSLWAdj' => $this->CLC_GSSLWAdj,
            'CLC_GSSLWHAWP' => $this->CLC_GSSLWHAWP,
            'CLC_GSSLW' => $this->CLC_GSSLW,
            'CLC_GSNLAdj' => $this->CLC_GSNLAdj,
            'CLC_GSNLHAWP' => $this->CLC_GSNLHAWP,
            'CLC_GSNL' => $this->CLC_GSNL,
            'GSOBClc' => $this->GSOBClc,
        ]);

        $query->andFilterWhere(['like', 'SH03_GSLEAVECREDITS.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH03_GSLEAVECREDITS.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'LEC_GSVLRem', $this->LEC_GSVLRem])
            ->andFilterWhere(['like', 'LEC_GSOLVLRem', $this->LEC_GSOLVLRem])
            ->andFilterWhere(['like', 'LEC_GSSLRem', $this->LEC_GSSLRem])
            ->andFilterWhere(['like', 'LEC_GSOLSLRem', $this->LEC_GSOLSLRem])
            ->andFilterWhere(['like', 'LEC_GSBLRem', $this->LEC_GSBLRem])
            ->andFilterWhere(['like', 'LEC_GSELRem', $this->LEC_GSELRem])
            ->andFilterWhere(['like', 'LEC_GSSPLRem', $this->LEC_GSSPLRem])
            ->andFilterWhere(['like', 'LEC_GSPLRem', $this->LEC_GSPLRem])
            ->andFilterWhere(['like', 'LEC_GSMLRem', $this->LEC_GSMLRem])
            ->andFilterWhere(['like', 'LEC_GSULRem', $this->LEC_GSULRem])
            ->andFilterWhere(['like', 'LEC_GSSLWRem', $this->LEC_GSSLWRem])
            ->andFilterWhere(['like', 'LEC_GSNLRem', $this->LEC_GSNLRem])
            ->andFilterWhere(['like', 'GSOBLecRem', $this->GSOBLecRem])
            ->andFilterWhere(['like', 'LAB_GSVLRem', $this->LAB_GSVLRem])
            ->andFilterWhere(['like', 'LAB_GSOLVLRem', $this->LAB_GSOLVLRem])
            ->andFilterWhere(['like', 'LAB_GSSLRem', $this->LAB_GSSLRem])
            ->andFilterWhere(['like', 'LAB_GSOLSLRem', $this->LAB_GSOLSLRem])
            ->andFilterWhere(['like', 'LAB_GSBLRem', $this->LAB_GSBLRem])
            ->andFilterWhere(['like', 'LAB_GSELRem', $this->LAB_GSELRem])
            ->andFilterWhere(['like', 'LAB_GSSPLRem', $this->LAB_GSSPLRem])
            ->andFilterWhere(['like', 'LAB_GSPLRem', $this->LAB_GSPLRem])
            ->andFilterWhere(['like', 'LAB_GSMLRem', $this->LAB_GSMLRem])
            ->andFilterWhere(['like', 'LAB_GSULRem', $this->LAB_GSULRem])
            ->andFilterWhere(['like', 'LAB_GSSLWRem', $this->LAB_GSSLWRem])
            ->andFilterWhere(['like', 'LAB_GSNLRem', $this->LAB_GSNLRem])
            ->andFilterWhere(['like', 'GSOBLabRem', $this->GSOBLabRem])
            ->andFilterWhere(['like', 'CLC_GSVLRem', $this->CLC_GSVLRem])
            ->andFilterWhere(['like', 'CLC_GSOLVLRem', $this->CLC_GSOLVLRem])
            ->andFilterWhere(['like', 'CLC_GSSLRem', $this->CLC_GSSLRem])
            ->andFilterWhere(['like', 'CLC_GSOLSLRem', $this->CLC_GSOLSLRem])
            ->andFilterWhere(['like', 'CLC_GSBLRem', $this->CLC_GSBLRem])
            ->andFilterWhere(['like', 'CLC_GSELRem', $this->CLC_GSELRem])
            ->andFilterWhere(['like', 'CLC_GSSPLRem', $this->CLC_GSSPLRem])
            ->andFilterWhere(['like', 'CLC_GSPLRem', $this->CLC_GSPLRem])
            ->andFilterWhere(['like', 'CLC_GSMLRem', $this->CLC_GSMLRem])
            ->andFilterWhere(['like', 'CLC_GSULRem', $this->CLC_GSULRem])
            ->andFilterWhere(['like', 'CLC_GSSLWRem', $this->CLC_GSSLWRem])
            ->andFilterWhere(['like', 'CLC_GSNLRem', $this->CLC_GSNLRem])
            ->andFilterWhere(['like', 'GSOBClcRem', $this->GSOBClcRem])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
