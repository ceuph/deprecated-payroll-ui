<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pay_period".
 *
 * @property string $PrdID
 * @property string $date_from
 * @property string $date_to
 */
class PayPeriod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_pay_period';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrdID', 'date_from', 'date_to'], 'required'],
            [['date_from', 'date_to'], 'safe'],
            [['PrdID'], 'string', 'max' => 32],
            [['PrdID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PrdID' => 'Prd ID',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
        ];
    }

    /**
     * @return array
     */
    public static function listItems()
    {
        return self::find()
            ->select(["CONCAT(CONVERT(varchar, date_from, 1), ' - ', CONVERT(varchar, date_to, 1)) AS name"])
            ->indexBy('PrdID')
            ->orderBy('date_from desc, date_to desc')
            ->column()
        ;
    }
}
