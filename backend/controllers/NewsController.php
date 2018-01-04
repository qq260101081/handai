<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\News;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
/**
 * Site controller
 */
class NewsController extends Controller
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
    	$model = News::find()->where(['id' => $id])->one();
    	if($model == NULL)
    		throw new HttpException('404', '找不到数据');
    	return $model;
    }

	public function actionIndex($type)
	{		
		$model = News::find()->where(['type'=>$type])->all();		
		
		return $this->render('index', ['model' => $model,'type' => $type]);
	}
	
	public function actionSave($id = NULL, $type = 0)
	{
		if($id == NULL)
			$model = new News;
		else 
			$model = $this->loadModel($id);
		
		$data = Yii::$app->request->post();
		if(isset($data['News']))
		{
			$date = date('Ymd');
			/* $file = UploadedFile::getInstance($model, 'pic');
			
			if($file){
				$ext = end((explode(".", $file->name)));
				$model->pic = time().$model->id.".{$ext}";
			
				$path = Yii::$app->params['upPath'] . $date . '/';
				$flag = $this->createDir($path);
				if($flag) {
					Yii::$app->session->setFlash('error', $flag);
					$this->redirect('news/save');
				}
				$path = $path . $model->pic;
				if($file->saveAs($path)) $data['News']['pic'] = $date . '/' . $model->pic;
			} */
			
			//if(!$data['News']['pic']) unset($data['News']['pic']);
			$data['News']['addtime'] = time();
			$data['News']['type'] = $type;
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
		
		return $this->render('save', ['model' => $model, 'type' => $type]);
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
		
		$this->redirect(['news/index','type' => $model->type]);
	}

	private function createDir($dirname)
	{
		//创建目录失败
		if (!file_exists($dirname) && !mkdir($dirname, 0777, true)) {
			return '创建目录失败！';
		} else if (!is_writeable($dirname)) {
			$this->stateInfo = $this->getStateInfo("ERROR_DIR_NOT_WRITEABLE");
			return '目录没有写入权限！';
		}
		return '';
	}
}
