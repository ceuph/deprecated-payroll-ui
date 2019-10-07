<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\LeaveApplication */

$this->title = $model->date_to;
$this->params['breadcrumbs'][] = ['label' => 'Leave Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="leave-application-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'date_to' => $model->date_to, 'EmpID' => $model->EmpID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'date_to' => $model->date_to, 'EmpID' => $model->EmpID], [
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
            'EmpID',
            'type',
            'type_leave',
            'date_from',
            'date_to',
            'date_created',
            'date_updated',
            'date_approve_head',
            'date_approve_hrd',
            'status',
        ],
    ]) ?>

</div>
