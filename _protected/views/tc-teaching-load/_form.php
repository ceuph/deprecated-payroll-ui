<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tc-teaching-load-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UG_LoadLec')->textInput() ?>

    <?= $form->field($model, 'UG_LoadLab')->textInput() ?>

    <?= $form->field($model, 'UG_LoadClc')->textInput() ?>

    <?= $form->field($model, 'GS_LoadLec')->textInput() ?>

    <?= $form->field($model, 'GS_LoadLab')->textInput() ?>

    <?= $form->field($model, 'GS_LoadClc')->textInput() ?>

    <?= $form->field($model, 'TC_SemMonth')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
