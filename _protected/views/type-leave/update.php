<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeLeave */

$this->title = 'Update Type Leave: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Type Leaves', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-leave-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
