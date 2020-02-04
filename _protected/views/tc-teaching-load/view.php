<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TcTeachingLoad */

$this->title = 'Tc Teaching Load';
$this->params['breadcrumbs'][] = ['label' => 'Tc Teaching Loads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tc-teaching-load-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'template' => function($attribute, $index, $widget){
              if($attribute['value'])
              {
                  return "<tr><th>{$attribute['label']}</th><td>{$attribute['value']}</td></tr>";
              }
          },
        'attributes' => [
            'PrdID',
            //'EmpID',
            'UG_LoadLec',
            'UG_LoadLab',
            'UG_LoadClc',
            'GS_LoadLec',
            'GS_LoadLab',
            'GS_LoadClc',
            'TC_SemMonth',
        ],
    ]) ?>

</div>
