<?php
namespace app\controllers;
use yii\web\Controller;

use app\models\Test;
class IndexController extends Controller{
    public function actionIndex(){
        // $this->layout = false;
        // return $this->render('index');
        $this->layout = "layout1";
        return $this->render('index');
    }
}