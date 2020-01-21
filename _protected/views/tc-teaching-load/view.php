<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */

$this->title = $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tc Teaching Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tc-teaching-load-view">

    <h1>Employee # <?= Html::encode($model->EmpID) ?></h1>
    <h1>Period <?= Html::encode($model->PrdID) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID], [
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
            'EmpID',
            'UG_LoadLec',
            'UG_LoadLab',
            'UG_LoadClc',
            'GS_LoadLec',
            'GS_LoadLab',
            'GS_LoadClc',
            'TC_SemMonth',
        ],
    ]) ?>

</div>
