<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PayrollPayPeriodListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Payroll Pay Period Lists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payroll-pay-period-list-index">

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

            'PrdID',
            'decription',
            [
                'attribute'=>'status',
                'filter'=>$searchModel->getStatusList(),
                'value'=>function ($data){
                    return $data->getStatusName();
                }
            
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
