<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Single;
use yii\web\Controller;
use frontend\models\Quanwei;
/**
 * Site controller
 */
class SingleController extends Controller
{
    
    public function actionAbout()
    {
    	$model = Single::find()->where(['type' => 1])->one();
        return $this->render('about', ['model' => $model]);
    }

    public function actionQuanwei()
    {
    	$model = Single::find()->where(['type' => 2])->one();
    	$imgs = Quanwei::find()->all();
    	return $this->render('quanwei', ['model' => $model,'imgs'=>$imgs]);
    }
    
    public function actionContact()
    {
    	$model = Single::find()->where(['type' => 3])->one();
    	return $this->render('contact', ['model' => $model]);
    }
    
    public function actionJoin()
    {
    	$model = Single::find()->where(['type' => 4])->one();
    	return $this->render('join', ['model' => $model]);
    }
    
    public function actionFangwei()
    {
    	
    	return $this->render('fangwei');
    }
}
