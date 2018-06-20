<?php

namespace app\controllers;

class MemberController extends \yii\web\Controller
{
    public $layout = false;
    public function actionAuth()
    {
        return $this->render('auth');
    }

}
