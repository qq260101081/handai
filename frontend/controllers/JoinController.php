<?php
namespace frontend\controllers;

use Yii;
use frontend\models\About;
use yii\web\Controller;

/**
 * Site controller
 */
class JoinController extends Controller
{
	public function actionIndex()
    {
    	
        return $this->render('index');
    }
}
