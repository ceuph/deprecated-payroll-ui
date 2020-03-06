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
/* @var $searchModel app\models\search\NtOtherIncomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Non-Teaching Other Income Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-other-income-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['nt-other-income/create']),'class' => 'btn btn-success', 'id'=>'ntotherId']) ?>

        <?= Html::a('Create Per Group', ['/nt-other-income/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>

   <?php Pjax::begin(['id' => 'ntotherTbl','timeout'=>5000]) ?>

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

                'attribute' => 'NT_AdvIP',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HazardPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Honorarium',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HRMAllowNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HRMAllowTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_IPAllow',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RLEAllowNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RLEAllowTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDAlumniTick',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDCCLoan',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDCOOP',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDFAWU',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDHDMFMPL',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDHDMFP',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDHDMFU',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDHF',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDMedicare',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDPHIC',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDSSSCondo',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDSSSL',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDSSSP',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDTaxAdv',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDTF',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDOthers',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RFDOthersRem',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNMidYrNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNMidYrTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNSLVLNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNSLVLTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNTMPNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNTMPTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNXmasNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BNXmasTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SHSBNTMPNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SHSBNTMPTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SSBNMidYrTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SSBNSLVLTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SSBNTMPTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SSBNXmasTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BonusNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BonusTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_AdjIPAllow',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_AdviserFee',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BackPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BackPayEFA',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BackPayCOLA',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_BigClassPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_CLPPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_ClassOrgAdvs',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_CommOutrchPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_CommImmersion',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Coordi',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_CompreExam',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_CriticWork',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_DentPreBoard',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_DentALE',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Differential',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_EnhcmtSeminar',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_EnrAdvising',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_ExpertisePrm',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_ExtProgPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Externship',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Goodwill',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_GratuityNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_GratuityTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HardshipPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HonorariumNF',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HosptOrient',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_IncluProg',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_IncentiveLP',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_IncrmtlProceeds',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_InternshipPay',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_MaternityBnft',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OneTimeIncentive',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Practicum',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Proctorship',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_ReviewNTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_ReviewTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_RICE',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SalarySHS',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_SpclExam',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Substitution',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Training',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_TranspoAllow',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_Tutorial',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OINTax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OINTaxRem',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OITax',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OITaxRem',
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
                              'id' => 'update-ntother-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#ntother-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#ntother-modal', '" . Url::to(['nt-other-income/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
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
      'id'=>'otherId',
      'size'=>'modal-lg',
     'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
   echo "<div id='contentOther'></div>";
Modal::end();

Modal::begin([
    'id' => 'ntother-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();
?>
