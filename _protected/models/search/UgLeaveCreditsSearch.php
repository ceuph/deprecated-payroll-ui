<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UgLeaveCredits;

/**
 * UgLeaveCreditsSearch represents the model behind the search form of `app\models\UgLeaveCredits`.
 */
class UgLeaveCreditsSearch extends UgLeaveCredits
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
            [['EmpID', 'PrdID', 'LEC_UGVLRem', 'LEC_UGOLVLRem', 'LEC_UGSLRem', 'LEC_UGOLSLRem', 'LEC_UGBLRem', 'LEC_UGELRem', 'LEC_UGSPLRem', 'LEC_UGPLRem', 'LEC_UGMLRem', 'LEC_UGULRem', 'LEC_UGSLWRem', 'LEC_UGNLRem', 'UGOBLecRem', 'LAB_UGVLRem', 'LAB_UGOLVLRem', 'LAB_UGSLRem', 'LAB_UGOLSLRem', 'LAB_UGBLRem', 'LAB_UGELRem', 'LAB_UGSPLRem', 'LAB_UGPLRem', 'LAB_UGMLRem', 'LAB_UGULRem', 'LAB_UGSLWRem', 'LAB_UGNLRem', 'UGOBLabRem', 'CLC_UGVLRem', 'CLC_UGOLVLRem', 'CLC_UGSLRem', 'CLC_UGOLSLRem', 'CLC_UGBLRem', 'CLC_UGELRem', 'CLC_UGSPLRem', 'CLC_UGPLRem', 'CLC_UGMLRem', 'CLC_UGULRem', 'CLC_UGSLWRem', 'CLC_UGNLRem', 'UGOBClcRem','fname','campus','lname','schoolCollege','department'], 'safe'],
            [['LEC_UGVLAdj', 'LEC_UGVLHAWP', 'LEC_UGVL', 'LEC_UGOLVLAdj', 'LEC_UGOLVLHAWP', 'LEC_UGOLVL', 'LEC_UGSLAdj', 'LEC_UGSLHAWP', 'LEC_UGSL', 'LEC_UGOLSLAdj', 'LEC_UGOLSLHAWP', 'LEC_UGOLSL', 'LEC_UGBLAdj', 'LEC_UGBLHAWP', 'LEC_UGBL', 'LEC_UGELAdj', 'LEC_UGELHAWP', 'LEC_UGEL', 'LEC_UGSPLAdj', 'LEC_UGSPLHAWP', 'LEC_UGSPL', 'LEC_UGPLAdj', 'LEC_UGPLHAWP', 'LEC_UGPL', 'LEC_UGMLAdj', 'LEC_UGMLHAWP', 'LEC_UGML', 'LEC_UGULAdj', 'LEC_UGULHAWP', 'LEC_UGUL', 'LEC_UGSLWAdj', 'LEC_UGSLWHAWP', 'LEC_UGSLW', 'LEC_UGNLAdj', 'LEC_UGNLHAWP', 'LEC_UGNL', 'UGOBLec', 'LAB_UGVLAdj', 'LAB_UGVLHAWP', 'LAB_UGVL', 'LAB_UGOLVLAdj', 'LAB_UGOLVLHAWP', 'LAB_UGOLVL', 'LAB_UGSLAdj', 'LAB_UGSLHAWP', 'LAB_UGSL', 'LAB_UGOLSLAdj', 'LAB_UGOLSLHAWP', 'LAB_UGOLSL', 'LAB_UGBLAdj', 'LAB_UGBLHAWP', 'LAB_UGBL', 'LAB_UGELAdj', 'LAB_UGELHAWP', 'LAB_UGEL', 'LAB_UGSPLAdj', 'LAB_UGSPLHAWP', 'LAB_UGSPL', 'LAB_UGPLAdj', 'LAB_UGPLHAWP', 'LAB_UGPL', 'LAB_UGMLAdj', 'LAB_UGMLHAWP', 'LAB_UGML', 'LAB_UGULAdj', 'LAB_UGULHAWP', 'LAB_UGUL', 'LAB_UGSLWAdj', 'LAB_UGSLWHAWP', 'LAB_UGSLW', 'LAB_UGNLAdj', 'LAB_UGNLHAWP', 'LAB_UGNL', 'UGOBLab', 'CLC_UGVLAdj', 'CLC_UGVLHAWP', 'CLC_UGVL', 'CLC_UGOLVLAdj', 'CLC_UGOLVLHAWP', 'CLC_UGOLVL', 'CLC_UGSLAdj', 'CLC_UGSLHAWP', 'CLC_UGSL', 'CLC_UGOLSLAdj', 'CLC_UGOLSLHAWP', 'CLC_UGOLSL', 'CLC_UGBLAdj', 'CLC_UGBLHAWP', 'CLC_UGBL', 'CLC_UGELAdj', 'CLC_UGELHAWP', 'CLC_UGEL', 'CLC_UGSPLAdj', 'CLC_UGSPLHAWP', 'CLC_UGSPL', 'CLC_UGPLAdj', 'CLC_UGPLHAWP', 'CLC_UGPL', 'CLC_UGMLAdj', 'CLC_UGMLHAWP', 'CLC_UGML', 'CLC_UGULAdj', 'CLC_UGULHAWP', 'CLC_UGUL', 'CLC_UGSLWAdj', 'CLC_UGSLWHAWP', 'CLC_UGSLW', 'CLC_UGNLAdj', 'CLC_UGNLHAWP', 'CLC_UGNL', 'UGOBClc'], 'number'],
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
        $query = UgLeaveCredits::find()->joinWith(['employeeList']);

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
            'LEC_UGVLAdj' => $this->LEC_UGVLAdj,
            'LEC_UGVLHAWP' => $this->LEC_UGVLHAWP,
            'LEC_UGVL' => $this->LEC_UGVL,
            'LEC_UGOLVLAdj' => $this->LEC_UGOLVLAdj,
            'LEC_UGOLVLHAWP' => $this->LEC_UGOLVLHAWP,
            'LEC_UGOLVL' => $this->LEC_UGOLVL,
            'LEC_UGSLAdj' => $this->LEC_UGSLAdj,
            'LEC_UGSLHAWP' => $this->LEC_UGSLHAWP,
            'LEC_UGSL' => $this->LEC_UGSL,
            'LEC_UGOLSLAdj' => $this->LEC_UGOLSLAdj,
            'LEC_UGOLSLHAWP' => $this->LEC_UGOLSLHAWP,
            'LEC_UGOLSL' => $this->LEC_UGOLSL,
            'LEC_UGBLAdj' => $this->LEC_UGBLAdj,
            'LEC_UGBLHAWP' => $this->LEC_UGBLHAWP,
            'LEC_UGBL' => $this->LEC_UGBL,
            'LEC_UGELAdj' => $this->LEC_UGELAdj,
            'LEC_UGELHAWP' => $this->LEC_UGELHAWP,
            'LEC_UGEL' => $this->LEC_UGEL,
            'LEC_UGSPLAdj' => $this->LEC_UGSPLAdj,
            'LEC_UGSPLHAWP' => $this->LEC_UGSPLHAWP,
            'LEC_UGSPL' => $this->LEC_UGSPL,
            'LEC_UGPLAdj' => $this->LEC_UGPLAdj,
            'LEC_UGPLHAWP' => $this->LEC_UGPLHAWP,
            'LEC_UGPL' => $this->LEC_UGPL,
            'LEC_UGMLAdj' => $this->LEC_UGMLAdj,
            'LEC_UGMLHAWP' => $this->LEC_UGMLHAWP,
            'LEC_UGML' => $this->LEC_UGML,
            'LEC_UGULAdj' => $this->LEC_UGULAdj,
            'LEC_UGULHAWP' => $this->LEC_UGULHAWP,
            'LEC_UGUL' => $this->LEC_UGUL,
            'LEC_UGSLWAdj' => $this->LEC_UGSLWAdj,
            'LEC_UGSLWHAWP' => $this->LEC_UGSLWHAWP,
            'LEC_UGSLW' => $this->LEC_UGSLW,
            'LEC_UGNLAdj' => $this->LEC_UGNLAdj,
            'LEC_UGNLHAWP' => $this->LEC_UGNLHAWP,
            'LEC_UGNL' => $this->LEC_UGNL,
            'UGOBLec' => $this->UGOBLec,
            'LAB_UGVLAdj' => $this->LAB_UGVLAdj,
            'LAB_UGVLHAWP' => $this->LAB_UGVLHAWP,
            'LAB_UGVL' => $this->LAB_UGVL,
            'LAB_UGOLVLAdj' => $this->LAB_UGOLVLAdj,
            'LAB_UGOLVLHAWP' => $this->LAB_UGOLVLHAWP,
            'LAB_UGOLVL' => $this->LAB_UGOLVL,
            'LAB_UGSLAdj' => $this->LAB_UGSLAdj,
            'LAB_UGSLHAWP' => $this->LAB_UGSLHAWP,
            'LAB_UGSL' => $this->LAB_UGSL,
            'LAB_UGOLSLAdj' => $this->LAB_UGOLSLAdj,
            'LAB_UGOLSLHAWP' => $this->LAB_UGOLSLHAWP,
            'LAB_UGOLSL' => $this->LAB_UGOLSL,
            'LAB_UGBLAdj' => $this->LAB_UGBLAdj,
            'LAB_UGBLHAWP' => $this->LAB_UGBLHAWP,
            'LAB_UGBL' => $this->LAB_UGBL,
            'LAB_UGELAdj' => $this->LAB_UGELAdj,
            'LAB_UGELHAWP' => $this->LAB_UGELHAWP,
            'LAB_UGEL' => $this->LAB_UGEL,
            'LAB_UGSPLAdj' => $this->LAB_UGSPLAdj,
            'LAB_UGSPLHAWP' => $this->LAB_UGSPLHAWP,
            'LAB_UGSPL' => $this->LAB_UGSPL,
            'LAB_UGPLAdj' => $this->LAB_UGPLAdj,
            'LAB_UGPLHAWP' => $this->LAB_UGPLHAWP,
            'LAB_UGPL' => $this->LAB_UGPL,
            'LAB_UGMLAdj' => $this->LAB_UGMLAdj,
            'LAB_UGMLHAWP' => $this->LAB_UGMLHAWP,
            'LAB_UGML' => $this->LAB_UGML,
            'LAB_UGULAdj' => $this->LAB_UGULAdj,
            'LAB_UGULHAWP' => $this->LAB_UGULHAWP,
            'LAB_UGUL' => $this->LAB_UGUL,
            'LAB_UGSLWAdj' => $this->LAB_UGSLWAdj,
            'LAB_UGSLWHAWP' => $this->LAB_UGSLWHAWP,
            'LAB_UGSLW' => $this->LAB_UGSLW,
            'LAB_UGNLAdj' => $this->LAB_UGNLAdj,
            'LAB_UGNLHAWP' => $this->LAB_UGNLHAWP,
            'LAB_UGNL' => $this->LAB_UGNL,
            'UGOBLab' => $this->UGOBLab,
            'CLC_UGVLAdj' => $this->CLC_UGVLAdj,
            'CLC_UGVLHAWP' => $this->CLC_UGVLHAWP,
            'CLC_UGVL' => $this->CLC_UGVL,
            'CLC_UGOLVLAdj' => $this->CLC_UGOLVLAdj,
            'CLC_UGOLVLHAWP' => $this->CLC_UGOLVLHAWP,
            'CLC_UGOLVL' => $this->CLC_UGOLVL,
            'CLC_UGSLAdj' => $this->CLC_UGSLAdj,
            'CLC_UGSLHAWP' => $this->CLC_UGSLHAWP,
            'CLC_UGSL' => $this->CLC_UGSL,
            'CLC_UGOLSLAdj' => $this->CLC_UGOLSLAdj,
            'CLC_UGOLSLHAWP' => $this->CLC_UGOLSLHAWP,
            'CLC_UGOLSL' => $this->CLC_UGOLSL,
            'CLC_UGBLAdj' => $this->CLC_UGBLAdj,
            'CLC_UGBLHAWP' => $this->CLC_UGBLHAWP,
            'CLC_UGBL' => $this->CLC_UGBL,
            'CLC_UGELAdj' => $this->CLC_UGELAdj,
            'CLC_UGELHAWP' => $this->CLC_UGELHAWP,
            'CLC_UGEL' => $this->CLC_UGEL,
            'CLC_UGSPLAdj' => $this->CLC_UGSPLAdj,
            'CLC_UGSPLHAWP' => $this->CLC_UGSPLHAWP,
            'CLC_UGSPL' => $this->CLC_UGSPL,
            'CLC_UGPLAdj' => $this->CLC_UGPLAdj,
            'CLC_UGPLHAWP' => $this->CLC_UGPLHAWP,
            'CLC_UGPL' => $this->CLC_UGPL,
            'CLC_UGMLAdj' => $this->CLC_UGMLAdj,
            'CLC_UGMLHAWP' => $this->CLC_UGMLHAWP,
            'CLC_UGML' => $this->CLC_UGML,
            'CLC_UGULAdj' => $this->CLC_UGULAdj,
            'CLC_UGULHAWP' => $this->CLC_UGULHAWP,
            'CLC_UGUL' => $this->CLC_UGUL,
            'CLC_UGSLWAdj' => $this->CLC_UGSLWAdj,
            'CLC_UGSLWHAWP' => $this->CLC_UGSLWHAWP,
            'CLC_UGSLW' => $this->CLC_UGSLW,
            'CLC_UGNLAdj' => $this->CLC_UGNLAdj,
            'CLC_UGNLHAWP' => $this->CLC_UGNLHAWP,
            'CLC_UGNL' => $this->CLC_UGNL,
            'UGOBClc' => $this->UGOBClc,

        ]);

        $query->andFilterWhere(['like', 'SH03_UGLEAVECREDITS.EmpID', $this->EmpID])
            ->andFilterWhere(['like', 'SH03_UGLEAVECREDITS.PrdID', $this->PrdID])
            ->andFilterWhere(['like', 'LEC_UGVLRem', $this->LEC_UGVLRem])
            ->andFilterWhere(['like', 'LEC_UGOLVLRem', $this->LEC_UGOLVLRem])
            ->andFilterWhere(['like', 'LEC_UGSLRem', $this->LEC_UGSLRem])
            ->andFilterWhere(['like', 'LEC_UGOLSLRem', $this->LEC_UGOLSLRem])
            ->andFilterWhere(['like', 'LEC_UGBLRem', $this->LEC_UGBLRem])
            ->andFilterWhere(['like', 'LEC_UGELRem', $this->LEC_UGELRem])
            ->andFilterWhere(['like', 'LEC_UGSPLRem', $this->LEC_UGSPLRem])
            ->andFilterWhere(['like', 'LEC_UGPLRem', $this->LEC_UGPLRem])
            ->andFilterWhere(['like', 'LEC_UGMLRem', $this->LEC_UGMLRem])
            ->andFilterWhere(['like', 'LEC_UGULRem', $this->LEC_UGULRem])
            ->andFilterWhere(['like', 'LEC_UGSLWRem', $this->LEC_UGSLWRem])
            ->andFilterWhere(['like', 'LEC_UGNLRem', $this->LEC_UGNLRem])
            ->andFilterWhere(['like', 'UGOBLecRem', $this->UGOBLecRem])
            ->andFilterWhere(['like', 'LAB_UGVLRem', $this->LAB_UGVLRem])
            ->andFilterWhere(['like', 'LAB_UGOLVLRem', $this->LAB_UGOLVLRem])
            ->andFilterWhere(['like', 'LAB_UGSLRem', $this->LAB_UGSLRem])
            ->andFilterWhere(['like', 'LAB_UGOLSLRem', $this->LAB_UGOLSLRem])
            ->andFilterWhere(['like', 'LAB_UGBLRem', $this->LAB_UGBLRem])
            ->andFilterWhere(['like', 'LAB_UGELRem', $this->LAB_UGELRem])
            ->andFilterWhere(['like', 'LAB_UGSPLRem', $this->LAB_UGSPLRem])
            ->andFilterWhere(['like', 'LAB_UGPLRem', $this->LAB_UGPLRem])
            ->andFilterWhere(['like', 'LAB_UGMLRem', $this->LAB_UGMLRem])
            ->andFilterWhere(['like', 'LAB_UGULRem', $this->LAB_UGULRem])
            ->andFilterWhere(['like', 'LAB_UGSLWRem', $this->LAB_UGSLWRem])
            ->andFilterWhere(['like', 'LAB_UGNLRem', $this->LAB_UGNLRem])
            ->andFilterWhere(['like', 'UGOBLabRem', $this->UGOBLabRem])
            ->andFilterWhere(['like', 'CLC_UGVLRem', $this->CLC_UGVLRem])
            ->andFilterWhere(['like', 'CLC_UGOLVLRem', $this->CLC_UGOLVLRem])
            ->andFilterWhere(['like', 'CLC_UGSLRem', $this->CLC_UGSLRem])
            ->andFilterWhere(['like', 'CLC_UGOLSLRem', $this->CLC_UGOLSLRem])
            ->andFilterWhere(['like', 'CLC_UGBLRem', $this->CLC_UGBLRem])
            ->andFilterWhere(['like', 'CLC_UGELRem', $this->CLC_UGELRem])
            ->andFilterWhere(['like', 'CLC_UGSPLRem', $this->CLC_UGSPLRem])
            ->andFilterWhere(['like', 'CLC_UGPLRem', $this->CLC_UGPLRem])
            ->andFilterWhere(['like', 'CLC_UGMLRem', $this->CLC_UGMLRem])
            ->andFilterWhere(['like', 'CLC_UGULRem', $this->CLC_UGULRem])
            ->andFilterWhere(['like', 'CLC_UGSLWRem', $this->CLC_UGSLWRem])
            ->andFilterWhere(['like', 'CLC_UGNLRem', $this->CLC_UGNLRem])
            ->andFilterWhere(['like', 'UGOBClcRem', $this->UGOBClcRem])
            ->andFilterWhere(['like', 'campus', $this->campus])
            ->andFilterWhere(['like', 'FName', $this->fname])
            ->andFilterWhere(['like', 'LName', $this->lname])
            ->andFilterWhere(['like', 'SchoolCollege', $this->schoolCollege])
            ->andFilterWhere(['like', 'Department', $this->department]);

        return $dataProvider;
    }
}
