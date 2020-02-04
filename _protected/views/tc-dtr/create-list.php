<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\TcDtr */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="tc-dtr-form">

<h1><?= $employee->EmpID." - ".$employee->LName. ", ".$employee->FName ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'tcdtrFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['tc-dtr/ajax-validate-list','EmpID'=>$employee->EmpID])]); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Under-Grad<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#llec">Lecture</a></li>
                <li><a data-toggle="tab" href="#llab">Laboratory</a></li>
                <li><a data-toggle="tab" href="#lcli">Clinic</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">GradShool<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#glec">Lecture</a></li>
                <li><a data-toggle="tab" href="#glab">Laboratory</a></li>
                <li><a data-toggle="tab" href="#gcli">Clinic</a></li>
            </ul>
        </li>


    </ul>
    <div class="row">
        <div class="col-sm-5">
        <div id="home" class="tab-pane fade in active">
        <?= $form->field($model, 'PrdID')->dropDownList(ArrayHelper::map(PayrollPayPeriodList::find()->where(['status'=>PayrollPayPeriodList::STATUS_YES])->orderBy("PrdID DESC")->all(), 'PrdID', 'decription')) ?>
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="llec" class="tab-pane fade">
            
            <?= $form->field($model, 'UG_HAbsntLec')->textInput() ?>

            <?= $form->field($model, 'UG_HAbsntLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HCMTLec')->textInput() ?>

            <?= $form->field($model, 'UG_HCMTLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HLWOPLec')->textInput() ?>

            <?= $form->field($model, 'UG_HLWOPLecRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="llab" class="tab-pane fade">

             <?= $form->field($model, 'UG_HAbsntLab')->textInput() ?>

            <?= $form->field($model, 'UG_HAbsntLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HCMTLab')->textInput() ?>

            <?= $form->field($model, 'UG_HCMTLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HLWOPLab')->textInput() ?>

            <?= $form->field($model, 'UG_HLWOPLabRem')->textInput(['maxlength' => true]) ?>
 
        </div>
        <div id="lcli" class="tab-pane fade">

            <?= $form->field($model, 'UG_HAbsntClc')->textInput() ?>

            <?= $form->field($model, 'UG_HAbsntClcRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HCMTClc')->textInput() ?>

            <?= $form->field($model, 'UG_HCMTClcRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'UG_HLWOPClc')->textInput() ?>

            <?= $form->field($model, 'UG_HLWOPClcRem')->textInput(['maxlength' => true]) ?>


        </div>
        <div id="glec" class="tab-pane fade">

            <?= $form->field($model, 'GS_HAbsntLec')->textInput() ?>

            <?= $form->field($model, 'GS_HAbsntLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HCMTLec')->textInput() ?>

            <?= $form->field($model, 'GS_HCMTLecRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HLWOPLec')->textInput() ?>

            <?= $form->field($model, 'GS_HLWOPLecRem')->textInput(['maxlength' => true]) ?>

        </div>
        <div id="glab" class="tab-pane fade">

            <?= $form->field($model, 'GS_HAbsntLab')->textInput() ?>

            <?= $form->field($model, 'GS_HAbsntLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HCMTLab')->textInput() ?>

            <?= $form->field($model, 'GS_HCMTLabRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'GS_HLWOPLab')->textInput() ?>

            <?= $form->field($model, 'GS_HLWOPLabRem')->textInput(['maxlength' => true]) ?>

        </div>
        <div id="gcli" class="tab-pane fade">

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
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'tcdtrBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['tc-dtr/create-list','EmpID'=>$employee->EmpID]);
$script = <<< JS

$("#tcdtrBtn").click(function(e){
    var formData = new FormData($("#tcdtrFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $("#tcdtr-modal").modal('hide');
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