<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

use app\models\PayrollCampus;
use app\models\PayrollSchoolCollege;
use app\models\PayrollDepartment;

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

    <?= $form->field($model, 'Gender')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'Position')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'MainJob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Campus')->dropDownList(ArrayHelper::map(PayrollCampus::find()->all(), 'campus_name', 'campus_name'),['prompt'=>'Select Campus', 'class'=>'form-control']) ?>

    <?= $form->field($model, 'SchoolCollege')->dropDownList(ArrayHelper::map(PayrollSchoolCollege::find()->all(), 'school_college_name', 'school_college_name'),['prompt'=>'Select School/College', 'class'=>'form-control']) ?>

    <?= $form->field($model, 'Department')->dropDownList(ArrayHelper::map(PayrollDepartment::find()->all(), 'department_name', 'department_name'),['prompt'=>'Select Department', 'class'=>'form-control']) ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
