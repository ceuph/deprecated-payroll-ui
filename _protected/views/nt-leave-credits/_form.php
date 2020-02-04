<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

$url = Url::to(['payroll-employee-list/find']);

/* @var $this yii\web\View */
/* @var $model app\models\NtLeaveCredits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nt-leave-credits-form">

    <?php $form = ActiveForm::begin(['id' => 'ntFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['nt-leave-credits/ajax-validate'])]); ?>

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
        <div id="vl" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_VLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_VLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_VLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_VL')->textInput() ?>

        </div>
        <div id="sl" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_SLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_SL')->textInput() ?>

        </div>
        <div id="bday" class="tab-pane fade">
             <?= $form->field($model, 'LC_NT_BLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_BLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_BLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_BL')->textInput() ?>
        </div>
        <div id="emer" class="tab-pane fade">

            <?= $form->field($model, 'LC_NT_ELAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ELDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ELRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_EL')->textInput() ?>

        </div>
        <div id="solo" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_SPLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SPLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SPLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_SPL')->textInput() ?>
        </div>
        <div id="pat" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_PLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_PLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_PLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_PL')->textInput() ?>
   
        </div>
        <div id="mat" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_MLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_MLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_MLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_ML')->textInput() ?>

        </div>
        <div id="union" class="tab-pane fade">

             <?= $form->field($model, 'LC_NT_ULAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ULDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_ULRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_UL')->textInput() ?>
   
        </div>
        <div id="special" class="tab-pane fade">

            <?= $form->field($model, 'LC_NT_SLWAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLWDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_SLWRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_SLW')->textInput() ?>
   
        </div>
        <div id="nuptial" class="tab-pane fade">
            <?= $form->field($model, 'LC_NT_NLAdj')->textInput() ?>

            <?= $form->field($model, 'LC_NT_NLDAWP')->textInput() ?>

            <?= $form->field($model, 'LC_NT_NLRem')->textarea(['rows' => 4]) ?>

            <?= $form->field($model, 'LC_NT_NL')->textInput() ?>

        </div>
        <div id="official" class="tab-pane fade">
            <?= $form->field($model, 'NT_OB')->textInput() ?>

            <?= $form->field($model, 'NT_OBRem')->textarea(['rows' => 4]) ?>

        </div>

    </div>
            
    </div>
          
    </div>                           


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'ntBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['nt-leave-credits/create']);
$script = <<< JS

$("#ntBtn").click(function(e){
    var formData = new FormData($("#ntFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#ntFrm').trigger('reset');
                $.pjax.reload({container:'#ntTbl', async: false});
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