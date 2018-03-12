<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Test;

class IndexController extends Controller
{
    public function actionIndex(){

        $res = Test::find()->all();
        var_dump($res);    // res->2 

    }
}
