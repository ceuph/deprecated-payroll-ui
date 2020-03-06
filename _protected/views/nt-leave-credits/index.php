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
/* @var $searchModel app\models\search\NtLeaveCreditsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Non-Teaching Leave Credits Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-leave-credits-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['nt-leave-credits/create']),'class' => 'btn btn-success', 'id'=>'ntId']) ?>

        <?= Html::a('Create Per Group', ['/nt-leave-credits/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>

<?php Pjax::begin(['id' => 'ntTbl','timeout'=>5000]) ?>
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
                'attribute'=> 'LC_NT_VLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_VLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_VLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_VL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_BLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_BLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_BLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_BL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ELDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_EL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SPLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_PLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_PLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_PLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_PL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_MLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_MLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_MLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ML',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ULAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ULDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_ULRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_UL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLWAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLWDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_SLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_NLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_NLDAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_NLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LC_NT_NL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'NT_OB',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'NT_OBRem',
                'hidden'=> true,
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
                              'id' => 'update-ugl-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#ugl-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#ugl-modal', '" . Url::to(['ug-leave-credits/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
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
      'id'=>'ntLId',
      'size'=>'modal-lg',
     'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
   echo "<div id='contentNt'></div>";
Modal::end();

Modal::begin([
    'id' => 'nt-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();
?>
