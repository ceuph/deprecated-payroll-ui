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
/* @var $searchModel app\models\search\TotherIncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Other Income Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tother-income-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['tother-income/create']),'class' => 'btn btn-success', 'id'=>'totherId']) ?>
        
        <?= Html::a('Create Per Group', ['/tother-income/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>
<?php Pjax::begin(['id' => 'totherTbl','timeout'=>5000]) ?>
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

                'attribute' => 'TC_AdvIP',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HazardPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Honorarium',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HRMAllowNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HRMAllowTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_IPAllow',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RLEAllowNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RLEAllowTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDAlumniTick',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDCCLoan',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDCOOP',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDFAWU',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDHDMFMPL',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDHDMFP',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDHDMFU',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDHF',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDMedicare',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDPHIC',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDSSSCondo',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDSSSL',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDSSSP',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDTaxAdv',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDTF',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDOthers',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RFDOthersRem',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNMidYrNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNMidYrTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNSLVLNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNSLVLTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNTMPNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNTMPTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNXmasNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BNXmasTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SHSBNTMPNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SHSBNTMPTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SSBNMidYrTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SSBNSLVLTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SSBNTMPTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SSBNXmasTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BonusNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BonusTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_AdjIPAllow',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_AdviserFee',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BackPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BackPayEFA',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BackPayCOLA',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_BigClassPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_CLPPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_ClassOrgAdvs',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_CommOutrchPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_CommImmersion',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Coordi',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_CompreExam',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_CriticWork',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_DentPreBoard',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_DentALE',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Differential',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_EnhcmtSeminar',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_EnrAdvising',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_ExpertisePrm',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_ExtProgPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Externship',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Goodwill',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_GratuityNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_GratuityTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HardshipPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HolidayPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HonorariumNF',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_HosptOrient',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_IncluProg',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_IncentiveLP',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_IncrmtlProceeds',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_InternshipPay',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_MaternityBnft',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_OneTimeIncentive',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Practicum',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Proctorship',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_ReviewNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_ReviewTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_RICE',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SalarySHS',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_SpclExam',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Substitution',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Training',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_TranspoAllow',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_Tutorial',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_OINTax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_OINTaxRem',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_OITax',
                'hidden' => true
            ],
            [

                'attribute' => 'TC_OITaxRem',
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
                              'id' => 'update-tother-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#tother-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#tother-modal', '" . Url::to(['tother-income/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
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
    'id'=>'toId',
    'size'=>'modal-lg',
   'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
  ]);
 echo "<div id='contentTo'></div>";
Modal::end();

Modal::begin([
    'id' => 'tother-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();