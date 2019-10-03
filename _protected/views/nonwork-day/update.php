<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NonworkDay */

$this->title = 'Update Nonwork Day: ' . $model->date;
$this->params['breadcrumbs'][] = ['label' => 'Nonwork Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->date, 'url' => ['view', 'id' => $model->date]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nonwork-day-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
