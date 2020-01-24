<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollEmployeeList */

$this->title = 'Update Payroll Employee List: ' . $model->EmpID;
$this->params['breadcrumbs'][] = ['label' => 'Payroll Employee Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->EmpID, 'url' => ['view', 'id' => $model->EmpID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payroll-employee-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
