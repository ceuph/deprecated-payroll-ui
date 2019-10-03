<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmployeeSetting */

$this->title = 'Create Employee Setting';
$this->params['breadcrumbs'][] = ['label' => 'Employee Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
