<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\TotherIncome */

$this->title = 'Update Teaching Other Income: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Tother Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tother-income-update">

        <?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Allowance<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#hrml">HRM</a></li>
                <li><a data-toggle="tab" href="#ipl">IP</a></li>
                <li><a data-toggle="tab" href="#rlel">RLE</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Refund<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#alumtl">Alumni Ticket</a></li>
                <li><a data-toggle="tab" href="#ccll">CC-Loan</a></li>
                <li><a data-toggle="tab" href="#cool">COOP</a></li>
                <li><a data-toggle="tab" href="#fawl">Fawu</a></li>
                <li><a data-toggle="tab" href="#mdml">MDMF</a></li>
                <li><a data-toggle="tab" href="#handl">Handling Fee</a></li>
                <li><a data-toggle="tab" href="#medl">Medicare</a></li>
                <li><a data-toggle="tab" href="#phill">Philhealth</a></li>
                <li><a data-toggle="tab" href="#sssl">SSS</a></li>
                <li><a data-toggle="tab" href="#taxl">Tax</a></li>
                <li><a data-toggle="tab" href="#tuil">Tuition</a></li>
                <li><a data-toggle="tab" href="#othl">Other</a></li>

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bonus<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#midl">Mid Year</a></li>
                <li><a data-toggle="tab" href="#slvlll">SLVL</a></li>
                <li><a data-toggle="tab" href="#thirl">Thirteenth Month</a></li>
                <li><a data-toggle="tab" href="#chrisl">Christmas</a></li>
                <li><a data-toggle="tab" href="#shsl">Senior Highschool</a></li>
                <li><a data-toggle="tab" href="#seniorl">Senior Staff Fee</a></li>
                <li><a data-toggle="tab" href="#nonl">Non-Tax/Tax</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">A-C<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#advl">Advance-IP</a></li>
                <li><a data-toggle="tab" href="#adjIPl">Adjusment IP</a></li>
                <li><a data-toggle="tab" href="#adviserl">Adviser Fee</a></li>
                <li><a data-toggle="tab" href="#backpl">Back Pay</a></li>
                <li><a data-toggle="tab" href="#pracpayl">Clinical Lab Prac. Pay</a></li>
                <li><a data-toggle="tab" href="#classorgl">Class Organization Advisers</a></li>
                <li><a data-toggle="tab" href="#communityoutl"> Community Outreach Pay</a></li>
                <li><a data-toggle="tab" href="#communityimmerl">  Community Immersion</a></li>
                <li><a data-toggle="tab" href="#coordinationl"> Coordination</a></li>
                <li><a data-toggle="tab" href="#comprel">Compre Examiniation</a></li>
                <li><a data-toggle="tab" href="#criticall">Critical Work</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">D-G<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dentl">Dentistry</a></li>
                <li><a data-toggle="tab" href="#differentiall">Differential</a></li>
                <li><a data-toggle="tab" href="#enhancementl">Enhancement Seminar</a></li>
                <li><a data-toggle="tab" href="#enrollmentl">Enrollment Advising</a></li>
                <li><a data-toggle="tab" href="#expertisel">Expertise Premium</a></li>
                <li><a data-toggle="tab" href="#externalprogl">External Program Pay</a></li>
                <li><a data-toggle="tab" href="#externshipl"> Externship</a></li>
                <li><a data-toggle="tab" href="#goodwilll">  Goodwill</a></li>
                <li><a data-toggle="tab" href="#gratuityll"> Gratuity</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">H-I<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Hardshipl">Hardship Pay</a></li>
                <li><a data-toggle="tab" href="#hazl">Hazard-Pay</a></li>
                <li><a data-toggle="tab" href="#holidayl">Holiday Pay</a></li>
                <li><a data-toggle="tab" href="#honl">Honorarium</a></li>
                <li><a data-toggle="tab" href="#hospitall">Hospital Orientation</a></li>
                <li><a data-toggle="tab" href="#incentivel">Incentive LP</a></li>
                <li><a data-toggle="tab" href="#inclusionl">Inclusion Program</a></li>
                <li><a data-toggle="tab" href="#incrementall">Incremental Proceeds</a></li>
                <li><a data-toggle="tab" href="#Internshipl">Internship Pay</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">M-S<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Maternityl">Maternity Benefity</a></li>
                <li><a data-toggle="tab" href="#onetimel">One time Incentive</a></li>
                <li><a data-toggle="tab" href="#Otherincomel">Other Income</a></li>
                <li><a data-toggle="tab" href="#Practicuml">Practicum</a></li>
                <li><a data-toggle="tab" href="#Proctorshipl">Proctorship</a></li>
                <li><a data-toggle="tab" href="#Reviewl">Review</a></li>
                <li><a data-toggle="tab" href="#RICEl">Rice</a></li>
                <li><a data-toggle="tab" href="#Salaryl">Salary Senior High School</a></li>
                <li><a data-toggle="tab" href="#Specialexaml">Special Exam</a></li>
                <li><a data-toggle="tab" href="#Substitutionl">Substitution</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">T<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Trainingl">Training</a></li>
                <li><a data-toggle="tab" href="#Transportationl">Transportation Allowance</a></li>
                <li><a data-toggle="tab" href="#Tutoriall">Tutorial</a></li>
                                

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
        <div id="advl" class="tab-pane fade">
            <?= $form->field($model, 'TC_AdvIP')->textInput() ?>
 
        </div>
        <div id="hazl" class="tab-pane fade">
            <?= $form->field($model, 'TC_HazardPay')->textInput() ?>

        </div>
        <div id="honl" class="tab-pane fade">
            <?= $form->field($model, 'TC_Honorarium')->textInput() ?>
            <?= $form->field($model, 'TC_HonorariumNF')->textInput() ?>

        </div>
        <div id="hrml" class="tab-pane fade">
            <?= $form->field($model, 'TC_HRMAllowNTax')->textInput() ?>

            <?= $form->field($model, 'TC_HRMAllowTax')->textInput() ?>
        </div>
        <div id="ipl" class="tab-pane fade">
            <?= $form->field($model, 'TC_IPAllow')->textInput() ?>
        </div>
        <div id="rlel" class="tab-pane fade">
            <?= $form->field($model, 'TC_RLEAllowNTax')->textInput() ?>

            <?= $form->field($model, 'TC_RLEAllowTax')->textInput() ?>
        </div>  
        <div id="alumtl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDAlumniTick')->textInput() ?>
        </div>
        <div id="ccll" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDCCLoan')->textInput() ?>
        </div>
        <div id="cool" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDCOOP')->textInput() ?>
        </div>
        <div id="fawl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDFAWU')->textInput() ?>

        </div>
        <div id="mdml" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDHDMFMPL')->textInput() ?>

            <?= $form->field($model, 'TC_RFDHDMFP')->textInput() ?>

            <?= $form->field($model, 'TC_RFDHDMFU')->textInput() ?>
        </div>
        <div id="handl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDHF')->textInput() ?>
        </div>
        <div id="medl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDMedicare')->textInput() ?>

        </div>
        <div id="phill" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDPHIC')->textInput() ?>
        </div>
        <div id="sssl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDSSSCondo')->textInput() ?>

            <?= $form->field($model, 'TC_RFDSSSL')->textInput() ?>

            <?= $form->field($model, 'TC_RFDSSSP')->textInput() ?>

        </div>
        <div id="taxl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDTax')->textInput() ?>

            <?= $form->field($model, 'TC_RFDTaxAdv')->textInput() ?>
        </div>
        <div id="tuil" class="tab-pane fade">
             <?= $form->field($model, 'TC_RFDTF')->textInput() ?>

        </div>
        <div id="othl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RFDOthers')->textInput() ?>
            <?= $form->field($model, 'TC_RFDOthersRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="midl" class="tab-pane fade">
            <?= $form->field($model, 'TC_BNMidYrNTax')->textInput() ?>

            <?= $form->field($model, 'TC_BNMidYrTax')->textInput() ?>
        </div>
        <div id="slvlll" class="tab-pane fade">
            <?= $form->field($model, 'TC_BNSLVLNTax')->textInput() ?>

            <?= $form->field($model, 'TC_BNSLVLTax')->textInput() ?>

        </div>
        <div id="thirl" class="tab-pane fade">
            <?= $form->field($model, 'TC_BNTMPNTax')->textInput() ?>

            <?= $form->field($model, 'TC_BNTMPTax')->textInput() ?>

        </div>
        <div id="chrisl" class="tab-pane fade">
            <?= $form->field($model, 'TC_BNXmasNTax')->textInput() ?>

            <?= $form->field($model, 'TC_BNXmasTax')->textInput() ?>

        </div>
        <div id="shsl" class="tab-pane fade">
            <?= $form->field($model, 'TC_SHSBNTMPNTax')->textInput() ?>

            <?= $form->field($model, 'TC_SHSBNTMPTax')->textInput() ?>

        </div>
        <div id="seniorl" class="tab-pane fade">
            <?= $form->field($model, 'TC_SSBNMidYrTax')->textInput() ?>

            <?= $form->field($model, 'TC_SSBNSLVLTax')->textInput() ?>

            <?= $form->field($model, 'TC_SSBNTMPTax')->textInput() ?>

            <?= $form->field($model, 'TC_SSBNXmasTax')->textInput() ?>

        </div>
        <div id="nonl" class="tab-pane fade">
            <?= $form->field($model, 'TC_BonusNTax')->textInput() ?>

            <?= $form->field($model, 'TC_BonusTax')->textInput() ?>

        </div>
        <div id="adjIPl" class="tab-pane fade">
            <?= $form->field($model, 'TC_AdjIPAllow')->textInput() ?>
        </div>
        <div id="adviserl" class="tab-pane fade">
            <?= $form->field($model, 'TC_AdviserFee')->textInput() ?>
        </div>
        <div id="backpl" class="tab-pane fade">
            <?= $form->field($model, 'TC_BackPay')->textInput() ?>

            <?= $form->field($model, 'TC_BackPayEFA')->textInput() ?>

            <?= $form->field($model, 'TC_BackPayCOLA')->textInput() ?>

            <?= $form->field($model, 'TC_BigClassPay')->textInput() ?>
        </div>
        <div id="pracpayl" class="tab-pane fade">
            <?= $form->field($model, 'TC_CLPPay')->textInput() ?>

        </div>
        <div id="classorgl" class="tab-pane fade">
            <?= $form->field($model, 'TC_ClassOrgAdvs')->textInput() ?>

        </div>
        <div id="communityoutl" class="tab-pane fade">
            <?= $form->field($model, 'TC_CommOutrchPay')->textInput() ?>

        </div>
        <div id="communityimmerl" class="tab-pane fade">
            <?= $form->field($model, 'TC_CommImmersion')->textInput() ?>

        </div>
        <div id="coordinationl" class="tab-pane fade">
            <?= $form->field($model, 'TC_Coordi')->textInput() ?>

        </div>
        <div id="comprel" class="tab-pane fade">
            <?= $form->field($model, 'TC_CompreExam')->textInput() ?>

        </div>
        <div id="criticall" class="tab-pane fade">
            <?= $form->field($model, 'TC_CriticWork')->textInput() ?>

        </div>
        <div id="dentl" class="tab-pane fade">
            <?= $form->field($model, 'TC_DentPreBoard')->textInput() ?>
            <?= $form->field($model, 'TC_DentALE')->textInput() ?>
        </div>
        <div id="differentiall" class="tab-pane fade">
             <?= $form->field($model, 'TC_Differential')->textInput() ?>
        </div>
        <div id="enhancementl" class="tab-pane fade">
            <?= $form->field($model, 'TC_EnhcmtSeminar')->textInput() ?>

        </div>
        <div id="enrollmentl" class="tab-pane fade">
            <?= $form->field($model, 'TC_EnrAdvising')->textInput() ?>

        </div>
        <div id="expertisel" class="tab-pane fade">
            <?= $form->field($model, 'TC_ExpertisePrm')->textInput() ?>

        </div>
        <div id="externalprogl" class="tab-pane fade">
            <?= $form->field($model, 'TC_ExtProgPay')->textInput() ?>

        </div>
        <div id="externshipl" class="tab-pane fade">
            <?= $form->field($model, 'TC_Externship')->textInput() ?>

        </div>
        <div id="goodwilll" class="tab-pane fade">
            <?= $form->field($model, 'TC_Goodwill')->textInput() ?>

        </div>
        <div id="gratuityll" class="tab-pane fade">
            <?= $form->field($model, 'TC_GratuityNTax')->textInput() ?>

            <?= $form->field($model, 'TC_GratuityTax')->textInput() ?>

        </div>
        <div id="Hardshipl" class="tab-pane fade">
            <?= $form->field($model, 'TC_HardshipPay')->textInput() ?>

        </div>
        <div id="holidayl" class="tab-pane fade">
            <?= $form->field($model, 'TC_HolidayPay')->textInput() ?>

        </div>
        <div id="hospitall" class="tab-pane fade">
            <?= $form->field($model, 'TC_HosptOrient')->textInput() ?>

        </div>
        <div id="incentivel" class="tab-pane fade">
            <?= $form->field($model, 'TC_IncentiveLP')->textInput() ?>

        </div>
        <div id="inclusionl" class="tab-pane fade">
            <?= $form->field($model, 'TC_IncluProg')->textInput() ?>

        </div>
        <div id="incrementall" class="tab-pane fade">
            <?= $form->field($model, 'TC_IncrmtlProceeds')->textInput() ?>

        </div>
        <div id="Internshipl" class="tab-pane fade">
             <?= $form->field($model, 'TC_InternshipPay')->textInput() ?>

        </div>
        <div id="Maternityl" class="tab-pane fade">
            <?= $form->field($model, 'TC_MaternityBnft')->textInput() ?>

        </div>
        <div id="onetimel" class="tab-pane fade">
            <?= $form->field($model, 'TC_OneTimeIncentive')->textInput() ?>

        </div>
        <div id="Practicuml" class="tab-pane fade">
            <?= $form->field($model, 'TC_Practicum')->textInput() ?>

        </div>
        <div id="Proctorshipl" class="tab-pane fade">
            <?= $form->field($model, 'TC_Proctorship')->textInput() ?>

        </div>
        <div id="Reviewl" class="tab-pane fade">
            <?= $form->field($model, 'TC_ReviewNTax')->textInput() ?>
            <?= $form->field($model, 'TC_ReviewTax')->textInput() ?>

        </div>
        <div id="RICEl" class="tab-pane fade">
            <?= $form->field($model, 'TC_RICE')->textInput() ?>

        </div>
        <div id="Salaryl" class="tab-pane fade">
            <?= $form->field($model, 'TC_SalarySHS')->textInput() ?>

        </div>
        <div id="Specialexaml" class="tab-pane fade">
            <?= $form->field($model, 'TC_SpclExam')->textInput() ?>

        </div>
        <div id="Substitutionl" class="tab-pane fade">
            <?= $form->field($model, 'TC_Substitution')->textInput() ?>

        </div>
        <div id="Trainingl" class="tab-pane fade">
            <?= $form->field($model, 'TC_Training')->textInput() ?>

        </div>
        <div id="Transportationl" class="tab-pane fade">
            <?= $form->field($model, 'TC_TranspoAllow')->textInput() ?>

        </div>
        <div id="Tutoriall" class="tab-pane fade">
            <?= $form->field($model, 'TC_Tutorial')->textInput() ?>

        </div>
        <div id="Otherincomel" class="tab-pane fade">
            <?= $form->field($model, 'TC_OINTax')->textInput() ?>

            <?= $form->field($model, 'TC_OINTaxRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'TC_OITax')->textInput() ?>

            <?= $form->field($model, 'TC_OITaxRem')->textInput(['maxlength' => true]) ?>

        </div>
        
    </div>
            
    </div>
          
    </div>   


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>
