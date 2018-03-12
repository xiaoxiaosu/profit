<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;


class ApiController extends Controller
{	

    public function actionList(){
    	var_dump(Yii::$app->params['apis']);

    }
}
