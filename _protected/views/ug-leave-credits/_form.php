<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;

use kartik\form\ActiveForm;
use kartik\builder\Form;

/* @var $this yii\web\View */
/* @var $model app\models\UgLeaveCredits */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ug-leave-credits-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]); ?>

    <?php
        echo Form::widget([
        'model'=>$model,
        'form'=>$form,
        'columns'=>3,
        'compactGrid'=>true,
        'attributes'=>[
            'EmpID'=>['type'=>Form::INPUT_TEXT],

            'PrdID'=>[
                'type'=>Form::INPUT_TEXT 
              
            ],

            'LEC_UGVLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGVLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGVLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGVL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLVLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLVLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLVLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLVL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGSLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGSLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGSLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGSL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLSLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLSLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLSLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGOLSL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGBLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGBLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGBLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGBL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGELAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGELHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGELRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

             'LEC_UGEL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGSPLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGSPLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGSPLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGSPL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGPLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGPLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGPLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGPL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGMLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGMLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGMLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGML'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGULAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGULHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGULRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGUL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGSLWAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGSLWHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGSLWRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGSLW'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LEC_UGNLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGNLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGNLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LEC_UGNL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'UGOBLec'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'UGOBLecRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGVLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGVLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGVLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGVL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLVLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLVLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLVLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLVL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLSLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLSLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LAB_UGOLSLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGOLSL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGBLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGBLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGBLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGBL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGELAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGELHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGELRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGEL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSPLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSPLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSPLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSPL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGPLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGPLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGPLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGPL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGMLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGMLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

            'LAB_UGMLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGML'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGULAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGULHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGULRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGUL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLWAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLWHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLWRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGSLW'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGNLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGNLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGNLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'LAB_UGNL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'UGOBLab'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'UGOBLabRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGVLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGVLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGVLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGVL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLVLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLVLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLVLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLVL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLSLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLSLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLSLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGOLSL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGBLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGBLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGBLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGBL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGELAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGELHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGELRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGEL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSPLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSPLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSPLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSPL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGPLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGPLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGPLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGPL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGMLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGMLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGMLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGML'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGULAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGULHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGULRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGUL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLWAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLWHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLWRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGSLW'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGNLAdj'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGNLHAWP'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGNLRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'CLC_UGNL'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'UGOBClc'=>[
                'type'=>Form::INPUT_TEXT
              
            ],
            'UGOBClcRem'=>[
                'type'=>Form::INPUT_TEXT
              
            ],

         
            'actions'=>[
                'type'=>Form::INPUT_RAW, 
                'value'=>'<div style="text-align: right; margin-top: 20px">' . 
                    Html::resetButton('Reset', ['class'=>'btn btn-secondary']) . ' ' .
                    Html::submitButton('Submit', ['type'=>'button', 'class'=>'btn btn-primary']) . 
                    '</div>'
            ],
        ]
    ]);

    ?>



    <?php ActiveForm::end(); ?>

</div>
