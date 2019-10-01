<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TcDtr */

$this->title = $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tc Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tc-dtr-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'EmpID',
            'PrdID',
            'UG_HAbsntLec',
            'UG_HAbsntLecRem',
            'UG_HCMTLec',
            'UG_HCMTLecRem',
            'UG_HLWOPLec',
            'UG_HLWOPLecRem',
            'UG_HAbsntLab',
            'UG_HAbsntLabRem',
            'UG_HCMTLab',
            'UG_HCMTLabRem',
            'UG_HLWOPLab',
            'UG_HLWOPLabRem',
            'UG_HAbsntClc',
            'UG_HAbsntClcRem',
            'UG_HCMTClc',
            'UG_HCMTClcRem',
            'UG_HLWOPClc',
            'UG_HLWOPClcRem',
            'GS_HAbsntLec',
            'GS_HAbsntLecRem',
            'GS_HCMTLec',
            'GS_HCMTLecRem',
            'GS_HLWOPLec',
            'GS_HLWOPLecRem',
            'GS_HAbsntLab',
            'GS_HAbsntLabRem',
            'GS_HCMTLab',
            'GS_HCMTLabRem',
            'GS_HLWOPLab',
            'GS_HLWOPLabRem',
            'GS_HAbsntClc',
            'GS_HAbsntClcRem',
            'GS_HCMTClc',
            'GS_HCMTClcRem',
            'GS_HLWOPClc',
            'GS_HLWOPClcRem',
        ],
    ]) ?>

</div>
