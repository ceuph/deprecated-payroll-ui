<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\GsLeaveCredits */

$this->title = 'Update Grad-School Leave Credits: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Gs Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="gs-leave-credits-update">

 <?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecture<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#uvl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#uovl">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#usl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#uosl">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#ubday">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#uemer">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#usolo">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#upat">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#umat">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#uunion">Union Leave</a></li>
                <li><a data-toggle="tab" href="#uspecial">Special Leave</a></li>
                <li><a data-toggle="tab" href="#unuptial">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#uofficial">Official Business Leave</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laboratory<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#ulvl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#ulovl">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#ulsl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#ulosl">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#ulbday">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#ulemer">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#ulsolo">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#ulpat">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#ulmat">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#ulunion">Union Leave</a></li>
                <li><a data-toggle="tab" href="#ulspecial">Special Leave</a></li>
                <li><a data-toggle="tab" href="#ulnuptial">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#ulofficial">Official Business Leave</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clinic<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#uclvl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#uclovl">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#uclsl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#uclosl">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#uclbday">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#uclemer">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#uclsolo">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#uclpat">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#uclmat">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#uclunion">Union Leave</a></li>
                <li><a data-toggle="tab" href="#uclspecial">Special Leave</a></li>
                <li><a data-toggle="tab" href="#uclnuptial">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#uclofficial">Official Business Leave</a></li>
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
        <div id="uvl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSVL')->textInput() ?>
            
        </div>
        <div id="uovl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSOLVL')->textInput() ?>
        </div>
        <div id="usl" class="tab-pane fade">
            
            <?= $form->field($model, 'LEC_GSSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSSL')->textInput() ?>
        </div>
        <div id="uosl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSOLSL')->textInput() ?>
            
        </div>
        <div id="ubday" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSBLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSBLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSBL')->textInput() ?>
            
        </div>
        <div id="uemer" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSELAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSELHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSEL')->textInput() ?>
        </div>
        <div id="usolo" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSSPL')->textInput() ?>
            
        </div>
        <div id="upat" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSPL')->textInput() ?>
            
        </div>
        <div id="umat" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSMLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSMLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSML')->textInput() ?>
            
        </div>
        <div id="uunion" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSULAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSULHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSUL')->textInput() ?>
            
        </div>
        <div id="uspecial" class="tab-pane fade">
             <?= $form->field($model, 'LEC_GSSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSSLW')->textInput() ?>
            
        </div>
        <div id="unuptial" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSNLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSNLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LEC_GSNL')->textInput() ?>
            
        </div>
        <div id="uofficial" class="tab-pane fade">
            <?= $form->field($model, 'GSOBLec')->textInput() ?>

            <?= $form->field($model, 'GSOBLecRem')->textarea(['rows' => 4]) ?>
        </div>

        <div id="ulvl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSVL')->textInput() ?>
            

        </div>
        <div id="ulovl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSOLVL')->textInput() ?>

        </div>
        <div id="ulsl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSSL')->textInput() ?>
            

        </div>
        <div id="ulosl" class="tab-pane fade">
             <?= $form->field($model, 'LAB_GSOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSOLSL')->textInput() ?>

        </div>
        <div id="ulbday" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSBLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSBLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSBL')->textInput() ?>
            

        </div>
        <div id="ulemer" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSELAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSELHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSEL')->textInput() ?>
        </div>
        <div id="ulsolo" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSSPL')->textInput() ?>

        </div>
        <div id="ulpat" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSPL')->textInput() ?>
        </div>
        <div id="ulmat" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSMLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSMLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSML')->textInput() ?>
        </div>
        <div id="ulunion" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSULAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSULHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSUL')->textInput() ?>
        </div>
        <div id="ulspecial" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSSLW')->textInput() ?>

        </div>
        <div id="ulnuptial" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSNLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSNLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LAB_GSNL')->textInput() ?>
            

        </div>
        <div id="ulofficial" class="tab-pane fade">
            <?= $form->field($model, 'GSOBLab')->textInput() ?>

            <?= $form->field($model, 'GSOBLabRem')->textarea(['rows' => 4]) ?>
            

        </div>
        <div id="uclvl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSVL')->textInput() ?>
            

        </div>
        <div id="uclovl" class="tab-pane fade">

            <?= $form->field($model, 'CLC_GSOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLVLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSOLVL')->textInput() ?>

        </div>
        <div id="uclsl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSSL')->textInput() ?>

        </div>
        <div id="uclosl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLSLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSOLSL')->textInput() ?>
            

        </div>
        <div id="uclbday" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSBLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSBLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSBLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSBL')->textInput() ?>
            

        </div>
        <div id="uclemer" class="tab-pane fade">

            <?= $form->field($model, 'CLC_GSELAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSELHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSEL')->textInput() ?>
            

        </div>
        <div id="uclsolo" class="tab-pane fade">

             <?= $form->field($model, 'CLC_GSSPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSSPL')->textInput() ?>
            

        </div>
        <div id="uclpat" class="tab-pane fade">

            <?= $form->field($model, 'CLC_GSPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSPL')->textInput() ?>
            

        </div>
        <div id="uclmat" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSMLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSMLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSMLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSML')->textInput() ?>

        </div>
        <div id="uclunion" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSULAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSULHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSUL')->textInput() ?>
            

        </div>
        <div id="uclspecial" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSSLWAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSSLW')->textInput() ?>

           

        </div>
        <div id="uclnuptial" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSNLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSNLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSNLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'CLC_GSNL')->textInput() ?>
            

        </div>
        <div id="uclofficial" class="tab-pane fade">
            <?= $form->field($model, 'GSOBClc')->textInput() ?>

            <?= $form->field($model, 'GSOBClcRem')->textarea(['rows' => 4]) ?>
            

        </div>
    </div>
            
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
