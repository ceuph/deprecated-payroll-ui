<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollSchoolCollege */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="payroll-school-college-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_college_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
