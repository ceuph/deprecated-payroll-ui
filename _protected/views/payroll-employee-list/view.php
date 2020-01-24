<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollEmployeeList */

$this->title = $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Payroll Employee Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="payroll-employee-list-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->EmpID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->EmpID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'EmpID',
            'LName',
            'FName',
            'MName',
            'MI',
            'SchoolCollege',
            'Gender',
            'Department',
            'Position',
            'Campus',
            'MainJob',
        ],
    ]) ?>

</div>
