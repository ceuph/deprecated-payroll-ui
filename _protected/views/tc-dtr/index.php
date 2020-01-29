<?php

use yii\helpers\Html;
use yii\grid\GridView;

use yii\widgets\Pjax;
use yii\bootstrap\Modal;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TcDtrSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Dtrs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-dtr-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Create', ['value'=>Url::to(['tc-dtr/create']),'class' => 'btn btn-success', 'id'=>'tcdtrId']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

<?php Pjax::begin(['id' => 'tcdtrTbl','enablePushState' => false]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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
                'value' => function ($data) {
                    return $data->employeeList->Campus;
                },
            ],
            [
                'attribute'=> 'schoolCollege',
                'value' => function ($data) {
                    return $data->employeeList->SchoolCollege;
                },
            ],
            [
                'attribute'=> 'department',
                'value' => function ($data) {
                    return $data->employeeList->Department;
                },
            ],


            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [
                'update' => function ($url, $model, $key) {

                      return Html::a('<span class="glyphicon glyphicon-pencil"></span>',$url,
                          [
                              'title' => 'Update',
                              'id' => 'update-tcdtr-' . $model->EmpID . $model->PrdID,
                              'data-toggle' => 'modal',
                              'data-target' => '#tcdtr-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#tcdtr-modal', '" . Url::to(['tc-dtr/update','EmpID'=>$model->EmpID,'PrdID'=>$model->PrdID]) . "')"
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