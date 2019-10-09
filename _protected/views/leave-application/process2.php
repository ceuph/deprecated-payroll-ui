<?php

use app\models\LeaveCreditsProcessForm;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\LeaveCreditsProcessForm */
/* @var $payPeriods string[] */
?>
<h1><?= Html::encode('Process Leave-Absence Application') ?></h1>

<?php
$form = ActiveForm::begin([
    'id' => 'ug-leave-credits-process-form'
]);
?>
<?= $form->field($model, 'currentPeriod')->dropDownList($payPeriods) ?>
<?= $form->field($model, 'processPeriod')->dropDownList($payPeriods) ?>
<?= Html::submitButton('Process', ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end() ?>