<?php

namespace app\controllers;

class OrderController extends \yii\web\Controller
{
    public $layout = false;
    public function actionIndex(){
        return $this->render('index');
    }
    /**
     * 收银台页面
     */
    public function actionCheck()
    {
        return $this->render('check');
    }

}
