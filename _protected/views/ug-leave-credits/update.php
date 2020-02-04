<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\UgLeaveCredits */

$this->title = 'Update Under-Grad Leave Credits: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Ug Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ug-leave-credits-update">

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecture<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#vlu">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#ovlu">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#slu">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#oslu">Overload-Sick Leave</a></li>
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
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laboratory<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#lvlu">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#lovlu">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#lslu">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#loslu">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#lbdayu">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#lemeru">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#lsolou">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#lpatu">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#lmatu">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#lunionu">Union Leave</a></li>
                <li><a data-toggle="tab" href="#lspecialu">Special Leave</a></li>
                <li><a data-toggle="tab" href="#lnuptialu">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#lofficialu">Official Business Leave</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clinic<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#clvlu">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#clovlu">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#clslu">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#closlu">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#clbdayu">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#clemeru">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#clsolou">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#clpatu">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#clmatu">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#clunionu">Union Leave</a></li>
                <li><a data-toggle="tab" href="#clspecialu">Special Leave</a></li>
                <li><a data-toggle="tab" href="#clnuptialu">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#clofficialu">Official Business Leave</a></li>
            </ul>
        </li>  


    </ul>
 <?php $form = ActiveForm::begin(); ?>
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
            <?= $form->field($model, 'LEC_UGVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGVL')->textInput() ?>
        </div>
        <div id="ovlu" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGOLVL')->textInput() ?>
        </div>
        <div id="slu" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGSL')->textInput() ?>

        </div>
        <div id="oslu" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGOLSL')->textInput() ?>
        </div>
        <div id="bdayu" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGBLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGBLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGBL')->textInput() ?>
        </div>
        <div id="emeru" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGELAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGELHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGEL')->textInput() ?>
        </div>
        <div id="solou" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGSPL')->textInput() ?>
        </div>
        <div id="patu" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGPL')->textInput() ?>
        </div>
        <div id="matu" class="tab-pane fade">
             <?= $form->field($model, 'LEC_UGMLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGMLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGML')->textInput() ?>
        </div>
        <div id="unionu" class="tab-pane fade">
             <?= $form->field($model, 'LEC_UGULAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGULHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGUL')->textInput() ?>
        </div>
        <div id="specialu" class="tab-pane fade">
             <?= $form->field($model, 'LEC_UGSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGSLW')->textInput() ?>
        </div>
        <div id="nuptialu" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGNLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGNLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_UGNL')->textInput() ?>
        </div>
        <div id="officialu" class="tab-pane fade">
            <?= $form->field($model, 'UGOBLec')->textInput() ?>

            <?= $form->field($model, 'UGOBLecRem')->textarea(['rows' => 4]) ?>
        </div>

        <div id="lvlu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGVL')->textInput() ?>

        </div>
        <div id="lovlu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGOLVL')->textInput() ?>

        </div>
        <div id="lslu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGSL')->textInput() ?>

        </div>
        <div id="loslu" class="tab-pane fade">
             <?= $form->field($model, 'LAB_UGOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGOLSL')->textInput() ?>

        </div>
        <div id="lbdayu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGBLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGBLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGBL')->textInput() ?>


        </div>
        <div id="lemeru" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGELAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGELHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGEL')->textInput() ?>

        </div>
        <div id="lsolou" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGSPL')->textInput() ?>

        </div>
        <div id="lpatu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGPL')->textInput() ?>

        </div>
        <div id="lmatu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGMLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGMLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGML')->textInput() ?>

        </div>
        <div id="lunionu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGULAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGULHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGUL')->textInput() ?>

        </div>
        <div id="lspecialu" class="tab-pane fade">
             <?= $form->field($model, 'LAB_UGSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGSLW')->textInput() ?>

        </div>
        <div id="lnuptialu" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGNLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGNLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_UGNL')->textInput() ?>

        </div>
        <div id="lofficialu" class="tab-pane fade">
            <?= $form->field($model, 'UGOBLab')->textInput() ?>

            <?= $form->field($model, 'UGOBLabRem')->textarea(['rows' => 4]) ?>

        </div>
        <div id="clvlu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGVL')->textInput() ?>

        </div>
        <div id="clovlu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGOLVL')->textInput() ?>

        </div>
        <div id="clslu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGSL')->textInput() ?>


        </div>
        <div id="closlu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGOLSL')->textInput() ?>

        </div>
        <div id="clbdayu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGBLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGBLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGBLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGBL')->textInput() ?>

        </div>
        <div id="clemeru" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGELAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGELHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGEL')->textInput() ?>

        </div>
        <div id="clsolou" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGSPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGSPL')->textInput() ?>

        </div>
        <div id="clpatu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGPL')->textInput() ?>

        </div>
        <div id="clmatu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGMLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGMLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGMLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGML')->textInput() ?>

        </div>
        <div id="clunionu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGULAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGULHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGUL')->textInput() ?>

        </div>
        <div id="clspecialu" class="tab-pane fade">

            <?= $form->field($model, 'CLC_UGSLWAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGSLW')->textInput() ?>

        </div>
        <div id="clnuptialu" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGNLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGNLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGNLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_UGNL')->textInput() ?>

        </div>
        <div id="clofficialu" class="tab-pane fade">
            <?= $form->field($model, 'UGOBClc')->textInput() ?>

            <?= $form->field($model, 'UGOBClcRem')->textarea(['rows' => 4]) ?>

        </div>
    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>