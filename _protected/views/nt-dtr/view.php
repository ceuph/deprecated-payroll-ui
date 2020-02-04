<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NtDtr */

$this->title = 'NT DTR';
$this->params['breadcrumbs'][] = ['label' => 'Nt Dtrs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nt-dtr-view">

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
            //'EmpID',
            'PrdID',
            'NT_DAbsnt',
            'NT_DAbsntRem',
            'NT_HLate',
            'NT_HUdt',
            'NT_DLWOP',
            'NT_DLWOPRem',
            'NT_OTHReg',
            'NT_OTHNDReg',
            'NT_OTHRegExc',
            'NT_OTHNDRegExc',
            'NT_OTHSpcl',
            'NT_OTHNDSpcl',
            'NT_OTHSpclExc',
            'NT_OTHNDSpclExc',
            'NT_OTHLgl',
            'NT_OTHNDLgl',
            'NT_OTHLglExc',
            'NT_OTHNDLglExc',
            'NT_OTHHolSun',
            'NT_OTHNDHolSun',
            'NT_OTHHolSunExc',
            'NT_OTHNDHolExc',
        ],
    ]) ?>

</div>
