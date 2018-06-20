<?php
namespace app\models;

use yii\db\ActiveRecord;

class Test extends ActiveRecord{
    // 表名
    public static function tableName(){
        return "{{%test}}";
    }
}