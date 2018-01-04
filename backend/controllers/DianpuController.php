<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use backend\models\Dianpu;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class DianpuController extends Controller
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
    	$model = Dianpu::find()->where(['id' => $id])->one();
    	if($model == NULL)
    		throw new HttpException('404', '找不到数据');
    	return $model;
    }

	public function actionIndex()
	{		
		$model = Dianpu::find()->all();		
		
		return $this->render('index', ['model' => $model]);
	}
	
	public function actionSave($id = NULL)
	{
		if($id == NULL)
			$model = new Dianpu;
		else 
			$model = $this->loadModel($id);
		
		$data = Yii::$app->request->post();
		if(isset($data['Dianpu']))
		{
			$date = date('Ymd');
			$file = UploadedFile::getInstance($model, 'pic');
			
			if($file){
				$ext = end((explode(".", $file->name)));
				$model->pic = time().$model->id.".{$ext}";
			
				$path = Yii::$app->params['upPath'] . $date . '/';
				$flag = $this->createDir($path);
				if($flag) {
					Yii::$app->session->setFlash('error', $flag);
					$this->redirect('dianpu/save');
				}
				$path = $path . $model->pic;
				if($file->saveAs($path)) $data['Dianpu']['pic'] = $date . '/' . $model->pic;
			}
			
			
			$data['Dianpu']['addtime'] = time();
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
		
		$this->redirect(['dianpu/index']);
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
