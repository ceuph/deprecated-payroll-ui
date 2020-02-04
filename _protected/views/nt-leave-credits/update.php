<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\NtLeaveCredits */

$this->title = 'Update Non-Teaching Leave Credits: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Nt Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nt-leave-credits-update">

    <?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Non_Teaching<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#vlu">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#slu">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#bdayu">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#emeru">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#solou">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#patu">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#matu">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#unionu">Union Leave</a></li>
                <li><a data-toggle="tab" href="#specialu">Special Leave</a></li>
                <li><a data-toggle="tab" href="#nuptialu">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#officialu">Official Business Leave</a></li>
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
        <div id="vlu" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_VLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_VLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_VLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_VL')->textInput() ?>

        </div>
        <div id="slu" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_SLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_SL')->textInput() ?>

        </div>
        <div id="bdayu" class="tab-pane fade">
             <?= $form->field($model, 'LC_NT_BLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_BLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_BLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_BL')->textInput() ?>
        </div>
        <div id="emeru" class="tab-pane fade">

            <?= $form->field($model, 'LC_NT_ELAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ELDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_EL')->textInput() ?>

        </div>
        <div id="solou" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_SPLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SPLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_SPL')->textInput() ?>
        </div>
        <div id="patu" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_PLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_PLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_PLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_PL')->textInput() ?>
   
        </div>
        <div id="matu" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_MLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_MLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_MLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_ML')->textInput() ?>

        </div>
        <div id="unionu" class="tab-pane fade">

             <?= $form->field($model, 'LC_NT_ULAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ULDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_UL')->textInput() ?>
   
        </div>
        <div id="specialu" class="tab-pane fade">

            <?= $form->field($model, 'LC_NT_SLWAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLWDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_SLW')->textInput() ?>
   
        </div>
        <div id="nuptialu" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_NLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_NLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_NLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_NL')->textInput() ?>

        </div>
        <div id="officialu" class="tab-pane fade">
            <?= $form->field($model, 'NT_OB')->textInput() ?>

            <?= $form->field($model, 'NT_OBRem')->textarea(['rows' => 4]) ?>

        </div>

    </div>
            
    </div>
          
    </div>                           


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
