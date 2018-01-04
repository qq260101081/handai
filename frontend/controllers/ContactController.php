<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Config;
use yii\web\Controller;

/**
 * Site controller
 */
class ContactController extends Controller
{
    public function actionIndex()
    {
    	$model = Config::find()->where(['id'=>1])->one();
        return $this->render('/single/contact',['model'=>$model]);
    }
}
