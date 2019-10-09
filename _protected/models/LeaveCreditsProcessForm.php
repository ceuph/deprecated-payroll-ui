<?php


namespace app\models;

use yii\base\Model;
use Yii;


class LeaveCreditsProcessForm extends Model
{
    public $currentPeriod;
    public $processPeriod;

    public function rules()
    {
        return [
            [['currentPeriod', 'processPeriod'], 'required'],
            [['currentPeriod', 'processPeriod'], 'string']
        ];
    }
}