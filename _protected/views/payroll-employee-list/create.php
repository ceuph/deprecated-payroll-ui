<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollEmployeeList */

$this->title = 'Create Payroll Employee List';
$this->params['breadcrumbs'][] = ['label' => 'Payroll Employee Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payroll-employee-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
