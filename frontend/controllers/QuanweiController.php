<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Quanwei;
use yii\web\Controller;

/**
 * Site controller
 */
class QuanweiController extends Controller
{
	public function actionIndex()
	{
		 
		return $this->render('index');
	}
}
