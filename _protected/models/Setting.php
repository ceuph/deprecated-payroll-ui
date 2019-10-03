<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Payroll_setting".
 *
 * @property string $name
 * @property resource $value
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Payroll_setting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'value'], 'required'],
            [['value'], 'string'],
            [['name'], 'string', 'max' => 128],
            [['name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'value' => 'Value',
        ];
    }

    public function beforeSave($insert)
    {
        $this->value = serialize($this->value);
        return parent::beforeSave($insert);
    }

    public function afterFind()
    {
        $this->name = trim($this->name);
        $this->value = unserialize($this->value);
        parent::afterFind();
    }
}
