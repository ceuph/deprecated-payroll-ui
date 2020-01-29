<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\NtDtr */

$this->title = 'Update Non-Teaching Dtr: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Nt Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nt-dtr-update">

       <?php $form = ActiveForm::begin(); ?>


    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Per-Day<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#pabsl">Absent</a></li>
                <li><a data-toggle="tab" href="#pleal">Leave</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#latel">Late-Undertime</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Over-Time<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#rholidayl">Regular Holiday</a></li>
                <li><a data-toggle="tab" href="#sholidayl">Special Holiday</a></li>
                <li><a data-toggle="tab" href="#lholidayl">Legal Holiday</a></li>
                <li><a data-toggle="tab" href="#holidaysl">Holiday Sunday</a></li>

            </ul>
        </li>

    </ul>
    <div class="row">
        <div class="col-sm-5">
        <div id="home" class="tab-pane fade in active">
   			<?= $form->field($model, 'EmpID')->textInput(['maxlength' => true,'disabled' => true]) ?>
            <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true,'disabled' => true]) ?>
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="pabsl" class="tab-pane fade">
            <?= $form->field($model, 'NT_DAbsnt')->textInput() ?>

            <?= $form->field($model, 'NT_DAbsntRem')->textInput(['maxlength' => true]) ?>
   
        </div>
        <div id="pleal" class="tab-pane fade">
            <?= $form->field($model, 'NT_DLWOP')->textInput() ?>

            <?= $form->field($model, 'NT_DLWOPRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="latel" class="tab-pane fade">
            <?= $form->field($model, 'NT_HLate')->textInput() ?>

            <?= $form->field($model, 'NT_HUdt')->textInput() ?>

        </div>
        <div id="rholidayl" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHReg')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDReg')->textInput() ?>

            <?= $form->field($model, 'NT_OTHRegExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDRegExc')->textInput() ?>
        </div>
        <div id="sholidayl" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHSpcl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDSpcl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHSpclExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDSpclExc')->textInput() ?>
        </div>
        <div id="lholidayl" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHLgl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDLgl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHLglExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDLglExc')->textInput() ?>
        </div>
        <div id="holidaysl" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHHolSun')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDHolSun')->textInput() ?>

            <?= $form->field($model, 'NT_OTHHolSunExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDHolExc')->textInput() ?>
        </div>
        
    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
