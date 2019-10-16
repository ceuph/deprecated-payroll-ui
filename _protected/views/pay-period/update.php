<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PayPeriod */
/* @var $last app\models\PayPeriod */

$this->title = 'Update Pay Period: ' . $model->PrdID;
$this->params['breadcrumbs'][] = ['label' => 'Pay Periods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->PrdID, 'url' => ['view', 'id' => $model->PrdID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pay-period-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'last' => $last
    ]) ?>

</div>
