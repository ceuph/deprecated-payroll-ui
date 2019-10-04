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


    <?= $form->field($model, "type_leave")->dropDownList([
        LeaveApplication::TYPE_LEAVE => 'Leave',
        LeaveApplication::TYPE_ABSENCE => 'Absent'
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
            
        ]
    ]);
    ?>

    <?php 
        echo $form->field($model, 'date_to')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Date and Time'],
        'pluginOptions' => [
            'autoclose' => true,
            'pickerPosition' => 'top-right',
    
        ]
    ]);
    ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
