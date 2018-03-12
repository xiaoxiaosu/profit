<?php

namespace app\modules\controllers;

use yii\web\Controller;

/**
 * Default controller for the `manage` module
 */
class IndexController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
    	$this->layout = 'common';
        return $this->render('index');
    }
}
