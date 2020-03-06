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
/* @var $searchModel app\models\search\NtDtrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Non-Teaching Dtrs Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nt-dtr-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['nt-dtr/create']),'class' => 'btn btn-success', 'id'=>'ntdtrId']) ?>

        <?= Html::a('Create Per Group', ['/nt-dtr/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>

<?php Pjax::begin(['id' => 'ntdtrTbl','timeout'=>5000]) ?>
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

                'attribute' => 'NT_DAbsnt',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_DAbsntRem',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HLate',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_HUdt',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_DLWOP',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_DLWOPRem',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHReg',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDReg',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHRegExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDRegExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHSpcl',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDSpcl',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHSpclExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDSpclExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHLgl',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDLgl',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHLglExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDLglExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHHolSun',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDHolSun',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHHolSunExc',
                'hidden' => true
            ],
            [

                'attribute' => 'NT_OTHNDHolExc',
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
      'id'=>'dtrId',
      'size'=>'modal-lg',
     'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
   echo "<div id='contentDtr'></div>";
Modal::end();

Modal::begin([
    'id' => 'ntdtr-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();
?>