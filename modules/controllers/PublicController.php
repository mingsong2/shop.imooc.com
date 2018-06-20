<?php

namespace app\modules\controllers;

class PublicController extends \yii\web\Controller
{
    public function actionLogin()
    {
        $this->layout = false;
        return $this->render('login');
    }

}
