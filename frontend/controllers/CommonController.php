<?php
namespace frontend\controllers;

use Yii;
use frontend\models\News;
use yii\web\Controller;

/**
 * Site controller
 */
class CommonController extends Controller
{
	public function actionIndex()
	{
		$model = News::find()->limit('4')->all();
		return $model;
	}
}
