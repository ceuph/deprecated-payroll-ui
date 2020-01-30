<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollPayPeriodList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payroll-pay-period-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'decription')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($model->getSTatusList()) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
