<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\TcDtr */

$this->title = 'Update Teaching Dtr: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tc Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tc-dtr-update">

     <?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Under-Grad<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#llecu">Lecture</a></li>
                <li><a data-toggle="tab" href="#llabu">Laboratory</a></li>
                <li><a data-toggle="tab" href="#lcliu">Clinic</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">GradShool<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#glecu">Lecture</a></li>
                <li><a data-toggle="tab" href="#glabu">Laboratory</a></li>
                <li><a data-toggle="tab" href="#gcliu">Clinic</a></li>
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
        <div id="llecu" class="tab-pane fade">
            
            <?= $form->field($model, 'UG_HAbsntLec')->textInput() ?>

            <?= $form->field($model, 'UG_HAbsntLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HCMTLec')->textInput() ?>

            <?= $form->field($model, 'UG_HCMTLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HLWOPLec')->textInput() ?>

            <?= $form->field($model, 'UG_HLWOPLecRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="llabu" class="tab-pane fade">

             <?= $form->field($model, 'UG_HAbsntLab')->textInput() ?>

            <?= $form->field($model, 'UG_HAbsntLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HCMTLab')->textInput() ?>

            <?= $form->field($model, 'UG_HCMTLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HLWOPLab')->textInput() ?>

            <?= $form->field($model, 'UG_HLWOPLabRem')->textInput(['maxlength' => true]) ?>
 
        </div>
        <div id="lcliu" class="tab-pane fade">

            <?= $form->field($model, 'UG_HAbsntClc')->textInput() ?>

            <?= $form->field($model, 'UG_HAbsntClcRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HCMTClc')->textInput() ?>

            <?= $form->field($model, 'UG_HCMTClcRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HLWOPClc')->textInput() ?>

            <?= $form->field($model, 'UG_HLWOPClcRem')->textInput(['maxlength' => true]) ?>


        </div>
        <div id="glecu" class="tab-pane fade">

            <?= $form->field($model, 'GS_HAbsntLec')->textInput() ?>

            <?= $form->field($model, 'GS_HAbsntLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HCMTLec')->textInput() ?>

            <?= $form->field($model, 'GS_HCMTLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HLWOPLec')->textInput() ?>

            <?= $form->field($model, 'GS_HLWOPLecRem')->textInput(['maxlength' => true]) ?>

        </div>
        <div id="glabu" class="tab-pane fade">

            <?= $form->field($model, 'GS_HAbsntLab')->textInput() ?>

            <?= $form->field($model, 'GS_HAbsntLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HCMTLab')->textInput() ?>

            <?= $form->field($model, 'GS_HCMTLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HLWOPLab')->textInput() ?>

            <?= $form->field($model, 'GS_HLWOPLabRem')->textInput(['maxlength' => true]) ?>

        </div>
        <div id="gcliu" class="tab-pane fade">

            <?= $form->field($model, 'GS_HAbsntClc')->textInput() ?>

            <?= $form->field($model, 'GS_HAbsntClcRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HCMTClc')->textInput() ?>

            <?= $form->field($model, 'GS_HCMTClcRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HLWOPClc')->textInput() ?>

            <?= $form->field($model, 'GS_HLWOPClcRem')->textInput(['maxlength' => true]) ?>

        </div>

    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
