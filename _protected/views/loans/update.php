<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Loans */

$this->title = 'Update Loans: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loans-update">

<?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">SSS<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentsl">Loan</a></li>
                <li><a data-toggle="tab" href="#Calamitysl">Calamity</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">HDMF<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmenthl">HMDF</a></li>
                <li><a data-toggle="tab" href="#Multihl">Multi Purpose</a></li>
                <li><a data-toggle="tab" href="#Calamityhl">Calamity</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Over Payment<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentbasicl">Basic</a></li>
                <li><a data-toggle="tab" href="#Adjustmentefal">Efa</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcolal">Cola</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tax<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentadjustl">Adjustment</a></li>
                <li><a data-toggle="tab" href="#Adjustmentsignl">Signing Bonus</a></li>               

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Alwop<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentalwopcl">Cola</a></li>
                <li><a data-toggle="tab" href="#Adjustmentalwopel">Efa</a></li>               

            </ul>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(1)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentpl">Pag-ibig</a></li>
                <li><a data-toggle="tab" href="#Adjustmentfl">Fawu</a></li>
                <li><a data-toggle="tab" href="#HAdjustmentfl">Handling fee Fawu</a></li>
                <li><a data-toggle="tab" href="#Adjustmenthol">Housing</a></li>
                <li><a data-toggle="tab" href="#PAdjustmenthol">Pricipal Housing</a></li>
                <li><a data-toggle="tab" href="#Adjustmentmedl">Medical</a></li>
                <li><a data-toggle="tab" href="#Adjustmenttechl">Technology</a></li>
                <li><a data-toggle="tab" href="#Adjustmenthosl">Hospital</a></li>
                <li><a data-toggle="tab" href="#Adjustmentemel">Emergency</a></li>
                <li><a data-toggle="tab" href="#Adjustmentunil">Unified</a></li>

            </ul>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(2)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentbdayl">Birthday</a></li>
                <li><a data-toggle="tab" href="#Adjustmenttral">Travel</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpettl">Petty Cash</a></li>
                <li><a data-toggle="tab" href="#Adjustmentspel">Special Assistance</a></li>
                <li><a data-toggle="tab" href="#Adjustmentphil">Philam Care</a></li>
                <li><a data-toggle="tab" href="#Adjustmentsavl">Savings Deposit</a></li>
                <li><a data-toggle="tab" href="#Adjustmentfixl">Fixed Deposit</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpenl">Pension Deposit</a></li>
                <li><a data-toggle="tab" href="#Adjustmentseml">Seminar</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcool">Coop</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(3)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmenttuil">Tuition</a></li>
                <li><a data-toggle="tab" href="#Adjustmenttripl">Field Trip</a></li>
                <li><a data-toggle="tab" href="#Adjustmentmpll">CC MP/Love</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcchl">Handling CC/Love</a></li>
                <li><a data-toggle="tab" href="#Adjustmenteuusintll">Europe/USA (INT)</a></li>
                <li><a data-toggle="tab" href="#Adjustmenteuusprinl">Europe/USA (PRIN'L)</a></li>
                <li><a data-toggle="tab" href="#Adjustmentholyl">Holy Land Tour</a></li>
                <li><a data-toggle="tab" href="#Adjustmenthkl">Hongkong Travel</a></li>
                <li><a data-toggle="tab" href="#Adjustmentpaftel">Pafte Study Tour</a></li>
                

            </ul>
        </li>
         <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Loans(4)<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Adjustmentasial">Asia Pacific Conf.</a></li>
                <li><a data-toggle="tab" href="#Adjustmentparkl">Parking Fee</a></li>
                <li><a data-toggle="tab" href="#Adjustmentcompl">Computer</a></li>
                <li><a data-toggle="tab" href="#Adjustmentvaccl">Vaccine</a></li>
                

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
        <div id="Adjustmentsl" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSAdj')->textInput() ?>

            <?= $form->field($model, 'L_SSSPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_SSSHF')->textInput() ?>
   
            <?= $form->field($model, 'L_SSSAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_SSS')->textInput() ?>
        </div>
        <div id="Calamitysl" class="tab-pane fade">
            <?= $form->field($model, 'L_SSSCAdj')->textInput() ?>

            <?= $form->field($model, 'L_SSSCPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_SSSCHF')->textInput() ?>

            <?= $form->field($model, 'L_SSSCAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_SSSC')->textInput() ?>

        </div>
         <div id="Adjustmenthl" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFAdj')->textInput() ?>

            <?= $form->field($model, 'L_HDMFPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>
 
            <?= $form->field($model, 'L_HDMFHF')->textInput() ?>
            
            <?= $form->field($model, 'L_HDMFAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HDMF')->textInput() ?>
            
        </div>
        <div id="Multihl" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFMPAdj')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMPPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HDMFMPHF')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMPAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HDMFMP')->textInput() ?>
            

        </div>
        <div id="Calamityhl" class="tab-pane fade">
            <?= $form->field($model, 'L_HDMFCAdj')->textInput() ?>

            <?= $form->field($model, 'L_HDMFCPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HDMFCHF')->textInput() ?>

            <?= $form->field($model, 'L_HDMFCAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HDMFC')->textInput() ?>
            

        </div>
        <div id="Adjustmentpl" class="tab-pane fade">
            <?= $form->field($model, 'L_LOVEMPAdj')->textInput() ?>

            <?= $form->field($model, 'L_LOVEMPPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_LOVEMPHF')->textInput() ?>
            
            <?= $form->field($model, 'L_LOVEMPAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_LOVEMP')->textInput() ?>
           
        </div>
        <div id="Adjustmentfl" class="tab-pane fade">
            <?= $form->field($model, 'L_FAWUAdj')->textInput() ?>
         
            <?= $form->field($model, 'L_FAWUPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>
        
            <?= $form->field($model, 'L_FAWUHF')->textInput() ?>

            <?= $form->field($model, 'L_FAWUAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_FAWU')->textInput() ?>
            
           
        </div>
        <div id="HAdjustmentfl" class="tab-pane fade">
            <?= $form->field($model, 'L_HFFAWUAdj')->textInput() ?>
           
            <?= $form->field($model, 'L_HFFAWUPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HFFAWUHF')->textInput() ?>

            <?= $form->field($model, 'L_HFFAWUAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HFFAWU')->textInput() ?>
            
        </div>
        <div id="Adjustmenthol" class="tab-pane fade">
            <?= $form->field($model, 'L_CEUHousingIntAdj')->textInput() ?>
         
            <?= $form->field($model, 'L_CEUHousingIntPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_CEUHousingIntHF')->textInput() ?>
            <?= $form->field($model, 'L_CEUHousingIntAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingInt')->textInput() ?>

        </div>
        <div id="PAdjustmenthol" class="tab-pane fade">
            <?= $form->field($model, 'L_CEUHousingPcplAdj')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingPcplPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_CEUHousingPcplHF')->textInput() ?>
            
            <?= $form->field($model, 'L_CEUHousingPcplAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_CEUHousingPcpl')->textInput() ?>
  
            
        </div>
        <div id="Adjustmentmedl" class="tab-pane fade">
            <?= $form->field($model, 'L_MedicalAdj')->textInput() ?>
 
            <?= $form->field($model, 'L_MedicalPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_MedicalHF')->textInput() ?>

            <?= $form->field($model, 'L_MedicalAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Medical')->textInput() ?>

        </div>
        <div id="Adjustmenttechl" class="tab-pane fade">
            <?= $form->field($model, 'L_TechnologyAdj')->textInput() ?>
 
            <?= $form->field($model, 'L_TechnologyPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_TechnologyHF')->textInput() ?>
     
            <?= $form->field($model, 'L_TechnologyAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Technology')->textInput() ?>
           
        </div>
        <div id="Adjustmenthosl" class="tab-pane fade">
            <?= $form->field($model, 'L_HospitalAdj')->textInput() ?>

            <?= $form->field($model, 'L_HospitalPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HospitalHF')->textInput() ?>

            <?= $form->field($model, 'L_HospitalAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Hospital')->textInput() ?>

        </div>
        <div id="Adjustmentemel" class="tab-pane fade">
 
            <?= $form->field($model, 'L_EmergencyAdj')->textInput() ?>


            <?= $form->field($model, 'L_EmergencyPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_EmergencyHF')->textInput() ?>

            <?= $form->field($model, 'L_EmergencyAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Emergency')->textInput() ?>

        </div>
        <div id="Adjustmentunil" class="tab-pane fade">
            <?= $form->field($model, 'L_UnifiedAdj')->textInput() ?>

            <?= $form->field($model, 'L_UnifiedPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_UnifiedHF')->textInput() ?>

            <?= $form->field($model, 'L_UnifiedAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Unified')->textInput() ?>
        </div>
        <div id="Adjustmentbdayl" class="tab-pane fade">

            <?= $form->field($model, 'L_BDayAdj')->textInput() ?>

            <?= $form->field($model, 'L_BDayPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_BDayHF')->textInput() ?>

            <?= $form->field($model, 'L_BDayAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_BDay')->textInput() ?>
        </div>
        <div id="Adjustmenttral" class="tab-pane fade">
            <?= $form->field($model, 'L_TravelAdj')->textInput() ?>

            <?= $form->field($model, 'L_TravelPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_TravelHF')->textInput() ?>

            <?= $form->field($model, 'L_TravelAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Travel')->textInput() ?>
        </div>
        <div id="Adjustmentpettl" class="tab-pane fade">
            <?= $form->field($model, 'L_PettyCashAdj')->textInput() ?>

            <?= $form->field($model, 'L_PettyCashPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_PettyCashHF')->textInput() ?>

            <?= $form->field($model, 'L_PettyCashAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_PettyCash')->textInput() ?>

        </div>
        <div id="Adjustmentspel" class="tab-pane fade">
             <?= $form->field($model, 'L_SpecialAdj')->textInput() ?>

            <?= $form->field($model, 'L_SpecialPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_SpecialHF')->textInput() ?>

            <?= $form->field($model, 'L_SpecialAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Special')->textInput() ?>

        </div>
        <div id="Adjustmentphil" class="tab-pane fade">
            <?= $form->field($model, 'L_PhilamcareAdj')->textInput() ?>

            <?= $form->field($model, 'L_PhilamcarePF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_PhilamcareHF')->textInput() ?>

            <?= $form->field($model, 'L_PhilamcareAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Philamcare')->textInput() ?>
        </div>
        <div id="Adjustmentsavl" class="tab-pane fade">
            <?= $form->field($model, 'L_SavingsDepAdj')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDepPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_SavingsDepHF')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDepAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_SavingsDep')->textInput() ?>
        </div>
        <div id="Adjustmentfixl" class="tab-pane fade">
            <?= $form->field($model, 'L_FixedDepAdj')->textInput() ?>

            <?= $form->field($model, 'L_FixedDepPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_FixedDepHF')->textInput() ?>

            <?= $form->field($model, 'L_FixedDepAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_FixedDep')->textInput() ?>
        </div>
        <div id="Adjustmentpenl" class="tab-pane fade">
            <?= $form->field($model, 'L_PensionDepAdj')->textInput() ?>

            <?= $form->field($model, 'L_PensionDepPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_PensionDepHF')->textInput() ?>

            <?= $form->field($model, 'L_PensionDepAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_PensionDep')->textInput() ?>
        </div>
        <div id="Adjustmentseml" class="tab-pane fade">
        
            <?= $form->field($model, 'L_SeminarAdj')->textInput() ?>

            <?= $form->field($model, 'L_SeminarPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_SeminarHF')->textInput() ?>

            <?= $form->field($model, 'L_SeminarAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Seminar')->textInput() ?>

        </div>
        <div id="Adjustmentcool" class="tab-pane fade">
            <?= $form->field($model, 'L_CoopAdj')->textInput() ?>

            <?= $form->field($model, 'L_CoopPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_CoopHF')->textInput() ?>

            <?= $form->field($model, 'L_CoopAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Coop')->textInput() ?>

        </div>
        <div id="Adjustmenttuil" class="tab-pane fade">
            <?= $form->field($model, 'L_TuitionAdj')->textInput() ?>

            <?= $form->field($model, 'L_TuitionPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_TuitionHF')->textInput() ?>

            <?= $form->field($model, 'L_TuitionAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Tuition')->textInput() ?>

        </div>
        <div id="Adjustmenttripl" class="tab-pane fade">
            <?= $form->field($model, 'L_FieldTripAdj')->textInput() ?>

            <?= $form->field($model, 'L_FieldTripPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_FieldTripHF')->textInput() ?>

            <?= $form->field($model, 'L_FieldTripAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_FieldTrip')->textInput() ?>

        </div>
        <div id="Adjustmentmpll" class="tab-pane fade">

            <?= $form->field($model, 'L_CCLoveAdj')->textInput() ?>

            <?= $form->field($model, 'L_CCLovePF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_CCLoveHF')->textInput() ?>

            <?= $form->field($model, 'L_CCLoveAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_CCLove')->textInput() ?>

        </div>
        <div id="Adjustmentcchl" class="tab-pane fade">

            <?= $form->field($model, 'L_HFCCLoveAdj')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLovePF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HFCCLoveHF')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLoveAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HFCCLove')->textInput() ?>
        </div>
        <div id="Adjustmenteuusintll" class="tab-pane fade">

            <?= $form->field($model, 'L_EuroUSAIntAdj')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAIntPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_EuroUSAIntHF')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAIntAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAInt')->textInput() ?>

        </div>
        <div id="Adjustmenteuusprinl" class="tab-pane fade">
            <?= $form->field($model, 'L_EuroUSAPcplAdj')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcplPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_EuroUSAPcplHF')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcplAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_EuroUSAPcpl')->textInput() ?>
        </div>
        <div id="Adjustmentholyl" class="tab-pane fade">

            <?= $form->field($model, 'L_HolyLandTourAdj')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTourPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HolyLandTourHF')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTourAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HolyLandTour')->textInput() ?>
        </div>
        <div id="Adjustmenthkl" class="tab-pane fade">

             <?= $form->field($model, 'L_HKTravelAdj')->textInput() ?>

            <?= $form->field($model, 'L_HKTravelPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_HKTravelHF')->textInput() ?>

            <?= $form->field($model, 'L_HKTravelAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_HKTravel')->textInput() ?>

        </div>
        <div id="Adjustmentpaftel" class="tab-pane fade">

            <?= $form->field($model, 'L_PAFTETourAdj')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETourPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_PAFTETourHF')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETourAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_PAFTETour')->textInput() ?>
        </div>
        <div id="Adjustmentasial" class="tab-pane fade">


            <?= $form->field($model, 'L_AsiaPacConfeAdj')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfePF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_AsiaPacConfeHF')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfeAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_AsiaPacConfe')->textInput() ?>
        </div>
        <div id="Adjustmentparkl" class="tab-pane fade">

            <?= $form->field($model, 'L_ParkingAdj')->textInput() ?>

            <?= $form->field($model, 'L_ParkingPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_ParkingHF')->textInput() ?>

            <?= $form->field($model, 'L_ParkingAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Parking')->textInput() ?>
        </div>
        <div id="Adjustmentcompl" class="tab-pane fade">

             <?= $form->field($model, 'L_ComputerAdj')->textInput() ?>

            <?= $form->field($model, 'L_ComputerPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_ComputerHF')->textInput() ?>

            <?= $form->field($model, 'L_ComputerAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Computer')->textInput() ?>
        </div>
        <div id="Adjustmentbasicl" class="tab-pane fade">
            <?= $form->field($model, 'L_OPBasicAdj')->textInput() ?>

            <?= $form->field($model, 'L_OPBasicPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_OPBasicHF')->textInput() ?>

            <?= $form->field($model, 'L_OPBasicAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_OPBasic')->textInput() ?>

        </div>
        <div id="Adjustmentefal" class="tab-pane fade">
            <?= $form->field($model, 'L_OPEFAAdj')->textInput() ?>

            <?= $form->field($model, 'L_OPEFAPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_OPEFAHF')->textInput() ?>

            <?= $form->field($model, 'L_OPEFAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_OPEFA')->textInput() ?>
        </div>
        <div id="Adjustmentcolal" class="tab-pane fade">
             <?= $form->field($model, 'L_OPCOLAAdj')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLAPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_OPCOLAHF')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_OPCOLA')->textInput() ?>

        </div>
        <div id="Adjustmentadjustl" class="tab-pane fade">

            <?= $form->field($model, 'L_AdjTaxAdj')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_AdjTaxHF')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_AdjTax')->textInput() ?>
        </div>
        <div id="Adjustmentsignl" class="tab-pane fade">

            <?= $form->field($model, 'L_AdjTaxSBAdj')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSBPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_AdjTaxSBHF')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSBAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_AdjTaxSB')->textInput() ?>

        </div>
        <div id="Adjustmentalwopcl" class="tab-pane fade">

             <?= $form->field($model, 'L_ALWOPCOLAAdj')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLAPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_ALWOPCOLAHF')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPCOLA')->textInput() ?>

        </div>
        <div id="Adjustmentalwopel" class="tab-pane fade">

            <?= $form->field($model, 'L_ALWOPEFAAdj')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFAPF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_ALWOPEFAHF')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFAAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_ALWOPEFA')->textInput() ?>
        </div>
        <div id="Adjustmentvaccl" class="tab-pane fade">

             <?= $form->field($model, 'L_VaccineAdj')->textInput() ?>

            <?= $form->field($model, 'L_VaccinePF')->dropDownList($model->getFactorList(),['prompt'=>'Select...']) ?>

            <?= $form->field($model, 'L_VaccineHF')->textInput() ?>

            <?= $form->field($model, 'L_VaccineAdtnlD')->textInput() ?>

            <?= $form->field($model, 'L_Vaccine')->textInput() ?>

        </div>

    </div>
            
    </div>
          
    </div>                           

   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
