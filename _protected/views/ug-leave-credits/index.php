<?php

use yii\helpers\Html;
use kartik\grid\GridView;

use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

use yii\helpers\ArrayHelper;
use app\models\PayrollCampus;
use app\models\PayrollSchoolCollege;
use app\models\PayrollDepartment;

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
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
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

            'PrdID',
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
        ],
    ]); ?>
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
