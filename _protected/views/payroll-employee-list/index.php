<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;

use app\models\PayrollCampus;
use app\models\PayrollSchoolCollege;
use app\models\PayrollDepartment;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PayrollEmployeeListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payroll Employee Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payroll-employee-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EmpID',
            'LName',
            'FName',
            [
                'attribute'=> 'Campus',
                'filter' =>ArrayHelper::map(PayrollCampus::find()->asArray()->all(), 'campus_name', 'campus_name'),
                'value' => function ($data) {
                    return !empty ($data->Campus) ? $data->Campus : '-';
                },
            ],
            [
                'attribute'=> 'SchoolCollege',
                'filter' =>ArrayHelper::map(PayrollSchoolCollege::find()->asArray()->all(), 'school_college_name', 'school_college_name'),
                'value' => function ($data) {
                    return !empty ($data->SchoolCollege) ? $data->SchoolCollege : '-';
                },
            ],

            [
                'attribute'=> 'Department',
                'filter' =>ArrayHelper::map(PayrollDepartment::find()->asArray()->all(), 'department_name', 'department_name'),
                'value' => function ($data) {
                    return !empty ($data->Department) ? $data->Department : '-';
                },
            ],


            ['class' => 'yii\grid\ActionColumn',

            'visibleButtons' => [
                    'delete' => function ($model) {
                        return \Yii::$app->user->can('theCreator');
                    },
                ],
            ],
        ],
    ]); ?>


</div>
