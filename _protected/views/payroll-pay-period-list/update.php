<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollPayPeriodList */

$this->title = 'Update Payroll Pay Period List: ' . $model->PrdID;
$this->params['breadcrumbs'][] = ['label' => 'Payroll Pay Period Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PrdID, 'url' => ['view', 'id' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payroll-pay-period-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
