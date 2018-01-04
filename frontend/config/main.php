<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
        	'enablePrettyUrl' => true,
        	'showScriptName' => false,
        	//'suffix' => '.html',
        	'rules' => [
        		''        => 'index/index',
        		'about.html'   => 'single/about',
        		'quanwei.html' => 'single/quanwei',
        		'contact.html' => 'contact/index',
        		'join.html'    => 'single/join',
        		'ditu.html'    => 'index/ditu',
        		
        		'goods/<cid:\d+>/' => 'goods/index',
        		'goods/<id:\d+>.html' => 'goods/info',
        		'news/<type:\d+>/' => 'news/index',
        		'news/<id:\d+>.html' => 'news/content',
			] 
        ],
        'request'=>[
        'class' => 'common\components\Request',
        'web'=> '/frontend/web'
        
        ],
    ],
    'params' => $params,
    'defaultRoute' => 'index',
];
