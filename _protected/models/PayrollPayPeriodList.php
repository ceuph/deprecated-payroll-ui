<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Payroll_pay_period_list".
 *
 * @property string $PrdID
 * @property string $decription
 * @property int $status
 */
class PayrollPayPeriodList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    const STATUS_YES = 1;
    const STATUS_NO = 2;

    public static function tableName()
    {
        return 'Payroll_pay_period_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PrdID', 'decription', 'status'], 'required'],
            [['status'], 'integer'],
            [['PrdID', 'decription'], 'string', 'max' => 50],
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
            'decription' => 'Description',
            'status' => 'Is Active',
        ];
    }

    public function getStatusList()
    {
        $typeArray = [
            self::STATUS_YES => 'Yes',
            self::STATUS_NO => 'No',
        ];

        return $typeArray;

    }

    public function getStatusName($name = null)
    {
        $name = (empty($status)) ? $this->status : $status;

        if($name === self::STATUS_YES)
        {
            return 'Yes';
        }else{

            return 'No';
        }
    }
}
