<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="other-deductions-form">

    <?php $form = ActiveForm::begin(['id' => 'odeducFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['other-deductions/ajax-validate'])]); ?>


    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>


        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other Deductions<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Fawu">Fawu</a></li>
                <li><a data-toggle="tab" href="#Pag-ibig">Pag-ibig</a></li>
                <li><a data-toggle="tab" href="#Coop">Coop</a></li>
                <li><a data-toggle="tab" href="#Tuition">Tuition</a></li>
                <li><a data-toggle="tab" href="#Tour">Tour</a></li>
                <li><a data-toggle="tab" href="#Alumni">Alumni Ticket</a></li>
                <li><a data-toggle="tab" href="#Parking">Parking Fee</a></li>
                <li><a data-toggle="tab" href="#Graduation">Graduation Expense</a></li>
                <li><a data-toggle="tab" href="#Toga">Toga</a></li>
                <li><a data-toggle="tab" href="#Student">Student Uniform</a></li>
                <li><a data-toggle="tab" href="#Vaccine">Vaccine</a></li>
                <li><a data-toggle="tab" href="#Other">Other Deduction</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Adjustments<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Witholding">Witholding Tax</a></li>
                <li><a data-toggle="tab" href="#HDMF">HDMF</a></li>
                <li><a data-toggle="tab" href="#Philhealth">Philhealth</a></li>
                <li><a data-toggle="tab" href="#SSS">SSS</a></li>
 
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Overpayment<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Basic">Basic</a></li>
                <li><a data-toggle="tab" href="#EFA">EFA</a></li>
                <li><a data-toggle="tab" href="#COLA">COLA</a></li>
                <li><a data-toggle="tab" href="#Christmas">Bonus Christmas</a></li>
                <li><a data-toggle="tab" href="#Mid">Bonus Mid Year</a></li>
                <li><a data-toggle="tab" href="#Thirteen">Thirteen Month Pay</a></li>
                <li><a data-toggle="tab" href="#AdIP">Advance IP</a></li>
                <li><a data-toggle="tab" href="#AlIP">Allowance IP</a></li>
                <li><a data-toggle="tab" href="#VLSL">VL SL</a></li>
 
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
        <div id="Fawu" class="tab-pane fade">

            <?= $form->field($model, 'FAWU_AF')->textInput() ?>

            <?= $form->field($model, 'FAWU_UD')->textInput() ?>

            <?= $form->field($model, 'FAWU_WF')->textInput() ?>

   
        </div>
        <div id="Pag-ibig" class="tab-pane fade">
            <?= $form->field($model, 'HDMF_UPG')->textInput() ?>

            <?= $form->field($model, 'HDMF_MPL2')->textInput() ?>

        </div>
        <div id="Coop" class="tab-pane fade">
            <?= $form->field($model, 'Coop')->textInput() ?>
   

        </div>
        <div id="Tuition" class="tab-pane fade">
            <?= $form->field($model, 'Tuition')->textInput() ?>

        </div>
        <div id="Tour" class="tab-pane fade">

            <?= $form->field($model, 'Tour')->textInput() ?>

        </div>
        <div id="Alumni" class="tab-pane fade">
            <?= $form->field($model, 'AlumniTick')->textInput() ?>

        </div>
        <div id="Parking" class="tab-pane fade">
            <?= $form->field($model, 'ParkingFee')->textInput() ?>

        </div>
        <div id="Graduation" class="tab-pane fade">
            <?= $form->field($model, 'GradExp')->textInput() ?>

        </div>
        <div id="Toga" class="tab-pane fade">
            <?= $form->field($model, 'TogaRent')->textInput() ?>

        </div>
        <div id="Student" class="tab-pane fade">
            <?= $form->field($model, 'StuUniform')->textInput() ?>

        </div>
        <div id="Vaccine" class="tab-pane fade">
            <?= $form->field($model, 'Vaccine')->textInput() ?>

        </div>
        <div id="Other" class="tab-pane fade">
            <?= $form->field($model, 'OtherDeduc')->textInput() ?>

        </div>
        <div id="Witholding" class="tab-pane fade">
            <?= $form->field($model, 'AdjWTAX')->textInput() ?>
           

        </div>
        <div id="HDMF" class="tab-pane fade">
            <?= $form->field($model, 'AdjHDMF')->textInput() ?>
           

        </div>
        <div id="Philhealth" class="tab-pane fade">
            <?= $form->field($model, 'AdjPHIC')->textInput() ?>
           

        </div>
        <div id="SSS" class="tab-pane fade">
            <?= $form->field($model, 'AdjSSS')->textInput() ?>
           

        </div>
        <div id="Basic" class="tab-pane fade">
            <?= $form->field($model, 'OPBasic')->textInput() ?>
           

        </div>
        <div id="EFA" class="tab-pane fade">
            <?= $form->field($model, 'OPEFA')->textInput() ?>
           

        </div>
        <div id="COLA" class="tab-pane fade">
             <?= $form->field($model, 'OPCOLA')->textInput() ?>
           

        </div>
        <div id="Christmas" class="tab-pane fade">
            <?= $form->field($model, 'OPBonusXmas')->textInput() ?>
           

        </div>
        <div id="Mid" class="tab-pane fade">
            <?= $form->field($model, 'OPBonusMidYr')->textInput() ?>
           

        </div>
        <div id="Thirteen" class="tab-pane fade">
            <?= $form->field($model, 'OPTMP')->textInput() ?>
           

        </div>
        <div id="AdIP" class="tab-pane fade">
            <?= $form->field($model, 'OPAdvIP')->textInput() ?>
           

        </div>
        <div id="AlIP" class="tab-pane fade">
            <?= $form->field($model, 'OPAllowIP')->textInput() ?>
           

        </div>
        <div id="VLSL" class="tab-pane fade">
            <?= $form->field($model, 'OPVLSL')->textInput() ?>
           

        </div>

        
    </div>
            
    </div>
          
    </div>                           


    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'odeducBtn']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['other-deductions/create']);
$script = <<< JS

$("#odeducBtn").click(function(e){
    var formData = new FormData($("#odeducFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#odeducFrm').trigger('reset');
                $.pjax.reload({container:'#odeducTbl', async: false});
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