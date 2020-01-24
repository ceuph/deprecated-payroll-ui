<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\TcTeachingLoadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tc-teaching-load-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'PrdID') ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'UG_LoadLec') ?>

    <?= $form->field($model, 'UG_LoadLab') ?>

    <?= $form->field($model, 'UG_LoadClc') ?>

    <?php // echo $form->field($model, 'GS_LoadLec') ?>

    <?php // echo $form->field($model, 'GS_LoadLab') ?>

    <?php // echo $form->field($model, 'GS_LoadClc') ?>

    <?php // echo $form->field($model, 'TC_SemMonth') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
