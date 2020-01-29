<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */

$this->title = 'Update Tc Teaching Load: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tc Teaching Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tc-teaching-load-update">

       <?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>
        <li><a data-toggle="tab" href="#ugl">Under-Grad</a></li>
        <li><a data-toggle="tab" href="#gsl">GradSchool</a></li>
        <li><a data-toggle="tab" href="#seml">Sem Month</a></li>


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
        <div id="ugl" class="tab-pane fade">
            <?= $form->field($model, 'UG_LoadLec')->textInput() ?>

            <?= $form->field($model, 'UG_LoadLab')->textInput() ?>

            <?= $form->field($model, 'UG_LoadClc')->textInput() ?>
   
        </div>
        <div id="gsl" class="tab-pane fade">
            <?= $form->field($model, 'GS_LoadLec')->textInput() ?>

            <?= $form->field($model, 'GS_LoadLab')->textInput() ?>

            <?= $form->field($model, 'GS_LoadClc')->textInput() ?>
        </div>
        <div id="seml" class="tab-pane fade">
            <?= $form->field($model, 'TC_SemMonth')->textInput() ?>

        </div>
        
    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
