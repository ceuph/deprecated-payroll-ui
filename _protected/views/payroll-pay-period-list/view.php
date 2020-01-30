<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollPayPeriodList */

$this->title = $model->PrdID;
$this->params['breadcrumbs'][] = ['label' => 'Payroll Pay Period Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="payroll-pay-period-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->PrdID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->PrdID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'PrdID',
            'decription',
            [ 'label' => 'Is Active', 
                'format' =>'raw',
                'value' => function ($model) { 
                    return $model->getStatusName(); 
                }, 
            ],
        ],
    ]) ?>

</div>
