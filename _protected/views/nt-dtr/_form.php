<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\NtDtr */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="nt-dtr-form">

    <?php $form = ActiveForm::begin(['id' => 'ddFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['nt-dtr/ajax-validate'])]); ?>


    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Per-Day<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#pabs">Absent</a></li>
                <li><a data-toggle="tab" href="#plea">Leave</a></li>
            </ul>
        </li>
        <li><a data-toggle="tab" href="#late">Late-Undertime</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Over-Time<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#rholiday">Regular Holiday</a></li>
                <li><a data-toggle="tab" href="#sholiday">Special Holiday</a></li>
                <li><a data-toggle="tab" href="#lholiday">Legal Holiday</a></li>
                <li><a data-toggle="tab" href="#holidays">Holiday Sunday</a></li>

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
                    employee.EmpID || "") + " " + (employee.LName || "")  + ", " + (
                    employee.FName || ""); }'),
                'templateSelection' => new JsExpression('function (employee) { return (
                    employee.EmpID || "") + " " + (employee.LName || "")  + ", " + (
                    employee.FName || ""); }'),

            ],
        ])->label('Employee ID'); ?>

        <?= $form->field($model, 'PrdID')->dropDownList(ArrayHelper::map(PayrollPayPeriodList::find()->where(['status'=>PayrollPayPeriodList::STATUS_YES])->orderBy("PrdID DESC")->all(), 'PrdID', 'decription')) ?>
        </div>
        </div>
        <div class="col-sm-7">
      <div class="tab-content">
        <div id="pabs" class="tab-pane fade">
            <?= $form->field($model, 'NT_DAbsnt')->textInput() ?>

            <?= $form->field($model, 'NT_DAbsntRem')->textInput(['maxlength' => true]) ?>
   
        </div>
        <div id="plea" class="tab-pane fade">
            <?= $form->field($model, 'NT_DLWOP')->textInput() ?>

            <?= $form->field($model, 'NT_DLWOPRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="late" class="tab-pane fade">
            <?= $form->field($model, 'NT_HLate')->textInput() ?>

            <?= $form->field($model, 'NT_HUdt')->textInput() ?>

        </div>
        <div id="rholiday" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHReg')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDReg')->textInput() ?>

            <?= $form->field($model, 'NT_OTHRegExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDRegExc')->textInput() ?>
        </div>
        <div id="sholiday" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHSpcl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDSpcl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHSpclExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDSpclExc')->textInput() ?>
        </div>
        <div id="lholiday" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHLgl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDLgl')->textInput() ?>

            <?= $form->field($model, 'NT_OTHLglExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDLglExc')->textInput() ?>
        </div>
        <div id="holidays" class="tab-pane fade">
            <?= $form->field($model, 'NT_OTHHolSun')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDHolSun')->textInput() ?>

            <?= $form->field($model, 'NT_OTHHolSunExc')->textInput() ?>

            <?= $form->field($model, 'NT_OTHNDHolExc')->textInput() ?>
        </div>
        
    </div>
            
    </div>
          
    </div>                           

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'ddBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['nt-dtr/create']);
$script = <<< JS

$("#ddBtn").click(function(e){
    var formData = new FormData($("#ddFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#ddFrm').trigger('reset');
                $.pjax.reload({container:'#ntdtrTbl', async: false});
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