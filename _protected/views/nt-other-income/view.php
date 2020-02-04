<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NtOtherIncome */

$this->title = 'NT Other Income';
$this->params['breadcrumbs'][] = ['label' => 'Nt Other Incomes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nt-other-income-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'template' => function($attribute, $index, $widget){
              if($attribute['value'])
              {
                  return "<tr><th>{$attribute['label']}</th><td>{$attribute['value']}</td></tr>";
              }
          },
        'attributes' => [
            //'EmpID',
            'PrdID',
            'NT_AdvIP',
            'NT_HazardPay',
            'NT_Honorarium',
            'NT_HRMAllowNTax',
            'NT_HRMAllowTax',
            'NT_IPAllow',
            'NT_RLEAllowNTax',
            'NT_RLEAllowTax',
            'NT_RFDAlumniTick',
            'NT_RFDCCLoan',
            'NT_RFDCOOP',
            'NT_RFDFAWU',
            'NT_RFDHDMFMPL',
            'NT_RFDHDMFP',
            'NT_RFDHDMFU',
            'NT_RFDHF',
            'NT_RFDMedicare',
            'NT_RFDPHIC',
            'NT_RFDSSSCondo',
            'NT_RFDSSSL',
            'NT_RFDSSSP',
            'NT_RFDTax',
            'NT_RFDTaxAdv',
            'NT_RFDTF',
            'NT_RFDOthers',
            'NT_RFDOthersRem',
            'NT_BNMidYrNTax',
            'NT_BNMidYrTax',
            'NT_BNSLVLNTax',
            'NT_BNSLVLTax',
            'NT_BNTMPNTax',
            'NT_BNTMPTax',
            'NT_BNXmasNTax',
            'NT_BNXmasTax',
            'NT_SHSBNTMPNTax',
            'NT_SHSBNTMPTax',
            'NT_SSBNMidYrTax',
            'NT_SSBNSLVLTax',
            'NT_SSBNTMPTax',
            'NT_SSBNXmasTax',
            'NT_BonusNTax',
            'NT_BonusTax',
            'NT_AdjIPAllow',
            'NT_AdviserFee',
            'NT_BackPay',
            'NT_BackPayEFA',
            'NT_BackPayCOLA',
            'NT_BigClassPay',
            'NT_CLPPay',
            'NT_ClassOrgAdvs',
            'NT_CommOutrchPay',
            'NT_CommImmersion',
            'NT_Coordi',
            'NT_CompreExam',
            'NT_CriticWork',
            'NT_DentPreBoard',
            'NT_DentALE',
            'NT_Differential',
            'NT_EnhcmtSeminar',
            'NT_EnrAdvising',
            'NT_ExpertisePrm',
            'NT_ExtProgPay',
            'NT_Externship',
            'NT_Goodwill',
            'NT_GratuityNTax',
            'NT_GratuityTax',
            'NT_HardshipPay',
            'NT_HonorariumNF',
            'NT_HosptOrient',
            'NT_IncluProg',
            'NT_IncentiveLP',
            'NT_IncrmtlProceeds',
            'NT_InternshipPay',
            'NT_MaternityBnft',
            'NT_OneTimeIncentive',
            'NT_Practicum',
            'NT_Proctorship',
            'NT_ReviewNTax',
            'NT_ReviewTax',
            'NT_RICE',
            'NT_SalarySHS',
            'NT_SpclExam',
            'NT_Substitution',
            'NT_Training',
            'NT_TranspoAllow',
            'NT_Tutorial',
            'NT_OINTax',
            'NT_OINTaxRem',
            'NT_OITax',
            'NT_OITaxRem',
        ],
    ]) ?>

</div>
