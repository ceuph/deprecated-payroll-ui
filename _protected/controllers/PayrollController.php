<?php
namespace app\controllers;

use yii\web\Controller;

class PayrollController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}