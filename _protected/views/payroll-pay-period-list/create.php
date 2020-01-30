<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayrollPayPeriodList */

$this->title = 'Create Payroll Pay Period List';
$this->params['breadcrumbs'][] = ['label' => 'Payroll Pay Period Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payroll-pay-period-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
       // 'last' => $last,
    ]) ?>

</div>
