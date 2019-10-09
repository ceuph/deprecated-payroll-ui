<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\LeaveApplication;

use yii\helpers\ArrayHelper;
use app\models\TypeLeave;

use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\LeaveApplication */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leave-application-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, "type")->dropDownList([
        LeaveApplication::TYPE_LEAVE => 'Leave',
        LeaveApplication::TYPE_ABSENCE => 'Absent'
    ],['prompt'=>'Select Type', 'class'=>'form-control']) ?>

    <?= $form->field($model, "type_leave")->dropDownList([
        LeaveApplication::TYPE_LEAVE_VACATION => 'Vacation',
        LeaveApplication::TYPE_LEAVE_SICK => 'Sick',
        LeaveApplication::TYPE_LEAVE_BIRTHDAY => 'Birthday',
        LeaveApplication::TYPE_LEAVE_EMERGENCY => 'Emergency',
        LeaveApplication::TYPE_LEAVE_SOLO_PARENT => 'Solo Parent',
        LeaveApplication::TYPE_LEAVE_PATERNITY => 'Paternity',
        LeaveApplication::TYPE_LEAVE_MATERNITY => 'Maternity',
        LeaveApplication::TYPE_LEAVE_UNION => 'Union',
        LeaveApplication::TYPE_LEAVE_SPECIAL_WOMEN => 'Special Women',
        LeaveApplication::TYPE_LEAVE_NUPTIAL => 'Nuptial',
        LeaveApplication::TYPE_LEAVE_OFFICIAL_BUSINESS => 'Official Business',
    ],['prompt'=>'Select Type', 'class'=>'form-control']) ?>

    <?= $form->field($model, "status")->dropDownList([
        LeaveApplication::STATUS_PENDING => 'Pending',
        LeaveApplication::STATUS_APPROVE_HEAD => 'Approved by Head',
        LeaveApplication::STATUS_DISAPPROVE_HEAD => 'Disapproved by Head',
        LeaveApplication::STATUS_APPROVE_HRD => 'Approved by HRD',
        LeaveApplication::STATUS_DISAPPROVE_HRD => 'Disapproved by HRD'
    ],['class'=>'form-control']) ?>

    <?php 
        echo $form->field($model, 'date_from')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Date and Time'],
        'pluginOptions' => [
            'autoclose' => true,
            'pickerPosition' => 'top-right',
            'daysOfWeekDisabled' => [0],
            
        ]
    ]);
    ?>

    <?php 
        echo $form->field($model, 'date_to')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Date and Time'],
        'pluginOptions' => [
            'autoclose' => true,
            'pickerPosition' => 'top-right',
            'daysOfWeekDisabled' => [0],
    
        ]
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
