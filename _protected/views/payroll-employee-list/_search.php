<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PayrollEmployeeListSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payroll-employee-list-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'EmpID') ?>

    <?= $form->field($model, 'LName') ?>

    <?= $form->field($model, 'FName') ?>

    <?= $form->field($model, 'MName') ?>

    <?= $form->field($model, 'MI') ?>

    <?php // echo $form->field($model, 'SchoolCollege') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <?php // echo $form->field($model, 'Department') ?>

    <?php // echo $form->field($model, 'Position') ?>

    <?php // echo $form->field($model, 'Campus') ?>

    <?php // echo $form->field($model, 'MainJob') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
