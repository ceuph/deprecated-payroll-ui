<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\NtLeaveCredits */

$this->title = 'Nt Leave Credits';
$this->params['breadcrumbs'][] = ['label' => 'Nt Leave Credits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nt-leave-credits-view">

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
            'LC_NT_VLAdj',
            'LC_NT_VLDAWP',
            'LC_NT_VLRem',
            'LC_NT_VL',
            'LC_NT_SLAdj',
            'LC_NT_SLDAWP',
            'LC_NT_SLRem',
            'LC_NT_SL',
            'LC_NT_BLAdj',
            'LC_NT_BLDAWP',
            'LC_NT_BLRem',
            'LC_NT_BL',
            'LC_NT_ELAdj',
            'LC_NT_ELDAWP',
            'LC_NT_ELRem',
            'LC_NT_EL',
            'LC_NT_SPLAdj',
            'LC_NT_SPLDAWP',
            'LC_NT_SPLRem',
            'LC_NT_SPL',
            'LC_NT_PLAdj',
            'LC_NT_PLDAWP',
            'LC_NT_PLRem',
            'LC_NT_PL',
            'LC_NT_MLAdj',
            'LC_NT_MLDAWP',
            'LC_NT_MLRem',
            'LC_NT_ML',
            'LC_NT_ULAdj',
            'LC_NT_ULDAWP',
            'LC_NT_ULRem',
            'LC_NT_UL',
            'LC_NT_SLWAdj',
            'LC_NT_SLWDAWP',
            'LC_NT_SLWRem',
            'LC_NT_SLW',
            'LC_NT_NLAdj',
            'LC_NT_NLDAWP',
            'LC_NT_NLRem',
            'LC_NT_NL',
            'NT_OB',
            'NT_OBRem',
        ],
    ]) ?>

</div>
