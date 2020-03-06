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
/* @var $searchModel app\models\search\TcDtrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Dtr Summary';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-dtr-index">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <p align="center">
        <?= Html::button('Create Per Employee', ['value'=>Url::to(['tc-dtr/create']),'class' => 'btn btn-success', 'id'=>'tcdtrId']) ?>
        
        <?= Html::a('Create Per Group', ['/tc-dtr/employee-list'], ['class'=>'btn btn-primary','target' => '_blank']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(['id' => 'tcdtrTbl','timeout'=>5000]) ?>
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

                'attribute' => 'UG_HAbsntLec',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HAbsntLecRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HCMTLec',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HCMTLecRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HLWOPLec',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HLWOPLecRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HAbsntLab',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HAbsntLabRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HCMTLab',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HCMTLabRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HLWOPLab',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HLWOPLabRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HAbsntClc',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HAbsntClcRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HCMTClc',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HCMTClcRem',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HLWOPClc',
                'hidden' => true
            ],
            [

                'attribute' => 'UG_HLWOPClcRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HAbsntLec',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HAbsntLecRem',
                'hidden' => true
            ],

            [

                'attribute' => 'GS_HCMTLec',
                'hidden' => true
            ],

            [

                'attribute' => 'GS_HCMTLecRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HLWOPLec',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HLWOPLecRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HAbsntLab',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HAbsntLabRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HCMTLab',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HCMTLabRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HLWOPLab',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HLWOPLabRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HAbsntClc',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HAbsntClcRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HCMTClc',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HCMTClcRem',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HLWOPClc',
                'hidden' => true
            ],
            [

                'attribute' => 'GS_HLWOPClcRem',
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
    'id'=>'tcId',
    'size'=>'modal-lg',
   'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
  ]);
 echo "<div id='contentTc'></div>";
Modal::end();

Modal::begin([
    'id' => 'tcdtr-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();

?>