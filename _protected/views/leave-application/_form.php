<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

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


    <?= $form->field($model, "type_leave")->dropDownList(ArrayHelper::map(TypeLeave::find()->where(['type'=>1])->all(), 'id', 'description'),['prompt'=>'Select Leave', 'class'=>'form-control'
                ]) ?>

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
