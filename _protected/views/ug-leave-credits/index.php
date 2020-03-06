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
/* @var $searchModel app\models\search\UgLeaveCreditsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Under-Grad Leave Credits Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ug-leave-credits-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

     <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['ug-leave-credits/create']),'class' => 'btn btn-success', 'id'=>'uglId']) ?>
        
        <?= Html::a('Create Per Group', ['/ug-leave-credits/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>



<?php Pjax::begin(['id' => 'uglTbl','timeout'=>5000]) ?>
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
                'attribute'=> 'LEC_UGVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGOLSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGBLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGBLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGBLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGBL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGELHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGEL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGMLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGMLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGMLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGML',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGULAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGULHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGULRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGUL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLWAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLWHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGSLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGNLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGNLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGNLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_UGNL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'UGOBLec',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'UGOBLecRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGOLSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGBLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGBLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGBLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGBL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGELHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGEL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGMLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGMLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGMLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGML',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGULAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGULHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGULRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGUL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLWAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLWHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGSLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGNLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGNLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGNLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_UGNL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'UGOBLab',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'UGOBLabRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGOLSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGBLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGBLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGBLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGBL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGELHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGEL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGMLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGMLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGMLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGML',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGULAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGULHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGULRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGUL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLWAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLWHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGSLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGNLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGNLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGNLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_UGNL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'UGOBClc',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'UGOBClcRem',
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
    'id'=>'ugId',
    'size'=>'modal-lg',
   'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
  ]);
 echo "<div id='contentUg'></div>";
Modal::end();

Modal::begin([
    'id' => 'ugl-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();

?>
