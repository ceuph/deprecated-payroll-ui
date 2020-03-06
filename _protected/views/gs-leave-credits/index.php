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
/* @var $searchModel app\models\search\GsLeaveCreditsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grad-School Leave Credits Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gs-leave-credits-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['gs-leave-credits/create']),'class' => 'btn btn-success', 'id'=>'gslId']) ?>
        
        <?= Html::a('Create Per Group', ['/gs-leave-credits/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>


<?php Pjax::begin(['id' => 'gslTbl','timeout'=>5000]) ?>
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
                'attribute'=> 'LEC_GSVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLVLAdj',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSOLVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSOLSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSBLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSBLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSBLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSBL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSELHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSEL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSMLAdj',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSMLHAWP',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSMLRem',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSML',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSULAdj',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSULHAWP',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSULRem',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSUL',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSSLWAdj',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSSLWHAWP',
                'hidden'=> true,
            ],

            [
                'attribute'=> 'LEC_GSSLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSSLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSNLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSNLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSNLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LEC_GSNL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'GSOBLec',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'GSOBLecRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSOLSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSBLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSBLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSBLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSBL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSELHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSEL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSMLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSMLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSMLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSML',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSULAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSULHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSULRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSUL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLWAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLWHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSSLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSNLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSNLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSNLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'LAB_GSNL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'GSOBLab',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'GSOBLabRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLVLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLVLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLVLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLVL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLSLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLSLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLSLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSOLSL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSBLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSBLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSBLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSBL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSELAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSELHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSELRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSEL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSPLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSPLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSPLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSPL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSMLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSMLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSMLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSML',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSULAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSULHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSULRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSUL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLWAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLWHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLWRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSSLW',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSNLAdj',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSNLHAWP',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSNLRem',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'CLC_GSNL',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'GSOBClc',
                'hidden'=> true,
            ],
            [
                'attribute'=> 'GSOBClcRem',
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
                              'id' => 'update-gsl-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#gsl-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#gsl-modal', '" . Url::to(['gs-leave-credits/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
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
          'id'=>'gsId',
          'size'=>'modal-lg',
         'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
        ]);
       echo "<div id='contentGs'></div>";
      Modal::end();

Modal::begin([
    'id' => 'gsl-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();

?>
