<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */

$this->title = 'Create Teaching Load';
$this->params['breadcrumbs'][] = ['label' => 'Tc Teaching Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-teaching-load-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
