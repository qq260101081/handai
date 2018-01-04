<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\Single;

/**
 * Site controller
 */
class SingleController extends Controller
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
                        'actions' => ['single'],
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

    
    
	public function actionSingle($type = 0)
	{		
		$model = Single::find()->where(['type' => $type])->one();
		
		$data = Yii::$app->request->post();
		if (isset($data['Single'])) {
			
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
		
		
		return $this->render('single', ['model' => $model]);
	}

    
}
