<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\Links;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
/**
 * Site controller
 */
class LinksController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                
                'rules' => [
                    [
                        'actions' => ['index','save','del'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            
        ];
    }  

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            	],
        	];
    }

    private function loadModel($id)
    {
    	$model = Links::find()->where(['id' => $id])->one();
    	if($model == NULL)
    		throw new HttpException('404', '找不到数据');
    	return $model;
    }

	public function actionIndex()
	{		
		$model = Links::find()->all();		
		
		return $this->render('index', ['model' => $model]);
	}
	
	public function actionSave($id = NULL)
	{
		if($id == NULL)
			$model = new Links;
		else 
			$model = $this->loadModel($id);
		
		$data = Yii::$app->request->post();
		if(isset($data['Links']))
		{
			$date = date('Ymd');
			
			$model->load($data);
			if($model->save())
			{
				Yii::$app->session->setFlash('success', '保存成功！');
				
			}
			else 
			{
				Yii::$app->session->setFlash('error', '保存失败！');
			}
		}
		
		return $this->render('save', ['model' => $model]);
	}
	
	public function actionDel($id)
	{
		$model = $this->loadModel($id);
		if($model->delete())
		{
			Yii::$app->session->setFlash('success', '删除成功！');
		}
		else
		{
			Yii::$app->session->setFlash('error', '删除失败！');
		}
		
		$this->redirect(['links/index']);
	}

	
}
