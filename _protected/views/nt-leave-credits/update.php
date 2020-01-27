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
                <li><a data-toggle="tab" href="#vl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#sl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#bday">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#emer">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#solo">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#pat">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#mat">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#union">Union Leave</a></li>
                <li><a data-toggle="tab" href="#special">Special Leave</a></li>
                <li><a data-toggle="tab" href="#nuptial">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#official">Official Business Leave</a></li>
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
        <div id="vl" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_VLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_VLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_VLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_VL')->textInput() ?>

        </div>
        <div id="sl" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_SLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_SL')->textInput() ?>

        </div>
        <div id="bday" class="tab-pane fade">
             <?= $form->field($model, 'LC_NT_BLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_BLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_BLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_BL')->textInput() ?>
        </div>
        <div id="emer" class="tab-pane fade">

            <?= $form->field($model, 'LC_NT_ELAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ELDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_EL')->textInput() ?>

        </div>
        <div id="solo" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_SPLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SPLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_SPL')->textInput() ?>
        </div>
        <div id="pat" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_PLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_PLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_PLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_PL')->textInput() ?>
   
        </div>
        <div id="mat" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_MLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_MLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_MLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_ML')->textInput() ?>

        </div>
        <div id="union" class="tab-pane fade">

             <?= $form->field($model, 'LC_NT_ULAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ULDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_UL')->textInput() ?>
   
        </div>
        <div id="special" class="tab-pane fade">

            <?= $form->field($model, 'LC_NT_SLWAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLWDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_SLW')->textInput() ?>
   
        </div>
        <div id="nuptial" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_NLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_NLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_NLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LC_NT_NL')->textInput() ?>

        </div>
        <div id="official" class="tab-pane fade">
            <?= $form->field($model, 'NT_OB')->textInput() ?>

            <?= $form->field($model, 'NT_OBRem')->textInput(['maxlength' => true]) ?>

        </div>

    </div>
            
    </div>
          
    </div>                           


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
