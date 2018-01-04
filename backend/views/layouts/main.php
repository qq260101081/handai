<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
   
</head>
<body id="index">
    <?php $this->beginBody() ?>
    
        <h1>韩黛化妆品管理后台</h1>
		<div id="userInfo">
			<div style="height: 25px;">
				<a target="_blank" href="http://komeis.com/">网站首页</a> &nbsp;&nbsp;&nbsp;
				<a href="<?php echo Yii::$app->urlManager->createUrl('site/logout') ;?>">安全退出</a>
			</div>
			你好，管理员：<?php echo Yii::$app->user->identity->username;?>，今天是:<?php echo date('Y-m-d');?>
		</div>
		<ul id="globalNav">
			<h2>管理菜单</h2>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['single/single','type'=>1]) ;?>" >公司简介</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['single/single','type'=>2]) ;?>" >权威报告</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['quanwei/index']) ;?>" >权威报告图片</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['config/save']) ;?>" >网站信息</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['single/single','type'=>4]) ;?>" >招商加盟</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl('goods/index') ;?>" >产品管理</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>0]) ;?>" >动态管理</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>1]) ;?>" >护肤管理</a></li>
			<li><a href="<?php echo Yii::$app->urlManager->createUrl('links/index') ;?>" >友链管理</a></li>
		</ul>

    <?php $this->endBody() ?>
    <div class="wwwroot-top"></div>
    <div class="wwwroot-content">
       <?php echo $content;?>
    </div>
</body>
</html>
<?php $this->endPage() ?>
