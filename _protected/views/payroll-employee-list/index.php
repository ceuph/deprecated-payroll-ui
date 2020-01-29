<?php

use yii\helpers\Html;
use yii\grid\GridView;

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
            'SchoolCollege',
            //'Gender',
            'Department',
            //'Position',
            'Campus',
            //'MainJob',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
