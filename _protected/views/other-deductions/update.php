<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */

$this->title = 'Update Other Deductions: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Other Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="other-deductions-update">

    <?php $form = ActiveForm::begin(); ?>


    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>


        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Deductions<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Fawuo">Fawu</a></li>
                <li><a data-toggle="tab" href="#Pag-ibigo">Pag-ibig</a></li>
                <li><a data-toggle="tab" href="#Coopo">Coop</a></li>
                <li><a data-toggle="tab" href="#Tuitiono">Tuition</a></li>
                <li><a data-toggle="tab" href="#Touro">Tour</a></li>
                <li><a data-toggle="tab" href="#Alumnio">Alumni Ticket</a></li>
                <li><a data-toggle="tab" href="#Parkingo">Parking Fee</a></li>
                <li><a data-toggle="tab" href="#Graduationo">Graduation Expense</a></li>
                <li><a data-toggle="tab" href="#Togao">Toga</a></li>
                <li><a data-toggle="tab" href="#Studento">Student Uniform</a></li>
                <li><a data-toggle="tab" href="#Vaccineo">Vaccine</a></li>
                <li><a data-toggle="tab" href="#Othero">Other Deduction</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adjustments<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Witholdingo">Witholding Tax</a></li>
                <li><a data-toggle="tab" href="#HDMFo">HDMF</a></li>
                <li><a data-toggle="tab" href="#Philhealtho">Philhealth</a></li>
                <li><a data-toggle="tab" href="#SSSo">SSS</a></li>
 
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Overpayment<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Basico">Basic</a></li>
                <li><a data-toggle="tab" href="#EFAo">EFA</a></li>
                <li><a data-toggle="tab" href="#COLAo">COLA</a></li>
                <li><a data-toggle="tab" href="#Christmaso">Bonus Christmas</a></li>
                <li><a data-toggle="tab" href="#Mido">Bonus Mid Year</a></li>
                <li><a data-toggle="tab" href="#Thirteeno">Thirteen Month Pay</a></li>
                <li><a data-toggle="tab" href="#AdIPo">Advance IP</a></li>
                <li><a data-toggle="tab" href="#AlIPo">Allowance IP</a></li>
                <li><a data-toggle="tab" href="#VLSLo">VL SL</a></li>
 
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
        <div id="Fawuo" class="tab-pane fade">

            <?= $form->field($model, 'FAWU_AF')->textInput() ?>

            <?= $form->field($model, 'FAWU_UD')->textInput() ?>

            <?= $form->field($model, 'FAWU_WF')->textInput() ?>

   
        </div>
        <div id="Pag-ibigo" class="tab-pane fade">
            <?= $form->field($model, 'HDMF_UPG')->textInput() ?>

            <?= $form->field($model, 'HDMF_MPL2')->textInput() ?>

        </div>
        <div id="Coopo" class="tab-pane fade">
            <?= $form->field($model, 'Coop')->textInput() ?>
   

        </div>
        <div id="Tuitiono" class="tab-pane fade">
            <?= $form->field($model, 'Tuition')->textInput() ?>

        </div>
        <div id="Touro" class="tab-pane fade">

            <?= $form->field($model, 'Tour')->textInput() ?>

        </div>
        <div id="Alumnio" class="tab-pane fade">
            <?= $form->field($model, 'AlumniTick')->textInput() ?>

        </div>
        <div id="Parkingo" class="tab-pane fade">
            <?= $form->field($model, 'ParkingFee')->textInput() ?>

        </div>
        <div id="Graduationo" class="tab-pane fade">
            <?= $form->field($model, 'GradExp')->textInput() ?>

        </div>
        <div id="Togao" class="tab-pane fade">
            <?= $form->field($model, 'TogaRent')->textInput() ?>

        </div>
        <div id="Studento" class="tab-pane fade">
            <?= $form->field($model, 'StuUniform')->textInput() ?>

        </div>
        <div id="Vaccineo" class="tab-pane fade">
            <?= $form->field($model, 'Vaccine')->textInput() ?>

        </div>
        <div id="Othero" class="tab-pane fade">
            <?= $form->field($model, 'OtherDeduc')->textInput() ?>

        </div>
        <div id="Witholdingo" class="tab-pane fade">
            <?= $form->field($model, 'AdjWTAX')->textInput() ?>
           

        </div>
        <div id="HDMFo" class="tab-pane fade">
            <?= $form->field($model, 'AdjHDMF')->textInput() ?>
           

        </div>
        <div id="Philhealtho" class="tab-pane fade">
            <?= $form->field($model, 'AdjPHIC')->textInput() ?>
           

        </div>
        <div id="SSSo" class="tab-pane fade">
            <?= $form->field($model, 'AdjSSS')->textInput() ?>
           

        </div>
        <div id="Basico" class="tab-pane fade">
            <?= $form->field($model, 'OPBasic')->textInput() ?>
           

        </div>
        <div id="EFAo" class="tab-pane fade">
            <?= $form->field($model, 'OPEFA')->textInput() ?>
           

        </div>
        <div id="COLAo" class="tab-pane fade">
             <?= $form->field($model, 'OPCOLA')->textInput() ?>
           

        </div>
        <div id="Christmaso" class="tab-pane fade">
            <?= $form->field($model, 'OPBonusXmas')->textInput() ?>
           

        </div>
        <div id="Mido" class="tab-pane fade">
            <?= $form->field($model, 'OPBonusMidYr')->textInput() ?>
           

        </div>
        <div id="Thirteeno" class="tab-pane fade">
            <?= $form->field($model, 'OPTMP')->textInput() ?>
           

        </div>
        <div id="AdIPo" class="tab-pane fade">
            <?= $form->field($model, 'OPAdvIP')->textInput() ?>
           

        </div>
        <div id="AlIPo" class="tab-pane fade">
            <?= $form->field($model, 'OPAllowIP')->textInput() ?>
           

        </div>
        <div id="VLSLo" class="tab-pane fade">
            <?= $form->field($model, 'OPVLSL')->textInput() ?>
           

        </div>

        
    </div>
            
    </div>
          
    </div>                           


    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
