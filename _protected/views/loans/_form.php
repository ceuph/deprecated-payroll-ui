<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use app\models\PayrollPayPeriodList;

use kartik\select2\Select2;
use yii\web\JsExpression;

/* @var $this yii\web\View */
/* @var $model app\models\Loans */
/* @var $form yii\widgets\ActiveForm */
$url = Url::to(['payroll-employee-list/find']);
?>

<div class="loans-form">

    <?php $form = ActiveForm::begin(['id' => 'loansFrm','enableAjaxValidation' => true,'validationUrl' => Yii::$app->urlManager->createUrl(['loans/ajax-validate'])]); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">SSS<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustments">Adjustment/New Bal.</a></li>
                <li><a data-toggle="tab" href="#Periods">Period Factor</a></li>
                <li><a data-toggle="tab" href="#Handlings">Handling Fee</a></li>
                <li><a data-toggle="tab" href="#Deductions">Deduction</a></li>
                <li><a data-toggle="tab" href="#Calamitys">Calamity</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">HDMF<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmenth">Adjustment/New Bal.</a></li>
                <li><a data-toggle="tab" href="#Periodh">Period Factor</a></li>
                <li><a data-toggle="tab" href="#Handlingh">Handling Fee</a></li>
                <li><a data-toggle="tab" href="#Deductionh">Deduction</a></li>
                <li><a data-toggle="tab" href="#Multih">Multi Purpose</a></li>
                <li><a data-toggle="tab" href="#Calamityh">Calamity</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Over Payment<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentbasic">Basic</a></li>
                <li><a data-toggle="tab" href="#Adjustmentefa">Efa</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcola">Cola</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tax<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentadjust">Adjustment</a></li>
                <li><a data-toggle="tab" href="#Adjustmentsign">Signing Bonus</a></li>               

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alwop<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentalwopc">Cola</a></li>
                <li><a data-toggle="tab" href="#Adjustmentalwope">Efa</a></li>               

            </ul>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(1)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentp">Pag-ibig</a></li>
                <li><a data-toggle="tab" href="#Adjustmentf">Fawu</a></li>
                <li><a data-toggle="tab" href="#HAdjustmentf">Handling fee Fawu</a></li>
                <li><a data-toggle="tab" href="#Adjustmentho">Housing</a></li>
                <li><a data-toggle="tab" href="#PAdjustmentho">Pricipal Housing</a></li>
                <li><a data-toggle="tab" href="#Adjustmentmed">Medical</a></li>
                <li><a data-toggle="tab" href="#Adjustmenttech">Technology</a></li>
                <li><a data-toggle="tab" href="#Adjustmenthos">Hospital</a></li>
                <li><a data-toggle="tab" href="#Adjustmenteme">Emergency</a></li>
                <li><a data-toggle="tab" href="#Adjustmentuni">Unified</a></li>

            </ul>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(2)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentbday">Birthday</a></li>
                <li><a data-toggle="tab" href="#Adjustmenttra">Travel</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpett">Petty Cash</a></li>
                <li><a data-toggle="tab" href="#Adjustmentspe">Special Assistance</a></li>
                <li><a data-toggle="tab" href="#Adjustmentphi">Philam Care</a></li>
                <li><a data-toggle="tab" href="#Adjustmentsav">Savings Deposit</a></li>
                <li><a data-toggle="tab" href="#Adjustmentfix">Fixed Deposit</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpen">Pension Deposit</a></li>
                <li><a data-toggle="tab" href="#Adjustmentsem">Seminar</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcoo">Coop</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(3)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmenttui">Tuition</a></li>
                <li><a data-toggle="tab" href="#Adjustmenttrip">Field Trip</a></li>
                <li><a data-toggle="tab" href="#Adjustmentmpl">CC MP/Love</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcch">Handling CC/Love</a></li>
                <li><a data-toggle="tab" href="#Adjustmenteuusint">Europe/USA (INT)</a></li>
                <li><a data-toggle="tab" href="#Adjustmenteuusprin">Europe/USA (PRIN'L)</a></li>
                <li><a data-toggle="tab" href="#Adjustmentholy">Holy Land Tour</a></li>
                <li><a data-toggle="tab" href="#Adjustmenthk">Hongkong Travel</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpafte">Pafte Study Tour</a></li>
                

            </ul>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(4)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentasia">Asia Pacific Conf.</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpark">Parking Fee</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcomp">Computer</a></li>
                <li><a data-toggle="tab" href="#Adjustmentvacc">Vaccine</a></li>
                

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
        <div id="Adjustments" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSAdj')->textInput() ?>
        </div>
        <div id="Periods" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSPF')->textInput() ?>
        </div>
        <div id="Handlings" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSHF')->textInput() ?>
        </div>
        <div id="Deductions" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_SSS')->textInput() ?>
        </div>
        <div id="Calamitys" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSCAdj')->textInput() ?>

            <?= $form->field($model, 'L_SSSCPF')->textInput() ?>

            <?= $form->field($model, 'L_SSSCHF')->textInput() ?>

            <?= $form->field($model, 'L_SSSCAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_SSSC')->textInput() ?>

        </div>
         <div id="Adjustmenth" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFAdj')->textInput() ?>
        </div>
        <div id="Periodh" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFPF')->textInput() ?>
        </div>
        <div id="Handlingh" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFHF')->textInput() ?>
            
        </div>
        <div id="Deductionh" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HDMF')->textInput() ?>
            
        </div>
        <div id="Multih" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFMPAdj')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMPPF')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMPHF')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMPAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMP')->textInput() ?>
            

        </div>
        <div id="Calamityh" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFCAdj')->textInput() ?>

            <?= $form->field($model, 'L_HDMFCPF')->textInput() ?>

            <?= $form->field($model, 'L_HDMFCHF')->textInput() ?>

            <?= $form->field($model, 'L_HDMFCAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HDMFC')->textInput() ?>
            

        </div>
        <div id="Adjustmentp" class="tab-pane fade">
            <?= $form->field($model, 'L_LOVEMPAdj')->textInput() ?>

            <?= $form->field($model, 'L_LOVEMPPF')->textInput() ?>

            <?= $form->field($model, 'L_LOVEMPHF')->textInput() ?>
            
            <?= $form->field($model, 'L_LOVEMPAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_LOVEMP')->textInput() ?>
           
        </div>
        <div id="Adjustmentf" class="tab-pane fade">
            <?= $form->field($model, 'L_FAWUAdj')->textInput() ?>
         
            <?= $form->field($model, 'L_FAWUPF')->textInput() ?>
        
            <?= $form->field($model, 'L_FAWUHF')->textInput() ?>

            <?= $form->field($model, 'L_FAWUAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_FAWU')->textInput() ?>
            
           
        </div>
        <div id="HAdjustmentf" class="tab-pane fade">
            <?= $form->field($model, 'L_HFFAWUAdj')->textInput() ?>
           
            <?= $form->field($model, 'L_HFFAWUPF')->textInput() ?>

            <?= $form->field($model, 'L_HFFAWUHF')->textInput() ?>

            <?= $form->field($model, 'L_HFFAWUAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HFFAWU')->textInput() ?>
            
        </div>
        <div id="Adjustmentho" class="tab-pane fade">
            <?= $form->field($model, 'L_CEUHousingIntAdj')->textInput() ?>
         
            <?= $form->field($model, 'L_CEUHousingIntPF')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingIntHF')->textInput() ?>
            <?= $form->field($model, 'L_CEUHousingIntAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingInt')->textInput() ?>

        </div>
        <div id="PAdjustmentho" class="tab-pane fade">
            <?= $form->field($model, 'L_CEUHousingPcplAdj')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingPcplPF')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingPcplHF')->textInput() ?>
            
            <?= $form->field($model, 'L_CEUHousingPcplAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingPcpl')->textInput() ?>
  
            
        </div>
        <div id="Adjustmentmed" class="tab-pane fade">
            <?= $form->field($model, 'L_MedicalAdj')->textInput() ?>
 
            <?= $form->field($model, 'L_MedicalPF')->textInput() ?>

            <?= $form->field($model, 'L_MedicalHF')->textInput() ?>

            <?= $form->field($model, 'L_MedicalAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Medical')->textInput() ?>

        </div>
        <div id="Adjustmenttech" class="tab-pane fade">
            <?= $form->field($model, 'L_TechnologyAdj')->textInput() ?>
 
            <?= $form->field($model, 'L_TechnologyPF')->textInput() ?>

            <?= $form->field($model, 'L_TechnologyHF')->textInput() ?>
     
            <?= $form->field($model, 'L_TechnologyAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Technology')->textInput() ?>
           
        </div>
        <div id="Adjustmenthos" class="tab-pane fade">
            <?= $form->field($model, 'L_HospitalAdj')->textInput() ?>

            <?= $form->field($model, 'L_HospitalPF')->textInput() ?>

            <?= $form->field($model, 'L_HospitalHF')->textInput() ?>

            <?= $form->field($model, 'L_HospitalAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Hospital')->textInput() ?>

        </div>
        <div id="Adjustmenteme" class="tab-pane fade">
 
            <?= $form->field($model, 'L_EmergencyAdj')->textInput() ?>


            <?= $form->field($model, 'L_EmergencyPF')->textInput() ?>

            <?= $form->field($model, 'L_EmergencyHF')->textInput() ?>

            <?= $form->field($model, 'L_EmergencyAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Emergency')->textInput() ?>

        </div>
        <div id="Adjustmentuni" class="tab-pane fade">
            <?= $form->field($model, 'L_UnifiedAdj')->textInput() ?>

            <?= $form->field($model, 'L_UnifiedPF')->textInput() ?>

            <?= $form->field($model, 'L_UnifiedHF')->textInput() ?>

            <?= $form->field($model, 'L_UnifiedAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Unified')->textInput() ?>
        </div>
        <div id="Adjustmentbday" class="tab-pane fade">

            <?= $form->field($model, 'L_BDayAdj')->textInput() ?>

            <?= $form->field($model, 'L_BDayPF')->textInput() ?>

            <?= $form->field($model, 'L_BDayHF')->textInput() ?>

            <?= $form->field($model, 'L_BDayAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_BDay')->textInput() ?>
        </div>
        <div id="Adjustmenttra" class="tab-pane fade">
            <?= $form->field($model, 'L_TravelAdj')->textInput() ?>

            <?= $form->field($model, 'L_TravelPF')->textInput() ?>

            <?= $form->field($model, 'L_TravelHF')->textInput() ?>

            <?= $form->field($model, 'L_TravelAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Travel')->textInput() ?>
        </div>
        <div id="Adjustmentpett" class="tab-pane fade">
            <?= $form->field($model, 'L_PettyCashAdj')->textInput() ?>

            <?= $form->field($model, 'L_PettyCashPF')->textInput() ?>

            <?= $form->field($model, 'L_PettyCashHF')->textInput() ?>

            <?= $form->field($model, 'L_PettyCashAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_PettyCash')->textInput() ?>

        </div>
        <div id="Adjustmentspe" class="tab-pane fade">
             <?= $form->field($model, 'L_SpecialAdj')->textInput() ?>

            <?= $form->field($model, 'L_SpecialPF')->textInput() ?>

            <?= $form->field($model, 'L_SpecialHF')->textInput() ?>

            <?= $form->field($model, 'L_SpecialAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Special')->textInput() ?>

        </div>
        <div id="Adjustmentphi" class="tab-pane fade">
            <?= $form->field($model, 'L_PhilamcareAdj')->textInput() ?>

            <?= $form->field($model, 'L_PhilamcarePF')->textInput() ?>

            <?= $form->field($model, 'L_PhilamcareHF')->textInput() ?>

            <?= $form->field($model, 'L_PhilamcareAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Philamcare')->textInput() ?>
        </div>
        <div id="Adjustmentsav" class="tab-pane fade">
            <?= $form->field($model, 'L_SavingsDepAdj')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDepPF')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDepHF')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDepAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDep')->textInput() ?>
        </div>
        <div id="Adjustmentfix" class="tab-pane fade">
            <?= $form->field($model, 'L_FixedDepAdj')->textInput() ?>

            <?= $form->field($model, 'L_FixedDepPF')->textInput() ?>

            <?= $form->field($model, 'L_FixedDepHF')->textInput() ?>

            <?= $form->field($model, 'L_FixedDepAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_FixedDep')->textInput() ?>
        </div>
        <div id="Adjustmentpen" class="tab-pane fade">
            <?= $form->field($model, 'L_PensionDepAdj')->textInput() ?>

            <?= $form->field($model, 'L_PensionDepPF')->textInput() ?>

            <?= $form->field($model, 'L_PensionDepHF')->textInput() ?>

            <?= $form->field($model, 'L_PensionDepAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_PensionDep')->textInput() ?>
        </div>
        <div id="Adjustmentsem" class="tab-pane fade">
        
            <?= $form->field($model, 'L_SeminarAdj')->textInput() ?>

            <?= $form->field($model, 'L_SeminarPF')->textInput() ?>

            <?= $form->field($model, 'L_SeminarHF')->textInput() ?>

            <?= $form->field($model, 'L_SeminarAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Seminar')->textInput() ?>

        </div>
        <div id="Adjustmentcoo" class="tab-pane fade">
            <?= $form->field($model, 'L_CoopAdj')->textInput() ?>

            <?= $form->field($model, 'L_CoopPF')->textInput() ?>

            <?= $form->field($model, 'L_CoopHF')->textInput() ?>

            <?= $form->field($model, 'L_CoopAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Coop')->textInput() ?>

        </div>
        <div id="Adjustmenttui" class="tab-pane fade">
            <?= $form->field($model, 'L_TuitionAdj')->textInput() ?>

            <?= $form->field($model, 'L_TuitionPF')->textInput() ?>

            <?= $form->field($model, 'L_TuitionHF')->textInput() ?>

            <?= $form->field($model, 'L_TuitionAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Tuition')->textInput() ?>

        </div>
        <div id="Adjustmenttrip" class="tab-pane fade">
            <?= $form->field($model, 'L_FieldTripAdj')->textInput() ?>

            <?= $form->field($model, 'L_FieldTripPF')->textInput() ?>

            <?= $form->field($model, 'L_FieldTripHF')->textInput() ?>

            <?= $form->field($model, 'L_FieldTripAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_FieldTrip')->textInput() ?>

        </div>
        <div id="Adjustmentmpl" class="tab-pane fade">

            <?= $form->field($model, 'L_CCLoveAdj')->textInput() ?>

            <?= $form->field($model, 'L_CCLovePF')->textInput() ?>

            <?= $form->field($model, 'L_CCLoveHF')->textInput() ?>

            <?= $form->field($model, 'L_CCLoveAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_CCLove')->textInput() ?>

        </div>
        <div id="Adjustmentcch" class="tab-pane fade">

            <?= $form->field($model, 'L_HFCCLoveAdj')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLovePF')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLoveHF')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLoveAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLove')->textInput() ?>
        </div>
        <div id="Adjustmenteuusint" class="tab-pane fade">

            <?= $form->field($model, 'L_EuroUSAIntAdj')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAIntPF')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAIntHF')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAIntAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAInt')->textInput() ?>

        </div>
        <div id="Adjustmenteuusprin" class="tab-pane fade">
            <?= $form->field($model, 'L_EuroUSAPcplAdj')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcplPF')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcplHF')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcplAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcpl')->textInput() ?>
        </div>
        <div id="Adjustmentholy" class="tab-pane fade">

            <?= $form->field($model, 'L_HolyLandTourAdj')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTourPF')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTourHF')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTourAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTour')->textInput() ?>
        </div>
        <div id="Adjustmenthk" class="tab-pane fade">

             <?= $form->field($model, 'L_HKTravelAdj')->textInput() ?>

            <?= $form->field($model, 'L_HKTravelPF')->textInput() ?>

            <?= $form->field($model, 'L_HKTravelHF')->textInput() ?>

            <?= $form->field($model, 'L_HKTravelAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HKTravel')->textInput() ?>

        </div>
        <div id="Adjustmentpafte" class="tab-pane fade">

            <?= $form->field($model, 'L_PAFTETourAdj')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETourPF')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETourHF')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETourAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETour')->textInput() ?>
        </div>
        <div id="Adjustmentasia" class="tab-pane fade">


            <?= $form->field($model, 'L_AsiaPacConfeAdj')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfePF')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfeHF')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfeAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfe')->textInput() ?>
        </div>
        <div id="Adjustmentpark" class="tab-pane fade">

            <?= $form->field($model, 'L_ParkingAdj')->textInput() ?>

            <?= $form->field($model, 'L_ParkingPF')->textInput() ?>

            <?= $form->field($model, 'L_ParkingHF')->textInput() ?>

            <?= $form->field($model, 'L_ParkingAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Parking')->textInput() ?>
        </div>
        <div id="Adjustmentcomp" class="tab-pane fade">

             <?= $form->field($model, 'L_ComputerAdj')->textInput() ?>

            <?= $form->field($model, 'L_ComputerPF')->textInput() ?>

            <?= $form->field($model, 'L_ComputerHF')->textInput() ?>

            <?= $form->field($model, 'L_ComputerAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Computer')->textInput() ?>
        </div>
        <div id="Adjustmentbasic" class="tab-pane fade">
            <?= $form->field($model, 'L_OPBasicAdj')->textInput() ?>

            <?= $form->field($model, 'L_OPBasicPF')->textInput() ?>

            <?= $form->field($model, 'L_OPBasicHF')->textInput() ?>

            <?= $form->field($model, 'L_OPBasicAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_OPBasic')->textInput() ?>

        </div>
        <div id="Adjustmentefa" class="tab-pane fade">
            <?= $form->field($model, 'L_OPEFAAdj')->textInput() ?>

            <?= $form->field($model, 'L_OPEFAPF')->textInput() ?>

            <?= $form->field($model, 'L_OPEFAHF')->textInput() ?>

            <?= $form->field($model, 'L_OPEFAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_OPEFA')->textInput() ?>
        </div>
        <div id="Adjustmentcola" class="tab-pane fade">
             <?= $form->field($model, 'L_OPCOLAAdj')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLAPF')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLAHF')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLA')->textInput() ?>

        </div>
        <div id="Adjustmentadjust" class="tab-pane fade">

            <?= $form->field($model, 'L_AdjTaxAdj')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxPF')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxHF')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_AdjTax')->textInput() ?>
        </div>
        <div id="Adjustmentsign" class="tab-pane fade">

            <?= $form->field($model, 'L_AdjTaxSBAdj')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSBPF')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSBHF')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSBAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSB')->textInput() ?>

        </div>
        <div id="Adjustmentalwopc" class="tab-pane fade">

             <?= $form->field($model, 'L_ALWOPCOLAAdj')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLAPF')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLAHF')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLA')->textInput() ?>

        </div>
        <div id="Adjustmentalwope" class="tab-pane fade">

            <?= $form->field($model, 'L_ALWOPEFAAdj')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFAPF')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFAHF')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFA')->textInput() ?>
        </div>
        <div id="Adjustmentvacc" class="tab-pane fade">

             <?= $form->field($model, 'L_VaccineAdj')->textInput() ?>

            <?= $form->field($model, 'L_VaccinePF')->textInput() ?>

            <?= $form->field($model, 'L_VaccineHF')->textInput() ?>

            <?= $form->field($model, 'L_VaccineAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Vaccine')->textInput() ?>

        </div>

    </div>
            
    </div>
          
    </div>                           

   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success','id'=>'loans']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php
$url = Url::to(['loans/create']);
$script = <<< JS

$("#loans").click(function(e){
    var formData = new FormData($("#loansFrm")[0]);

    $.ajax({
        url: "$url",
        type: "POST",
        data: formData,
        success: function(response) {
            if(response == 1)
            {
                $('#loansFrm').trigger('reset');
                $.pjax.reload({container:'#loansTbl', async: false});
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