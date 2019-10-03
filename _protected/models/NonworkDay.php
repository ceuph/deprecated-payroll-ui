<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Payroll_nonwork_day".
 *
 * @property string $date
 * @property string $time_from
 * @property string $time_to
 * @property string $description
 * @property int $type
 */
class NonworkDay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_nonwork_day';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'time_from', 'time_to', 'description', 'type'], 'required'],
            [['date', 'time_from', 'time_to'], 'safe'],
            [['type'], 'integer'],
            [['description'], 'string', 'max' => 255],
            [['date'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'date' => 'Date',
            'time_from' => 'Time From',
            'time_to' => 'Time To',
            'description' => 'Description',
            'type' => 'Type',
        ];
    }
}
