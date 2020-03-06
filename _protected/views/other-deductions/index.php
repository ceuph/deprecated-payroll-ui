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
/* @var $searchModel app\models\search\OtherDeductionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Other Deductions Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="other-deductions-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['other-deductions/create']),'class' => 'btn btn-success', 'id'=>'odeducId']) ?>

        <?= Html::a('Create Per Group', ['/other-deductions/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(['id' => 'odeducTbl','timeout'=>5000]) ?>

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

                'attribute' => 'FAWU_AF',
                'hidden' => true
            ],
            [

                'attribute' => 'FAWU_UD',
                'hidden' => true
            ],
            [

                'attribute' => 'FAWU_WF',
                'hidden' => true
            ],
            [

                'attribute' => 'HDMF_UPG',
                'hidden' => true
            ],
            [

                'attribute' => 'HDMF_MPL2',
                'hidden' => true
            ],
            [

                'attribute' => 'Coop',
                'hidden' => true
            ],
            [

                'attribute' => 'Tuition',
                'hidden' => true
            ],
            [

                'attribute' => 'Tour',
                'hidden' => true
            ],
            [

                'attribute' => 'AlumniTick',
                'hidden' => true
            ],
            [

                'attribute' => 'ParkingFee',
                'hidden' => true
            ],
            [

                'attribute' => 'GradExp',
                'hidden' => true
            ],
            [

                'attribute' => 'TogaRent',
                'hidden' => true
            ],
            [

                'attribute' => 'StuUniform',
                'hidden' => true
            ],
            [

                'attribute' => 'Vaccine',
                'hidden' => true
            ],
            [

                'attribute' => 'OtherDeduc',
                'hidden' => true
            ],
            [

                'attribute' => 'AdjWTAX',
                'hidden' => true
            ],
            [

                'attribute' => 'AdjHDMF',
                'hidden' => true
            ],
            [

                'attribute' => 'AdjPHIC',
                'hidden' => true
            ],
            [

                'attribute' => 'AdjSSS',
                'hidden' => true
            ],

            [

                'attribute' => 'OPBasic',
                'hidden' => true
            ],
            [

                'attribute' => 'OPEFA',
                'hidden' => true
            ],
            [

                'attribute' => 'OPCOLA',
                'hidden' => true
            ],
            [

                'attribute' => 'OPBonusXmas',
                'hidden' => true
            ],
            [

                'attribute' => 'OPBonusMidYr',
                'hidden' => true
            ],
            [

                'attribute' => 'OPTMP',
                'hidden' => true
            ],
            [

                'attribute' => 'OPAdvIP',
                'hidden' => true
            ],
            [

                'attribute' => 'OPAllowIP',
                'hidden' => true
            ],
            [

                'attribute' => 'OPVLSL',
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
                              'id' => 'update-odeduc-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#odeduc-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#odeduc-modal', '" . Url::to(['other-deductions/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
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
      'id'=>'deducId',
      'size'=>'modal-lg',
     'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
    ]);
   echo "<div id='contentDeduc'></div>";
Modal::end();

Modal::begin([
    'id' => 'odeduc-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();
?>