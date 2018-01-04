<?php
namespace frontend\controllers;

use Yii;
use frontend\models\Goods;
use yii\web\Controller;

/**
 * Site controller
 */
class GoodsController extends Controller
{
    public function actionIndex($cid = NULL)
    {
    	if($cid) 
    		$model = Goods::find()->where(['pid'=>$cid])->all();
    	else
    		$model = Goods::find()->all();
        return $this->render('index', ['model' => $model,'cid' => $cid]);
    }
    
    public function actionInfo($id)
    {
    	$model = Goods::find()->where(['id'=>$id])->one();
    	return $this->render('info', ['model' => $model]);
    }
}
