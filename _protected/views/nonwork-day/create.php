<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NonworkDay */

$this->title = 'Create Nonwork Day';
$this->params['breadcrumbs'][] = ['label' => 'Nonwork Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nonwork-day-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
