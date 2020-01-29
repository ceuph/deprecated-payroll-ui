<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\NtOtherIncome */

$this->title = 'Update Non-Teaching Other Income: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Nt Other Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'EmpID' => $model->EmpID, 'PrdID' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nt-other-income-update">

    <?php $form = ActiveForm::begin(); ?>

    <div class="bs-example">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Employee#</a></li>
        
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Allowance<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#hrmp">HRM</a></li>
                <li><a data-toggle="tab" href="#ipp">IP</a></li>
                <li><a data-toggle="tab" href="#rlep">RLE</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Refund<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#alumtp">Alumni Ticket</a></li>
                <li><a data-toggle="tab" href="#cclp">CC-Loan</a></li>
                <li><a data-toggle="tab" href="#coop">COOP</a></li>
                <li><a data-toggle="tab" href="#fawp">Fawu</a></li>
                <li><a data-toggle="tab" href="#mdmp">MDMF</a></li>
                <li><a data-toggle="tab" href="#handp">Handling Fee</a></li>
                <li><a data-toggle="tab" href="#medp">Medicare</a></li>
                <li><a data-toggle="tab" href="#philp">Philhealth</a></li>
                <li><a data-toggle="tab" href="#sssp">SSS</a></li>
                <li><a data-toggle="tab" href="#taxp">Tax</a></li>
                <li><a data-toggle="tab" href="#tuip">Tuition</a></li>
                <li><a data-toggle="tab" href="#othp">Other</a></li>

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Bonus<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#midp">Mid Year</a></li>
                <li><a data-toggle="tab" href="#slvlp">SLVL</a></li>
                <li><a data-toggle="tab" href="#thirp">Thirteenth Month</a></li>
                <li><a data-toggle="tab" href="#chrisp">Christmas</a></li>
                <li><a data-toggle="tab" href="#shsp">Senior Highschool</a></li>
                <li><a data-toggle="tab" href="#seniorp">Senior Staff Fee</a></li>
                <li><a data-toggle="tab" href="#nonp">Non-Tax/Tax</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">A-C<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#advp">Advance-IP</a></li>
                <li><a data-toggle="tab" href="#adjIPp">Adjusment IP</a></li>
                <li><a data-toggle="tab" href="#adviserp">Adviser Fee</a></li>
                <li><a data-toggle="tab" href="#backpp">Back Pay</a></li>
                <li><a data-toggle="tab" href="#pracpayp">Clinical Lab Prac. Pay</a></li>
                <li><a data-toggle="tab" href="#classorgp">Class Organization Advisers</a></li>
                <li><a data-toggle="tab" href="#communityoutp"> Community Outreach Pay</a></li>
                <li><a data-toggle="tab" href="#communityimmerp">  Community Immersion</a></li>
                <li><a data-toggle="tab" href="#coordinationp"> Coordination</a></li>
                <li><a data-toggle="tab" href="#comprep">Compre Examiniation</a></li>
                <li><a data-toggle="tab" href="#criticalp">Critical Work</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">D-G<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#dentp">Dentistry</a></li>
                <li><a data-toggle="tab" href="#differentialp">Differential</a></li>
                <li><a data-toggle="tab" href="#enhancementp">Enhancement Seminar</a></li>
                <li><a data-toggle="tab" href="#enrollmentp">Enrollment Advising</a></li>
                <li><a data-toggle="tab" href="#expertisep">Expertise Premium</a></li>
                <li><a data-toggle="tab" href="#externalprogp">External Program Pay</a></li>
                <li><a data-toggle="tab" href="#externshipp"> Externship</a></li>
                <li><a data-toggle="tab" href="#goodwillp">  Goodwill</a></li>
                <li><a data-toggle="tab" href="#gratuityp"> Gratuity</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">H-I<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Hardshipp">Hardship Pay</a></li>
                <li><a data-toggle="tab" href="#hazp">Hazard-Pay</a></li>
                <li><a data-toggle="tab" href="#honp">Honorarium</a></li>
                <li><a data-toggle="tab" href="#hospitalp">Hospital Orientation</a></li>
                <li><a data-toggle="tab" href="#incentivep">Incentive LP</a></li>
                <li><a data-toggle="tab" href="#inclusionp">Inclusion Program</a></li>
                <li><a data-toggle="tab" href="#incrementalp">Incremental Proceeds</a></li>
                <li><a data-toggle="tab" href="#Internshipp">Internship Pay</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">M-S<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Maternityp">Maternity Benefity</a></li>
                <li><a data-toggle="tab" href="#onetimep">One time Incentive</a></li>
                <li><a data-toggle="tab" href="#Otherincomep">Other Income</a></li>
                <li><a data-toggle="tab" href="#Practicump">Practicum</a></li>
                <li><a data-toggle="tab" href="#Proctorshipp">Proctorship</a></li>
                <li><a data-toggle="tab" href="#Reviewp">Review</a></li>
                <li><a data-toggle="tab" href="#RICEp">RICE</a></li>
                <li><a data-toggle="tab" href="#Salaryp">Salary Senior High School</a></li>
                <li><a data-toggle="tab" href="#Specialexamp">Special Exam</a></li>
                <li><a data-toggle="tab" href="#Substitutionp">Substitution</a></li>
                

            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">T<b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a data-toggle="tab" href="#Trainingp">Training</a></li>
                <li><a data-toggle="tab" href="#Transportationp">Transportation Allowance</a></li>
                <li><a data-toggle="tab" href="#Tutorialp">Tutorial</a></li>
                

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
        <div id="advp" class="tab-pane fade">
            <?= $form->field($model, 'NT_AdvIP')->textInput() ?>
 
        </div>
        <div id="hazp" class="tab-pane fade">
            <?= $form->field($model, 'NT_HazardPay')->textInput() ?>

        </div>
        <div id="honp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Honorarium')->textInput() ?>
            <?= $form->field($model, 'NT_HonorariumNF')->textInput() ?>

        </div>
        <div id="hrmp" class="tab-pane fade">
            <?= $form->field($model, 'NT_HRMAllowNTax')->textInput() ?>

            <?= $form->field($model, 'NT_HRMAllowTax')->textInput() ?>
        </div>
        <div id="ipp" class="tab-pane fade">
            <?= $form->field($model, 'NT_IPAllow')->textInput() ?>
        </div>
        <div id="rlep" class="tab-pane fade">
            <?= $form->field($model, 'NT_RLEAllowNTax')->textInput() ?>

            <?= $form->field($model, 'NT_RLEAllowTax')->textInput() ?>
        </div>  
        <div id="alumtp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDAlumniTick')->textInput() ?>
        </div>
        <div id="cclp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDCCLoan')->textInput() ?>
        </div>
        <div id="coop" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDCOOP')->textInput() ?>
        </div>
        <div id="fawp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDFAWU')->textInput() ?>

        </div>
        <div id="mdmp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDHDMFMPL')->textInput() ?>

            <?= $form->field($model, 'NT_RFDHDMFP')->textInput() ?>

            <?= $form->field($model, 'NT_RFDHDMFU')->textInput() ?>
        </div>
        <div id="handp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDHF')->textInput() ?>
        </div>
        <div id="medp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDMedicare')->textInput() ?>

        </div>
        <div id="philp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDPHIC')->textInput() ?>
        </div>
        <div id="sssp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDSSSCondo')->textInput() ?>

            <?= $form->field($model, 'NT_RFDSSSL')->textInput() ?>

            <?= $form->field($model, 'NT_RFDSSSP')->textInput() ?>

        </div>
        <div id="taxp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDTax')->textInput() ?>

            <?= $form->field($model, 'NT_RFDTaxAdv')->textInput() ?>
        </div>
        <div id="tuip" class="tab-pane fade">
             <?= $form->field($model, 'NT_RFDTF')->textInput() ?>

        </div>
        <div id="othp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RFDOthers')->textInput() ?>
            <?= $form->field($model, 'NT_RFDOthersRem')->textInput(['maxlength' => true]) ?>
        </div>
        <div id="midp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNMidYrNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNMidYrTax')->textInput() ?>
        </div>
        <div id="slvlp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNSLVLNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNSLVLTax')->textInput() ?>

        </div>
        <div id="thirp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNTMPNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNTMPTax')->textInput() ?>

        </div>
        <div id="chrisp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BNXmasNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BNXmasTax')->textInput() ?>

        </div>
        <div id="shsp" class="tab-pane fade">
            <?= $form->field($model, 'NT_SHSBNTMPNTax')->textInput() ?>

            <?= $form->field($model, 'NT_SHSBNTMPTax')->textInput() ?>

        </div>
        <div id="seniorp" class="tab-pane fade">
            <?= $form->field($model, 'NT_SSBNMidYrTax')->textInput() ?>

            <?= $form->field($model, 'NT_SSBNSLVLTax')->textInput() ?>

            <?= $form->field($model, 'NT_SSBNTMPTax')->textInput() ?>

            <?= $form->field($model, 'NT_SSBNXmasTax')->textInput() ?>

        </div>
        <div id="nonp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BonusNTax')->textInput() ?>

            <?= $form->field($model, 'NT_BonusTax')->textInput() ?>

        </div>
        <div id="adjIPp" class="tab-pane fade">
            <?= $form->field($model, 'NT_AdjIPAllow')->textInput() ?>
        </div>
        <div id="adviserp" class="tab-pane fade">
            <?= $form->field($model, 'NT_AdviserFee')->textInput() ?>
        </div>
        <div id="backpp" class="tab-pane fade">
            <?= $form->field($model, 'NT_BackPay')->textInput() ?>

            <?= $form->field($model, 'NT_BackPayEFA')->textInput() ?>

            <?= $form->field($model, 'NT_BackPayCOLA')->textInput() ?>

            <?= $form->field($model, 'NT_BigClassPay')->textInput() ?>
        </div>
        <div id="pracpayp" class="tab-pane fade">
            <?= $form->field($model, 'NT_CLPPay')->textInput() ?>

        </div>
        <div id="classorgp" class="tab-pane fade">
            <?= $form->field($model, 'NT_ClassOrgAdvs')->textInput() ?>

        </div>
        <div id="communityoutp" class="tab-pane fade">
            <?= $form->field($model, 'NT_CommOutrchPay')->textInput() ?>

        </div>
        <div id="communityimmerp" class="tab-pane fade">
            <?= $form->field($model, 'NT_CommImmersion')->textInput() ?>

        </div>
        <div id="coordinationp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Coordi')->textInput() ?>

        </div>
        <div id="comprep" class="tab-pane fade">
            <?= $form->field($model, 'NT_CompreExam')->textInput() ?>

        </div>
        <div id="criticalp" class="tab-pane fade">
            <?= $form->field($model, 'NT_CriticWork')->textInput() ?>

        </div>
        <div id="dentp" class="tab-pane fade">
            <?= $form->field($model, 'NT_DentPreBoard')->textInput() ?>
            <?= $form->field($model, 'NT_DentALE')->textInput() ?>
        </div>
        <div id="differentialp" class="tab-pane fade">
             <?= $form->field($model, 'NT_Differential')->textInput() ?>
        </div>
        <div id="enhancementp" class="tab-pane fade">
            <?= $form->field($model, 'NT_EnhcmtSeminar')->textInput() ?>

        </div>
        <div id="enrollmentp" class="tab-pane fade">
            <?= $form->field($model, 'NT_EnrAdvising')->textInput() ?>

        </div>
        <div id="expertisep" class="tab-pane fade">
            <?= $form->field($model, 'NT_ExpertisePrm')->textInput() ?>

        </div>
        <div id="externalprogp" class="tab-pane fade">
            <?= $form->field($model, 'NT_ExtProgPay')->textInput() ?>

        </div>
        <div id="externshipp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Externship')->textInput() ?>

        </div>
        <div id="goodwillp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Goodwill')->textInput() ?>

        </div>
        <div id="gratuityp" class="tab-pane fade">
            <?= $form->field($model, 'NT_GratuityNTax')->textInput() ?>

            <?= $form->field($model, 'NT_GratuityTax')->textInput() ?>

        </div>
        <div id="Hardshipp" class="tab-pane fade">
            <?= $form->field($model, 'NT_HardshipPay')->textInput() ?>

        </div>
        <div id="hospitalp" class="tab-pane fade">
            <?= $form->field($model, 'NT_HosptOrient')->textInput() ?>

        </div>
        <div id="incentivep" class="tab-pane fade">
            <?= $form->field($model, 'NT_IncentiveLP')->textInput() ?>

        </div>
        <div id="inclusionp" class="tab-pane fade">
            <?= $form->field($model, 'NT_IncluProg')->textInput() ?>

        </div>
        <div id="incrementalp" class="tab-pane fade">
            <?= $form->field($model, 'NT_IncrmtlProceeds')->textInput() ?>

        </div>
        <div id="Internshipp" class="tab-pane fade">
             <?= $form->field($model, 'NT_InternshipPay')->textInput() ?>

        </div>
        <div id="Maternityp" class="tab-pane fade">
            <?= $form->field($model, 'NT_MaternityBnft')->textInput() ?>

        </div>
        <div id="onetimep" class="tab-pane fade">
            <?= $form->field($model, 'NT_OneTimeIncentive')->textInput() ?>

        </div>
        <div id="Practicump" class="tab-pane fade">
            <?= $form->field($model, 'NT_Practicum')->textInput() ?>

        </div>
        <div id="Proctorshipp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Proctorship')->textInput() ?>

        </div>
        <div id="Reviewp" class="tab-pane fade">
            <?= $form->field($model, 'NT_ReviewNTax')->textInput() ?>
            <?= $form->field($model, 'NT_ReviewTax')->textInput() ?>

        </div>
        <div id="RICEp" class="tab-pane fade">
            <?= $form->field($model, 'NT_RICE')->textInput() ?>

        </div>
        <div id="Salaryp" class="tab-pane fade">
            <?= $form->field($model, 'NT_SalarySHS')->textInput() ?>

        </div>
        <div id="Specialexamp" class="tab-pane fade">
            <?= $form->field($model, 'NT_SpclExam')->textInput() ?>

        </div>
        <div id="Substitutionp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Substitution')->textInput() ?>

        </div>
        <div id="Trainingp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Training')->textInput() ?>

        </div>
        <div id="Transportationp" class="tab-pane fade">
            <?= $form->field($model, 'NT_TranspoAllow')->textInput() ?>

        </div>
        <div id="Tutorialp" class="tab-pane fade">
            <?= $form->field($model, 'NT_Tutorial')->textInput() ?>

        </div>
        <div id="Otherincomep" class="tab-pane fade">
            <?= $form->field($model, 'NT_OINTax')->textInput() ?>

            <?= $form->field($model, 'NT_OINTaxRem')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'NT_OITax')->textInput() ?>

            <?= $form->field($model, 'NT_OITaxRem')->textInput(['maxlength' => true]) ?>

        </div>
        
    </div>
            
    </div>
          
    </div>   
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
