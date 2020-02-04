<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\OtherDeductions */

$this->title = 'Other Deductions';
$this->params['breadcrumbs'][] = ['label' => 'Other Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="other-deductions-view">

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
            'FAWU_AF',
            'FAWU_UD',
            'FAWU_WF',
            'HDMF_UPG',
            'HDMF_MPL2',
            'Coop',
            'Tuition',
            'Tour',
            'AlumniTick',
            'ParkingFee',
            'GradExp',
            'TogaRent',
            'StuUniform',
            'Vaccine',
            'OtherDeduc',
            'AdjWTAX',
            'AdjHDMF',
            'AdjPHIC',
            'AdjSSS',
            'OPBasic',
            'OPEFA',
            'OPCOLA',
            'OPBonusXmas',
            'OPBonusMidYr',
            'OPTMP',
            'OPAdvIP',
            'OPAllowIP',
            'OPVLSL',
        ],
    ]) ?>

</div>
