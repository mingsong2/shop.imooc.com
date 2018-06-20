<?php
namespace app\controllers;
use yii\web\Controller;

use app\models\Test;
class IndexController extends Controller{

    public function actionIndex(){
        // return $this->render('index');

        // $model = new Test;
        // $data = $model->find()->asArray()->one();
        $data = Test::find()->asArray()->one();

        return $this->render('index',array('data' => $data));
    }
}