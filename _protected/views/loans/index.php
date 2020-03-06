<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use kartik\export\ExportMenu;

use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

use yii\helpers\ArrayHelper;
use app\models\PayrollCampus;
use app\models\PayrollSchoolCollege;
use app\models\PayrollDepartment;
use app\models\PayrollPayPeriodList;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loans Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loans-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['loans/create']),'class' => 'btn btn-success', 'id'=>'loansId']) ?>

        <?= Html::a('Create Per Group', ['/loans/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>

<?php Pjax::begin(['id' => 'loansTbl','timeout'=>5000]) ?>

<?php
    $gridColumns = [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'kartik\grid\ExpandRowColumn',
                'width' => '50px',
                'value' => function ($model, $key, $index, $column) {
                    return GridView::ROW_COLLAPSED;
                },
                // uncomment below and comment detail if you need to render via ajax
                // 'detailUrl'=>Url::to(['/site/book-details']),
                'detail' => function ($model, $key, $index, $column) {
                    return Yii::$app->controller->renderPartial('view',['model'=>$model,'EmpID'=>$model->EmpID, 'PrdID'=>$model->PrdID]);
                },
               
                'headerOptions' => ['class' => 'kartik-sheet-style'],
                'expandOneOnly' => true,
            ],

            [
                'attribute'=> 'PrdID',
                'filter' =>ArrayHelper::map(PayrollPayPeriodList::find()->asArray()->orderBy('PrdID DESC')->all(), 'PrdID', 'decription'),
                'value'=> function($data){

                    return $data->payPeriod->decription;
                }
            ],
            'EmpID',
            [
                'attribute'=> 'lname',
                'value' => function ($data) {
                    return $data->employeeList->LName;
                },
            ],
            [
                'attribute'=> 'fname',
                'value' => function ($data) {
                    return $data->employeeList->FName;
                },
            ],
            [
                'attribute'=> 'campus',
                'filter' =>ArrayHelper::map(PayrollCampus::find()->asArray()->all(), 'campus_name', 'campus_name'),
                'value' => function ($data) {
                    return !empty ($data->employeeList->Campus) ? $data->employeeList->Campus : '-';
                },
            ],
            [
                'attribute'=> 'schoolCollege',
                'filter' =>ArrayHelper::map(PayrollSchoolCollege::find()->asArray()->all(), 'school_college_name', 'school_college_name'),
                'value' => function ($data) {
                    return !empty ($data->employeeList->SchoolCollege) ? $data->employeeList->SchoolCollege : '-';
                },
            ],

            [
                'attribute'=> 'department',
                'filter' =>ArrayHelper::map(PayrollDepartment::find()->asArray()->all(), 'department_name', 'department_name'),
                'value' => function ($data) {
                    return !empty ($data->employeeList->Department) ? $data->employeeList->Department : '-';
                },
            ],
            
            [

                'attribute' => 'L_SSSAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSS',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSCAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSCPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSCHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSCAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SSSC',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFMPAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFMPPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFMPHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFMPAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFMP',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFCAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFCPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFCHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFCAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HDMFC',
                'hidden' => true
            ],
            [

                'attribute' => 'L_LOVEMPAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_LOVEMPPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_LOVEMPHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_LOVEMPAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_LOVEMP',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FAWUAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FAWUPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FAWUHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FAWUAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FAWU',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFFAWUAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFFAWUPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFFAWUHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFFAWUAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFFAWU',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingIntAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingIntPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingIntHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingIntAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingInt',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingPcplAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingPcplPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingPcplHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingPcplAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CEUHousingPcpl',
                'hidden' => true
            ],
            [

                'attribute' => 'L_MedicalAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_MedicalPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_MedicalHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_MedicalAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Medical',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TechnologyAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TechnologyPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TechnologyHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TechnologyAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Technology',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HospitalAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HospitalHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HospitalAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Hospital',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EmergencyAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EmergencyPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EmergencyHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EmergencyAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Emergency',
                'hidden' => true
            ],
            [

                'attribute' => 'L_UnifiedAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_UnifiedPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_UnifiedHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_UnifiedAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Unified',
                'hidden' => true
            ],
            [

                'attribute' => 'L_BDayAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_BDayPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_BDayHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_BDayAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_BDay',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TravelAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TravelPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TravelHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TravelAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Travel',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PettyCashAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PettyCashPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PettyCashHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PettyCashAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PettyCash',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SpecialAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SpecialPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SpecialHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SpecialAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Special',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PhilamcareAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PhilamcarePF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PhilamcareHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PhilamcareAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Philamcare',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SavingsDepAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SavingsDepPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SavingsDepHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SavingsDepAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SavingsDep',
                'hidden' => true
            ],[

                'attribute' => 'L_FixedDepAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FixedDepPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FixedDepHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FixedDepAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FixedDep',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PensionDepAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PensionDepPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PensionDepHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PensionDepAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PensionDep',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SeminarAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SeminarPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SeminarHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_SeminarAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Seminar',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CoopAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CoopPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CoopHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CoopAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Coop',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TuitionAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TuitionPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TuitionHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_TuitionAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Tuition',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FieldTripAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FieldTripPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FieldTripHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FieldTripAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_FieldTrip',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CCLoveAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CCLovePF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CCLoveHF',
                'hidden' => true
            ],[

                'attribute' => 'L_CCLoveAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_CCLove',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFCCLoveAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFCCLovePF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFCCLoveHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFCCLoveAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HFCCLove',
                'hidden' => true
            ],[

                'attribute' => 'L_EuroUSAIntAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAIntPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAIntHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAIntAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAInt',
                'hidden' => true
            ],[

                'attribute' => 'L_EuroUSAPcplAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAPcplPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAPcplHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAPcplAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_EuroUSAPcpl',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HolyLandTourAdj',
                'hidden' => true
            ],[

                'attribute' => 'L_HolyLandTourPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HolyLandTourHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HolyLandTourAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HolyLandTour',
                'hidden' => true
            ],[

                'attribute' => 'L_HKTravelAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HKTravelPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HKTravelHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HKTravelAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_HKTravel',
                'hidden' => true
            ],[

                'attribute' => 'L_PAFTETourAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PAFTETourPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PAFTETourHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PAFTETourAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_PAFTETour',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AsiaPacConfeAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AsiaPacConfePF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AsiaPacConfeHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AsiaPacConfeAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AsiaPacConfe',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ParkingAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ParkingPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ParkingHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ParkingAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Parking',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ComputerAdj',
                'hidden' => true
            ],[

                'attribute' => 'L_ComputerPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ComputerHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ComputerAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Computer',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPBasicAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPBasicPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPBasicHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPBasicAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPBasic',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPEFAAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPEFAPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPEFAHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPEFAAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPEFA',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPCOLAAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPCOLAPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPCOLAHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPCOLAAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_OPCOLA',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTax',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxSBAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxSBPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxSBHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxSBAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_AdjTaxSB',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPCOLAAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPCOLAPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPCOLAHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPCOLAAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPCOLA',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPEFAAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPEFAPF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPEFAHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPEFAAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_ALWOPEFA',
                'hidden' => true
            ],
            [

                'attribute' => 'L_VaccineAdj',
                'hidden' => true
            ],
            [

                'attribute' => 'L_VaccinePF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_VaccineHF',
                'hidden' => true
            ],
            [

                'attribute' => 'L_VaccineAdtnlD',
                'hidden' => true
            ],
            [

                'attribute' => 'L_Vaccine',
                'hidden' => true
            ],
           

            ['class' => 'yii\grid\ActionColumn',

            'template' => '{update}{delete}',
            
            'visibleButtons' => [
                    'delete' => function ($model) {
                        return \Yii::$app->user->can('theCreator');
                    },

                ],

            'buttons' => [
                'update' => function ($url, $model, $key) {

                      return Html::a('<span class="glyphicon glyphicon-pencil"></span>',$url,
                          [
                              'title' => 'Update',
                              'id' => 'update-loans-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#loans-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#loans-modal', '" . Url::to(['loans/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
                          ]
                      );


           

                  },
                ],
            ],
        

    ];
    
    echo ExportMenu::widget([
    'dataProvider' => $dataProvider,
    'columns' => $gridColumns,
    'filename'=> Yii::$app->controller->id.'-'.date('Y-m-d'),
    'dropdownOptions' => [
        'label' => 'Export All',
        'class' => 'btn btn-secondary'
    ],
    'exportConfig' => [
        ExportMenu::FORMAT_TEXT => false,
        ExportMenu::FORMAT_PDF => false,
         ExportMenu::FORMAT_HTML => false
    ]
    ]) . "<hr>\n".

    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => $gridColumns
           ]); 
?>
<?php Pjax::end() ?>
</div>
<?php
Modal::begin([
      'id'=>'loanId',
      'size'=>'modal-lg',
      'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]);
echo "<div id='contentLoan'></div>";
Modal::end();

Modal::begin([
    'id' => 'loans-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();
?>
