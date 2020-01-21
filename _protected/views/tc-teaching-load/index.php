<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Teaching Loads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tc-teaching-load-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Teaching Load', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'PrdID',
            'EmpID',
            'UG_LoadLec',
            'UG_LoadLab',
            'UG_LoadClc',
            //'GS_LoadLec',
            //'GS_LoadLab',
            //'GS_LoadClc',
            //'TC_SemMonth',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
