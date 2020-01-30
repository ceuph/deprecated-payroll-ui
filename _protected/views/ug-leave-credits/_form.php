<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\UgLeaveCredits */
/* @var $form yii\widgets\ActiveForm */

$url = Url::to(['payroll-employee-list/find']);
?>

<div class="ug-leave-credits-form">

 <?php $form = ActiveForm::begin(['id' => 'uglFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['ug-leave-credits/ajax-validate'])]); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lecture<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#vl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#ovl">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#sl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#osl">Overload-Sick Leave</a></li>
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
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Laboratory<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#lvl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#lovl">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#lsl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#losl">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#lbday">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#lemer">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#lsolo">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#lpat">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#lmat">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#lunion">Union Leave</a></li>
                <li><a data-toggle="tab" href="#lspecial">Special Leave</a></li>
                <li><a data-toggle="tab" href="#lnuptial">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#lofficial">Official Business Leave</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clinic<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#clvl">Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#clovl">Overload-Vacation Leave</a></li>
                <li><a data-toggle="tab" href="#clsl">Sick Leave</a></li>
                <li><a data-toggle="tab" href="#closl">Overload-Sick Leave</a></li>
                <li><a data-toggle="tab" href="#clbday">Birthday Leave</a></li>
                <li><a data-toggle="tab" href="#clemer">Emergency Leave</a></li>
                <li><a data-toggle="tab" href="#clsolo">Solo Parent Leave</a></li>
                <li><a data-toggle="tab" href="#clpat">Paternity Leave</a></li>
                <li><a data-toggle="tab" href="#clmat">Maternity Leave</a></li>
                <li><a data-toggle="tab" href="#clunion">Union Leave</a></li>
                <li><a data-toggle="tab" href="#clspecial">Special Leave</a></li>
                <li><a data-toggle="tab" href="#clnuptial">Nuptial Leave</a></li>
                <li><a data-toggle="tab" href="#clofficial">Official Business Leave</a></li>
            </ul>
        </li>  


    </ul>
    <div class="row">
        <div class="col-sm-5">
        <div id="home" class="tab-pane fade in active">
        <?= $form->field($model, 'EmpID')->widget(Select2::classname(), [
            'options' => ['placeholder' => 'Search ...',
                'multiple'=> true,
                'class' => 'form-control'],
            'pluginOptions' => [
                'allowClear' => true,
                'minimumInputLength' => 2,
                'language' => [
                    'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
                ],
                'ajax' => [
                    'url' => $url,
                    'dataType' => 'json',
                   'data' => new JsExpression('function(params) { return {q:params.term}; }')
            
                ],
                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                'templateResult' => new JsExpression('function(employee) { return (
                    employee.EmpID || "") + " " + (employee.text || "")  + ", " + (
                    employee.LName || ""); }'),
                'templateSelection' => new JsExpression('function (employee) { return (
                    employee.EmpID || "") + " " + (employee.text || "")  + ", " + (
                    employee.FName || ""); }'),

            ],
        ])->label('Employee ID'); ?>

            <?= $form->field($model, 'PrdID')->dropDownList(ArrayHelper::map(PayrollPayPeriodList::find()->where(['status'=>PayrollPayPeriodList::STATUS_YES])->all(), 'PrdID', 'decription'),['prompt'=>'Select Pay Period', 'class'=>'form-control']) ?>
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="vl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGVL')->textInput() ?>
        </div>
        <div id="ovl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGOLVL')->textInput() ?>
        </div>
        <div id="sl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGSL')->textInput() ?>

        </div>
        <div id="osl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGOLSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGOLSL')->textInput() ?>
        </div>
        <div id="bday" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGBLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGBLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGBL')->textInput() ?>
        </div>
        <div id="emer" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGELAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGELHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGEL')->textInput() ?>
        </div>
        <div id="solo" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGSPL')->textInput() ?>
        </div>
        <div id="pat" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGPL')->textInput() ?>
        </div>
        <div id="mat" class="tab-pane fade">
             <?= $form->field($model, 'LEC_UGMLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGMLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGML')->textInput() ?>
        </div>
        <div id="union" class="tab-pane fade">
             <?= $form->field($model, 'LEC_UGULAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGULHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGUL')->textInput() ?>
        </div>
        <div id="special" class="tab-pane fade">
             <?= $form->field($model, 'LEC_UGSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGSLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGSLW')->textInput() ?>
        </div>
        <div id="nuptial" class="tab-pane fade">
            <?= $form->field($model, 'LEC_UGNLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_UGNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_UGNLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_UGNL')->textInput() ?>
        </div>
        <div id="official" class="tab-pane fade">
            <?= $form->field($model, 'UGOBLec')->textInput() ?>

            <?= $form->field($model, 'UGOBLecRem')->textInput(['maxlength' => true]) ?>
        </div>

        <div id="lvl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGVL')->textInput() ?>

        </div>
        <div id="lovl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGOLVL')->textInput() ?>

        </div>
        <div id="lsl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGSL')->textInput() ?>

        </div>
        <div id="losl" class="tab-pane fade">
             <?= $form->field($model, 'LAB_UGOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGOLSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGOLSL')->textInput() ?>

        </div>
        <div id="lbday" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGBLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGBLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGBL')->textInput() ?>


        </div>
        <div id="lemer" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGELAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGELHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGEL')->textInput() ?>

        </div>
        <div id="lsolo" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGSPL')->textInput() ?>

        </div>
        <div id="lpat" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGPL')->textInput() ?>

        </div>
        <div id="lmat" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGMLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGMLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGML')->textInput() ?>

        </div>
        <div id="lunion" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGULAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGULHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGUL')->textInput() ?>

        </div>
        <div id="lspecial" class="tab-pane fade">
             <?= $form->field($model, 'LAB_UGSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGSLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGSLW')->textInput() ?>

        </div>
        <div id="lnuptial" class="tab-pane fade">
            <?= $form->field($model, 'LAB_UGNLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_UGNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_UGNLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_UGNL')->textInput() ?>

        </div>
        <div id="lofficial" class="tab-pane fade">
            <?= $form->field($model, 'UGOBLab')->textInput() ?>

            <?= $form->field($model, 'UGOBLabRem')->textInput(['maxlength' => true]) ?>

        </div>
        <div id="clvl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGVL')->textInput() ?>

        </div>
        <div id="clovl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGOLVL')->textInput() ?>

        </div>
        <div id="clsl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGSL')->textInput() ?>


        </div>
        <div id="closl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGOLSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGOLSL')->textInput() ?>

        </div>
        <div id="clbday" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGBLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGBLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGBLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGBL')->textInput() ?>

        </div>
        <div id="clemer" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGELAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGELHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGEL')->textInput() ?>

        </div>
        <div id="clsolo" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGSPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGSPL')->textInput() ?>

        </div>
        <div id="clpat" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGPL')->textInput() ?>

        </div>
        <div id="clmat" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGMLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGMLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGMLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGML')->textInput() ?>

        </div>
        <div id="clunion" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGULAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGULHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGUL')->textInput() ?>

        </div>
        <div id="clspecial" class="tab-pane fade">

            <?= $form->field($model, 'CLC_UGSLWAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGSLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGSLW')->textInput() ?>

        </div>
        <div id="clnuptial" class="tab-pane fade">
            <?= $form->field($model, 'CLC_UGNLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_UGNLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_UGNLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_UGNL')->textInput() ?>

        </div>
        <div id="clofficial" class="tab-pane fade">
            <?= $form->field($model, 'UGOBClc')->textInput() ?>

            <?= $form->field($model, 'UGOBClcRem')->textInput(['maxlength' => true]) ?>

        </div>
    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'uglBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>


<?php
$url = Url::to(['ug-leave-credits/create']);
$script = <<< JS

$("#uglBtn").click(function(e){
    var formData = new FormData($("#uglFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#uglFrm').trigger('reset');
                $.pjax.reload({container:'#uglTbl', async: false});
            }
        },

        error: function(){
            alert("ERROR at PHP side!!");
        },


        //Options to tell jQuery not to process data or worry about content-type.
        cache: false,
        contentType: false,
        processData: false
    });
    return false;
});


JS;
$this->registerJs($script);