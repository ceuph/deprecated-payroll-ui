<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Loans */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="loans-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'PrdID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'EmpID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'L_SSSAdj')->textInput() ?>

    <?= $form->field($model, 'L_SSSPF')->textInput() ?>

    <?= $form->field($model, 'L_SSSHF')->textInput() ?>

    <?= $form->field($model, 'L_SSSAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_SSS')->textInput() ?>

    <?= $form->field($model, 'L_SSSCAdj')->textInput() ?>

    <?= $form->field($model, 'L_SSSCPF')->textInput() ?>

    <?= $form->field($model, 'L_SSSCHF')->textInput() ?>

    <?= $form->field($model, 'L_SSSCAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_SSSC')->textInput() ?>

    <?= $form->field($model, 'L_HDMFAdj')->textInput() ?>

    <?= $form->field($model, 'L_HDMFPF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFHF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HDMF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFMPAdj')->textInput() ?>

    <?= $form->field($model, 'L_HDMFMPPF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFMPHF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFMPAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HDMFMP')->textInput() ?>

    <?= $form->field($model, 'L_HDMFCAdj')->textInput() ?>

    <?= $form->field($model, 'L_HDMFCPF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFCHF')->textInput() ?>

    <?= $form->field($model, 'L_HDMFCAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HDMFC')->textInput() ?>

    <?= $form->field($model, 'L_LOVEMPAdj')->textInput() ?>

    <?= $form->field($model, 'L_LOVEMPPF')->textInput() ?>

    <?= $form->field($model, 'L_LOVEMPHF')->textInput() ?>

    <?= $form->field($model, 'L_LOVEMPAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_LOVEMP')->textInput() ?>

    <?= $form->field($model, 'L_FAWUAdj')->textInput() ?>

    <?= $form->field($model, 'L_FAWUPF')->textInput() ?>

    <?= $form->field($model, 'L_FAWUHF')->textInput() ?>

    <?= $form->field($model, 'L_FAWUAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_FAWU')->textInput() ?>

    <?= $form->field($model, 'L_HFFAWUAdj')->textInput() ?>

    <?= $form->field($model, 'L_HFFAWUPF')->textInput() ?>

    <?= $form->field($model, 'L_HFFAWUHF')->textInput() ?>

    <?= $form->field($model, 'L_HFFAWUAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HFFAWU')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingIntAdj')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingIntPF')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingIntHF')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingIntAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingInt')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingPcplAdj')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingPcplPF')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingPcplHF')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingPcplAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_CEUHousingPcpl')->textInput() ?>

    <?= $form->field($model, 'L_MedicalAdj')->textInput() ?>

    <?= $form->field($model, 'L_MedicalPF')->textInput() ?>

    <?= $form->field($model, 'L_MedicalHF')->textInput() ?>

    <?= $form->field($model, 'L_MedicalAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Medical')->textInput() ?>

    <?= $form->field($model, 'L_TechnologyAdj')->textInput() ?>

    <?= $form->field($model, 'L_TechnologyPF')->textInput() ?>

    <?= $form->field($model, 'L_TechnologyHF')->textInput() ?>

    <?= $form->field($model, 'L_TechnologyAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Technology')->textInput() ?>

    <?= $form->field($model, 'L_HospitalAdj')->textInput() ?>

    <?= $form->field($model, 'L_HospitalPF')->textInput() ?>

    <?= $form->field($model, 'L_HospitalHF')->textInput() ?>

    <?= $form->field($model, 'L_HospitalAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Hospital')->textInput() ?>

    <?= $form->field($model, 'L_EmergencyAdj')->textInput() ?>

    <?= $form->field($model, 'L_EmergencyPF')->textInput() ?>

    <?= $form->field($model, 'L_EmergencyHF')->textInput() ?>

    <?= $form->field($model, 'L_EmergencyAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Emergency')->textInput() ?>

    <?= $form->field($model, 'L_UnifiedAdj')->textInput() ?>

    <?= $form->field($model, 'L_UnifiedPF')->textInput() ?>

    <?= $form->field($model, 'L_UnifiedHF')->textInput() ?>

    <?= $form->field($model, 'L_UnifiedAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Unified')->textInput() ?>

    <?= $form->field($model, 'L_BDayAdj')->textInput() ?>

    <?= $form->field($model, 'L_BDayPF')->textInput() ?>

    <?= $form->field($model, 'L_BDayHF')->textInput() ?>

    <?= $form->field($model, 'L_BDayAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_BDay')->textInput() ?>

    <?= $form->field($model, 'L_TravelAdj')->textInput() ?>

    <?= $form->field($model, 'L_TravelPF')->textInput() ?>

    <?= $form->field($model, 'L_TravelHF')->textInput() ?>

    <?= $form->field($model, 'L_TravelAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Travel')->textInput() ?>

    <?= $form->field($model, 'L_PettyCashAdj')->textInput() ?>

    <?= $form->field($model, 'L_PettyCashPF')->textInput() ?>

    <?= $form->field($model, 'L_PettyCashHF')->textInput() ?>

    <?= $form->field($model, 'L_PettyCashAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_PettyCash')->textInput() ?>

    <?= $form->field($model, 'L_SpecialAdj')->textInput() ?>

    <?= $form->field($model, 'L_SpecialPF')->textInput() ?>

    <?= $form->field($model, 'L_SpecialHF')->textInput() ?>

    <?= $form->field($model, 'L_SpecialAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Special')->textInput() ?>

    <?= $form->field($model, 'L_PhilamcareAdj')->textInput() ?>

    <?= $form->field($model, 'L_PhilamcarePF')->textInput() ?>

    <?= $form->field($model, 'L_PhilamcareHF')->textInput() ?>

    <?= $form->field($model, 'L_PhilamcareAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Philamcare')->textInput() ?>

    <?= $form->field($model, 'L_SavingsDepAdj')->textInput() ?>

    <?= $form->field($model, 'L_SavingsDepPF')->textInput() ?>

    <?= $form->field($model, 'L_SavingsDepHF')->textInput() ?>

    <?= $form->field($model, 'L_SavingsDepAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_SavingsDep')->textInput() ?>

    <?= $form->field($model, 'L_FixedDepAdj')->textInput() ?>

    <?= $form->field($model, 'L_FixedDepPF')->textInput() ?>

    <?= $form->field($model, 'L_FixedDepHF')->textInput() ?>

    <?= $form->field($model, 'L_FixedDepAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_FixedDep')->textInput() ?>

    <?= $form->field($model, 'L_PensionDepAdj')->textInput() ?>

    <?= $form->field($model, 'L_PensionDepPF')->textInput() ?>

    <?= $form->field($model, 'L_PensionDepHF')->textInput() ?>

    <?= $form->field($model, 'L_PensionDepAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_PensionDep')->textInput() ?>

    <?= $form->field($model, 'L_SeminarAdj')->textInput() ?>

    <?= $form->field($model, 'L_SeminarPF')->textInput() ?>

    <?= $form->field($model, 'L_SeminarHF')->textInput() ?>

    <?= $form->field($model, 'L_SeminarAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Seminar')->textInput() ?>

    <?= $form->field($model, 'L_CoopAdj')->textInput() ?>

    <?= $form->field($model, 'L_CoopPF')->textInput() ?>

    <?= $form->field($model, 'L_CoopHF')->textInput() ?>

    <?= $form->field($model, 'L_CoopAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Coop')->textInput() ?>

    <?= $form->field($model, 'L_TuitionAdj')->textInput() ?>

    <?= $form->field($model, 'L_TuitionPF')->textInput() ?>

    <?= $form->field($model, 'L_TuitionHF')->textInput() ?>

    <?= $form->field($model, 'L_TuitionAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Tuition')->textInput() ?>

    <?= $form->field($model, 'L_FieldTripAdj')->textInput() ?>

    <?= $form->field($model, 'L_FieldTripPF')->textInput() ?>

    <?= $form->field($model, 'L_FieldTripHF')->textInput() ?>

    <?= $form->field($model, 'L_FieldTripAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_FieldTrip')->textInput() ?>

    <?= $form->field($model, 'L_CCLoveAdj')->textInput() ?>

    <?= $form->field($model, 'L_CCLovePF')->textInput() ?>

    <?= $form->field($model, 'L_CCLoveHF')->textInput() ?>

    <?= $form->field($model, 'L_CCLoveAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_CCLove')->textInput() ?>

    <?= $form->field($model, 'L_HFCCLoveAdj')->textInput() ?>

    <?= $form->field($model, 'L_HFCCLovePF')->textInput() ?>

    <?= $form->field($model, 'L_HFCCLoveHF')->textInput() ?>

    <?= $form->field($model, 'L_HFCCLoveAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HFCCLove')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAIntAdj')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAIntPF')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAIntHF')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAIntAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAInt')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAPcplAdj')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAPcplPF')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAPcplHF')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAPcplAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_EuroUSAPcpl')->textInput() ?>

    <?= $form->field($model, 'L_HolyLandTourAdj')->textInput() ?>

    <?= $form->field($model, 'L_HolyLandTourPF')->textInput() ?>

    <?= $form->field($model, 'L_HolyLandTourHF')->textInput() ?>

    <?= $form->field($model, 'L_HolyLandTourAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HolyLandTour')->textInput() ?>

    <?= $form->field($model, 'L_HKTravelAdj')->textInput() ?>

    <?= $form->field($model, 'L_HKTravelPF')->textInput() ?>

    <?= $form->field($model, 'L_HKTravelHF')->textInput() ?>

    <?= $form->field($model, 'L_HKTravelAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_HKTravel')->textInput() ?>

    <?= $form->field($model, 'L_PAFTETourAdj')->textInput() ?>

    <?= $form->field($model, 'L_PAFTETourPF')->textInput() ?>

    <?= $form->field($model, 'L_PAFTETourHF')->textInput() ?>

    <?= $form->field($model, 'L_PAFTETourAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_PAFTETour')->textInput() ?>

    <?= $form->field($model, 'L_AsiaPacConfeAdj')->textInput() ?>

    <?= $form->field($model, 'L_AsiaPacConfePF')->textInput() ?>

    <?= $form->field($model, 'L_AsiaPacConfeHF')->textInput() ?>

    <?= $form->field($model, 'L_AsiaPacConfeAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_AsiaPacConfe')->textInput() ?>

    <?= $form->field($model, 'L_ParkingAdj')->textInput() ?>

    <?= $form->field($model, 'L_ParkingPF')->textInput() ?>

    <?= $form->field($model, 'L_ParkingHF')->textInput() ?>

    <?= $form->field($model, 'L_ParkingAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Parking')->textInput() ?>

    <?= $form->field($model, 'L_ComputerAdj')->textInput() ?>

    <?= $form->field($model, 'L_ComputerPF')->textInput() ?>

    <?= $form->field($model, 'L_ComputerHF')->textInput() ?>

    <?= $form->field($model, 'L_ComputerAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Computer')->textInput() ?>

    <?= $form->field($model, 'L_OPBasicAdj')->textInput() ?>

    <?= $form->field($model, 'L_OPBasicPF')->textInput() ?>

    <?= $form->field($model, 'L_OPBasicHF')->textInput() ?>

    <?= $form->field($model, 'L_OPBasicAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_OPBasic')->textInput() ?>

    <?= $form->field($model, 'L_OPEFAAdj')->textInput() ?>

    <?= $form->field($model, 'L_OPEFAPF')->textInput() ?>

    <?= $form->field($model, 'L_OPEFAHF')->textInput() ?>

    <?= $form->field($model, 'L_OPEFAAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_OPEFA')->textInput() ?>

    <?= $form->field($model, 'L_OPCOLAAdj')->textInput() ?>

    <?= $form->field($model, 'L_OPCOLAPF')->textInput() ?>

    <?= $form->field($model, 'L_OPCOLAHF')->textInput() ?>

    <?= $form->field($model, 'L_OPCOLAAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_OPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxAdj')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxPF')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxHF')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_AdjTax')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxSBAdj')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxSBPF')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxSBHF')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxSBAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_AdjTaxSB')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPCOLAAdj')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPCOLAPF')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPCOLAHF')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPCOLAAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPCOLA')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPEFAAdj')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPEFAPF')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPEFAHF')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPEFAAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_ALWOPEFA')->textInput() ?>

    <?= $form->field($model, 'L_VaccineAdj')->textInput() ?>

    <?= $form->field($model, 'L_VaccinePF')->textInput() ?>

    <?= $form->field($model, 'L_VaccineHF')->textInput() ?>

    <?= $form->field($model, 'L_VaccineAdtnlD')->textInput() ?>

    <?= $form->field($model, 'L_Vaccine')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
