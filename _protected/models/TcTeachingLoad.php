<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "SH02_TCTEACHINGLOAD".
 *
 * @property string $PrdID
 * @property string $EmpID
 * @property string $UG_LoadLec
 * @property string $UG_LoadLab
 * @property string $UG_LoadClc
 * @property string $GS_LoadLec
 * @property string $GS_LoadLab
 * @property string $GS_LoadClc
 * @property string $TC_SemMonth
 */
class TcTeachingLoad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'SH02_TCTEACHINGLOAD';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrdID', 'EmpID'], 'required'],
            [['UG_LoadLec', 'UG_LoadLab', 'UG_LoadClc', 'GS_LoadLec', 'GS_LoadLab', 'GS_LoadClc', 'TC_SemMonth'], 'number'],
            [['PrdID', 'EmpID'], 'string', 'max' => 32],
            [['EmpID', 'PrdID'], 'unique', 'targetAttribute' => ['EmpID', 'PrdID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PrdID' => 'Prd ID',
            'EmpID' => 'Emp ID',
            'UG_LoadLec' => 'Undergrad - Lecture Load',
            'UG_LoadLab' => 'Undergrad - Laboratory Load',
            'UG_LoadClc' => 'Undergrad - Clinic Load',
            'GS_LoadLec' => 'Gradschool - Lecture Load',
            'GS_LoadLab' => 'Gradschool - Laboratory Load',
            'GS_LoadClc' => 'Gradschool - Clinic Load',
        ];
    }
}
