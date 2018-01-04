<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Dianpu;
use yii\data\Pagination;

/**
 * Site controller
 */
class DianpuController extends Controller
{
    function actionIndex()
    {
    	$data  = Dianpu::find();
    	$pages = new Pagination(['totalCount' => $data->count(), 'pageSize'=>'6']);
    	$model = $data->offset($pages->offset)->limit($pages->limit)->all();
    	return $this->render('index', ['model'=>$model, 'pages' => $pages]);
    }
}
