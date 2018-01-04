<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = '韩黛后台管理系统';
$this->params['breadcrumbs'][] = $this->title;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->title;?></title>
<link href="<?php echo Yii::$app->request->baseUrl;?>/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body id="login">
<?php $form = ActiveForm::begin(['id' => 'loginForm']); ?>
	<h3><?php echo $this->title;?></h3>
	<label for="userName"><span>用户名：</span><?php echo $form->field($model, 'username')->label(false) ?></label>
	<label for="passWord"><span>密码：</span><?php echo $form->field($model, 'password')->passwordInput()->label(false) ?></label>
	
	<div class="rememberMe">记住我</div>
	<?php echo $form->field($model, 'rememberMe')->checkbox()->label(false) ?>
	<?php echo Html::submitButton('登录', ['class' => 'bt', 'name' => 'login-button']) ?>

<?php ActiveForm::end(); ?>

</body>
</html>
