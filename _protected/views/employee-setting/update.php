<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeSetting */

$this->title = 'Update Employee Setting: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Employee Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'EmpID' => $model->EmpID, 'name' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="employee-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
