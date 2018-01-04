<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\Config;

/**
 * Site controller
 */
class ConfigController extends Controller
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
                        'actions' => ['save'],
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

    
    
	public function actionSave()
	{		
		$model = Config::find()->where(['id'=>1])->one();
		
		$data = Yii::$app->request->post();
		if (isset($data['Config'])) {
			
			$model->load($data);
			if ($model->save()) {
				Yii::$app->session->setFlash('success', '保存成功！');
    			//Yii::$app->urlManager->createUrl(['single/single'], ['id' => $model->id]);
			}
			else 
			{
				Yii::$app->session->setFlash('error', '保存失败！');
			}
		}
		
		
		return $this->render('save', ['model' => $model]);
	}

    
}
