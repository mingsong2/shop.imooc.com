<?php
namespace app\controllers;
use yii\web\Controller;

use app\models\Test;
class ProductController extends Controller{

    public function actionIndex(){
        // $this->layout = false;
        // return $this->render('index');
        return $this->renderPartial('index');
    }
}