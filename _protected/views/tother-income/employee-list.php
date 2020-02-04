<?php

use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;

use yii\widgets\Pjax;
use yii\bootstrap\Modal;

use yii\helpers\ArrayHelper;
use app\models\PayrollCampus;
use app\models\PayrollSchoolCollege;
use app\models\PayrollDepartment;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PayrollEmployeeListSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employee List for Teaching Other Income';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payroll-employee-list-index">

    <h1><?= Html::encode($this->title) ?></h1>

<?php Pjax::begin(['id' => 'expandTbl','timeout'=>5000]) ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EmpID',
            'LName',
            'FName',
            [
                'attribute'=> 'Campus',
                'filter' =>ArrayHelper::map(PayrollCampus::find()->asArray()->all(), 'campus_name', 'campus_name'),
                'value' => function ($data) {
                    return !empty ($data->Campus) ? $data->Campus : '-';
                },
            ],
            [
                'attribute'=> 'SchoolCollege',
                'filter' =>ArrayHelper::map(PayrollSchoolCollege::find()->asArray()->all(), 'school_college_name', 'school_college_name'),
                'value' => function ($data) {
                    return !empty ($data->SchoolCollege) ? $data->SchoolCollege : '-';
                },
            ],

            [
                'attribute'=> 'Department',
                'filter' =>ArrayHelper::map(PayrollDepartment::find()->asArray()->all(), 'department_name', 'department_name'),
                'value' => function ($data) {
                    return !empty ($data->Department) ? $data->Department : '-';
                },
            ],

            ['class' => 'yii\grid\ActionColumn',

                'template' => '{create}',
                'buttons' => [
                'create' => function ($url, $model, $key) {

                      return Html::a('<span class="glyphicon glyphicon-plus"></span>',$url,
                          [
                              'title' => 'Add-Other-Income',
                              'id' => 'update-tco-' . $model->EmpID,
                              'data-toggle' => 'modal',
                              'data-target' => '#tco-modals',
                              'data-id' => $key,
                              'data-pjax' => '0',
                              'onclick' => "ajaxmodal('#tco-modal', '" . Url::to(['tother-income/create-list','EmpID'=>$model->EmpID]) . "')"
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
    'id' => 'tco-modal',
    //'header' => '<h4 class="modal-title">Update</h4>',
    'size'=>'modal-lg',
    'clientOptions' => ['backdrop' => 'static', 'keyboard' => FALSE],
]); 
Modal::end();

?>
