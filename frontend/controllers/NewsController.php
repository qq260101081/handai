<?php
namespace frontend\controllers;

use Yii;
use frontend\models\News;
use yii\web\Controller;
use yii\data\Pagination;

class NewsController extends Controller
{
	public function actionIndex($type = 0)
	{
		$data = News::find()->where(['type' => $type])->orderBy(['id'=>'desc']);
		$pages = new Pagination(['totalCount' => $data->count(), 'pageSize'=>'15']);
		
		$model = $data->offset($pages->offset)->limit($pages->limit)->all();
		
		return $this->render('index', ['model'=>$model, 'pages' => $pages,'type'=>$type]);
	}
	
	public function actionContent($id = null)
	{
		$model = News::find()->where(['id'=>$id])->one();
		return $this->render('content', ['model' => $model]);
	}
}
