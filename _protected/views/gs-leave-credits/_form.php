<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\Url;
use kartik\select2\Select2;
use yii\web\JsExpression;
/* @var $this yii\web\View */
/* @var $model app\models\GsLeaveCredits */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="gs-leave-credits-form">

     <?php $form = ActiveForm::begin(['id' => 'gslFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['gs-leave-credits/ajax-validate'])]); ?>

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
            <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>
            
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="vl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSVL')->textInput() ?>
            
        </div>
        <div id="ovl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSOLVL')->textInput() ?>
        </div>
        <div id="sl" class="tab-pane fade">
            
            <?= $form->field($model, 'LEC_GSSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSSL')->textInput() ?>
        </div>
        <div id="osl" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSOLSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSOLSL')->textInput() ?>
            
        </div>
        <div id="bday" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSBLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSBLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSBL')->textInput() ?>
            
        </div>
        <div id="emer" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSELAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSELHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSEL')->textInput() ?>
        </div>
        <div id="solo" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSSPL')->textInput() ?>
            
        </div>
        <div id="pat" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSPL')->textInput() ?>
            
        </div>
        <div id="mat" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSMLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSMLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSML')->textInput() ?>
            
        </div>
        <div id="union" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSULAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSULHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSUL')->textInput() ?>
            
        </div>
        <div id="special" class="tab-pane fade">
             <?= $form->field($model, 'LEC_GSSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSSLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSSLW')->textInput() ?>
            
        </div>
        <div id="nuptial" class="tab-pane fade">
            <?= $form->field($model, 'LEC_GSNLAdj')->textInput() ?>

            <?= $form->field($model, 'LEC_GSNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LEC_GSNLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LEC_GSNL')->textInput() ?>
            
        </div>
        <div id="official" class="tab-pane fade">
            <?= $form->field($model, 'GSOBLec')->textInput() ?>

            <?= $form->field($model, 'GSOBLecRem')->textInput(['maxlength' => true]) ?>
        </div>

        <div id="lvl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSVL')->textInput() ?>
            

        </div>
        <div id="lovl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSOLVL')->textInput() ?>

        </div>
        <div id="lsl" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSSL')->textInput() ?>
            

        </div>
        <div id="losl" class="tab-pane fade">
             <?= $form->field($model, 'LAB_GSOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSOLSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSOLSL')->textInput() ?>

        </div>
        <div id="lbday" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSBLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSBLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSBLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSBL')->textInput() ?>
            

        </div>
        <div id="lemer" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSELAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSELHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSEL')->textInput() ?>
        </div>
        <div id="lsolo" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSSPL')->textInput() ?>

        </div>
        <div id="lpat" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSPLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSPL')->textInput() ?>
        </div>
        <div id="lmat" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSMLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSMLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSMLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSML')->textInput() ?>
        </div>
        <div id="lunion" class="tab-pane fade">
            
            <?= $form->field($model, 'LAB_GSULAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSULHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSUL')->textInput() ?>
        </div>
        <div id="lspecial" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSSLWAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSSLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSSLW')->textInput() ?>

        </div>
        <div id="lnuptial" class="tab-pane fade">
            <?= $form->field($model, 'LAB_GSNLAdj')->textInput() ?>

            <?= $form->field($model, 'LAB_GSNLHAWP')->textInput() ?>

            <?= $form->field($model, 'LAB_GSNLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'LAB_GSNL')->textInput() ?>
            

        </div>
        <div id="lofficial" class="tab-pane fade">
            <?= $form->field($model, 'GSOBLab')->textInput() ?>

            <?= $form->field($model, 'GSOBLabRem')->textInput(['maxlength' => true]) ?>
            

        </div>
        <div id="clvl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSVL')->textInput() ?>
            

        </div>
        <div id="clovl" class="tab-pane fade">

            <?= $form->field($model, 'CLC_GSOLVLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLVLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLVLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSOLVL')->textInput() ?>

        </div>
        <div id="clsl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSSL')->textInput() ?>

        </div>
        <div id="closl" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSOLSLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLSLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSOLSLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSOLSL')->textInput() ?>
            

        </div>
        <div id="clbday" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSBLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSBLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSBLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSBL')->textInput() ?>
            

        </div>
        <div id="clemer" class="tab-pane fade">

            <?= $form->field($model, 'CLC_GSELAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSELHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSELRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSEL')->textInput() ?>
            

        </div>
        <div id="clsolo" class="tab-pane fade">

             <?= $form->field($model, 'CLC_GSSPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSSPL')->textInput() ?>
            

        </div>
        <div id="clpat" class="tab-pane fade">

            <?= $form->field($model, 'CLC_GSPLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSPLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSPLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSPL')->textInput() ?>
            

        </div>
        <div id="clmat" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSMLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSMLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSMLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSML')->textInput() ?>

        </div>
        <div id="clunion" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSULAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSULHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSULRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSUL')->textInput() ?>
            

        </div>
        <div id="clspecial" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSSLWAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLWHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSSLWRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSSLW')->textInput() ?>

           

        </div>
        <div id="clnuptial" class="tab-pane fade">
            <?= $form->field($model, 'CLC_GSNLAdj')->textInput() ?>

            <?= $form->field($model, 'CLC_GSNLHAWP')->textInput() ?>

            <?= $form->field($model, 'CLC_GSNLRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'CLC_GSNL')->textInput() ?>
            

        </div>
        <div id="clofficial" class="tab-pane fade">
            <?= $form->field($model, 'GSOBClc')->textInput() ?>

            <?= $form->field($model, 'GSOBClcRem')->textInput(['maxlength' => true]) ?>
            

        </div>
    </div>
            
    </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'gslBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['gs-leave-credits/create']);
$script = <<< JS

$("#gslBtn").click(function(e){
    var formData = new FormData($("#gslFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#gslFrm').trigger('reset');
                $.pjax.reload({container:'#gslTbl', async: false});
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