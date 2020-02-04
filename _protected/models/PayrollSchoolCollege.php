<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Payroll_school_college".
 *
 * @property int $id
 * @property string $school_college_name
 */
class PayrollSchoolCollege extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_school_college';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['school_college_name'], 'required'],
            [['school_college_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_college_name' => 'School College Name',
        ];
    }
}
