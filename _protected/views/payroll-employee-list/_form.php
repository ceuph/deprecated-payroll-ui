<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollEmployeeList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payroll-employee-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SchoolCollege')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Department')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Campus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MainJob')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
