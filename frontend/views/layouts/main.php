<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use frontend\models\News;use frontend\models\Links;
$news = News::find()->where(['type'=>0])->limit('2')->orderBy(['id'=>'desc'])->all();$links = Links::find()->all();


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
	<meta name="description" content="韩黛化妆品是国内知名护肤品引领专家,公司旗下品牌：KOMEIS康美药妆、CHOLANIS俏兰氏、Draenor    、菲拉美拉、聚焦“药妆产品”，旗下主要产品有精品专业护理祛痘祛印系列、天然蚕丝系列、护眼系列、护唇系列、体膜系列等，是淘宝网微商最有竞争力的化妆品品牌之一，产品包装独特大方 环保，品质精良，功效突出，深入广大消费者的厚爱，其中：美白补水面膜、抗痘面膜，祛痘凝胶、护理手霜，抗痘祛印霜，植物净透泡沫洗面奶，防裂保湿润唇膏，等独家产品更是网销化妆品的明星单品。详情登陆韩黛化妆品官网：www.komeis.com。"/>
	<meta name="keywords" content="韩黛,韩黛官网,康美药妆,康美,康美蚕丝面膜,香港康美药妆,香港康美" />
    <link rel="shortcut icon" href="<?php echo Yii::$app->request->baseUrl;?>/images/20150207050457832.ico"/>
    <link rel="bookmark" href="<?php echo Yii::$app->request->baseUrl;?>/images/20150207050457832.ico"/>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="keifu">
  <div class="keifu_tab">
    <div class="icon_keifu"></div>
    <div class="keifu_box">
      <div class="keifu_head"><a href="javascript:void(0)" class="keifu_close"></a></div>
      <ul class="keifu_con">
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2689116151&site=qq&menu=yes"><img src="<?php echo Yii::$app->request->baseUrl;?>/images/qq.png"/></a></li>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1787711272&site=qq&menu=yes"><img src="<?php echo Yii::$app->request->baseUrl;?>/images/qq.png"/></a></li>
        <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2689116151&site=qq&menu=yes"><img src="<?php echo Yii::$app->request->baseUrl;?>/images/qq.png"/></a></li>
        <li class="weixin"><img src="<?php echo Yii::$app->request->baseUrl;?>/images/qr0.gif" width="96" alt="官方微信" /></li>
      </ul>
      <div class="keifu_bot"></div>
    </div>
  </div>
</div>


    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="header">
        	<div class="login-tips">
            	<div class="min-width">
                    <div class="login-tips-left">欢迎来到韩黛官方网站！</div>
                    <div class="login-tips-right">
                        <ul>
                        	 <li class="weixin">
                            	<div class="bdsharebuttonbox" data-tag="share_1">
                                <a style="padding-left:20px; background-image:url(<?php echo Yii::$app->request->baseUrl;?>/images/0588.png); background-repeat:no-repeat; background-position:left;" href="http://komeis.com/wap/web/">手机网站</a>
                                </div>
                            </li>
                            
                            <li class="weixin">
                            	<div class="bdsharebuttonbox" data-tag="share_1">
                                <a style="padding-left: 20px;" class="bds_weixin" data-cmd="weixin">分享到微信</a>
                                </div>
                            </li>
                            <li class="sina">
                            	
                               
                                <a target="_blank" href="http://weibo.com/5182982385/profile?topnav=1&wvr=6"><img src="<?php echo Yii::$app->request->baseUrl;?>/images/sina.gif" />分享到微博</a>
                            </li>
                            <script>
	window._bd_share_config = {
		common : {
			bdText : '韩黛从2014年中创办至今迅速发展，进入大流通发展渠道。是一家集产品研发ODM、生产和多元化美容品重视研发创新公司，是国内化妆品行业风采独具、潜力非凡的新锐力量。韩黛公司秉承“品质第一，服务第一，团队第一”的企业宗旨，坚持“天然、环保、健康、纯真”的品牌理念。凭籍“勇于探索，敢于拼搏”的企业精神，以市场为导向，以消费者为核心，研发销售美容药妆护肤精品，提升中国化妆品的品质。健康生产和优质服务，成就了一大批国内知名品牌的辉煌。',	
			bdDesc : '韩黛从2014年中创办至今迅速发展，进入大流通发展渠道。是一家集产品研发ODM、生产和多元化美容品重视研发创新公司',	
			bdUrl : 'http://komeis.com/', 	
			bdPic : 'http://komeis.com/frontend/web/images/about_ad.png'
		},
		share : [{
			"bdSize" : 16
		}],
		
	}
	with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>

                            <li>
                                <a href="#" onclick="AddFavorite('广州韩黛化妆品有限公司','http://komeis.com/')" href="javascript:void(0)">收藏本站</a> | 
                            </li>
                            <li>
                                <a href="#" onclick="SetHome(this,'http://komeis.com/')" href="javascript:void(0)"> 设为首页</a> | 
                            </li>
                            <li>
                                <a> 美丽热线：<span>400-0921-889</span></a>
                            </li>
                        </ul>
                    </div>
            	</div>
            </div>
            
            <div class="border-top"></div>
            
            <div class="site-title min-width">
            	
            	<div class="site-title-left">
                	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/logo.gif" />
                    <img style="padding-top: 15px" src="<?php echo Yii::$app->request->baseUrl;?>/images/logotext.gif" />
                    <img style="padding-top: 15px" src="<?php echo Yii::$app->request->baseUrl;?>/images/guanfang.gif" />
                </div>
                <div class="site-title-right">
                	<ul>
                    	<li style="margin-top:11px; background:url(<?php echo Yii::$app->request->baseUrl;?>/images/head-li-bg.png) right no-repeat;">
                        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/logo3.gif" />
                            <div>国家化妆品中心</div>
                        </li>
                        <li style="background:url(Public/images/head-li-bg.png) right no-repeat;">
                        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/logo1.gif" />
                            <div>国际实验室</div>
                        </li>
                        <li style="margin-top:2px;">
                        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/logo2.gif" />
                            <div>国家质量检验</div>
                        </li>
                    </ul>
                </div>
               
            </div>
            <div class="clear"></div>
            <div class="nav">
            	<ul class="min-width">					
                	<li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('index/index') ;?>">网站首页</a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('single/about') ;?>">企业简介</a>
                    </li>
                    <li id="goods-center">
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('goods/index') ;?>">产品中心</a>
                        <div class="position-list">
                        	<a href="<?php echo Yii::$app->urlManager->createUrl(['goods/index','cid' => 1]) ;?>">韩黛系列</a>
                            <a href="<?php echo Yii::$app->urlManager->createUrl(['goods/index', 'cid' => 2]) ;?>">KOMEI'S系列</a>
                        </div>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('single/quanwei') ;?>">权威报告</a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>0]) ;?>">韩黛动态</a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('contact/index') ;?>">联系我们</a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('single/join') ;?>">招商加盟</a>
                    </li>
                    <li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>1]) ;?>">护肤百科</a>
                    </li>
                    <!--<li>
                    	<a href="<?php echo Yii::$app->urlManager->createUrl('dianpu/index') ;?>">旗舰店铺</a>
                    </li>-->
                    <li>
                    	<a target="_blank" href="http://shop1417193011416.1688.com/">阿里店铺</a>
                    </li>                    <li>                    	<a href="<?php echo Yii::$app->urlManager->createUrl('index/ditu') ;?>">网站地图</a>                    </li>
                </ul>
            </div>
            <div class="nav-bottom"></div>
        </div>

        <?= $content ?>
        
    </div>
    
     


    <div class="bottom">
        	<div class="min-width">
                <div class="content-left">
                    <img src="<?php echo Yii::$app->request->baseUrl;?>/images/logo5.png" />
                </div>
                <div class="content-center">
                	<div class="news-type">韩黛动态 <a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>0]) ;?>"><img src="<?php echo Yii::$app->request->baseUrl;?>/images/more.png" /></a></div>
                	<ul>
                		<?php foreach ($news as $v):?>
                    	<li>
                        	<a target="_blank" href="<?php echo Yii::$app->urlManager->createUrl(['news/content','id'=>$v->id]) ;?>"><?php echo $v->title;?></a>
                            <span>【<?php echo date('Y-m-d', $v->addtime);?>】</span>
                        </li>
                        <?php endforeach;?>
                        
                    </ul>
                    <div style="text-align:center;">
                    	
                    	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/tubai.jpg">
                     
                    </div>
                </div>
                <div class="content-right">
                	<div class="contact-phone">美丽热线：<span>400-0921-889</span></div>
                    <ul>
                    	<li>
                        	<img width="90" src="<?php echo Yii::$app->request->baseUrl;?>/images/qr0.gif" />
                            <span>服务号</span>
                        </li>
                        <li>
                        	<img width="90" src="<?php echo Yii::$app->request->baseUrl;?>/images/qr1.gif" />
                            <span>订阅号</span>
                        </li>
                        <li>
                        	<img width="90" src="<?php echo Yii::$app->request->baseUrl;?>/images/qr2.png" />
                            <span>手机网站</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	<div class="clear"></div>
    <div class="footer">
    	<div>
        	<a href="<?php echo Yii::$app->urlManager->createUrl('index/index') ;?>">网站首页</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl('single/about') ;?>">企业简介</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl(['goods/index', 'cid' => 2]) ;?>">KOMEI'S系列</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl(['goods/index','cid' => 1]) ;?>">韩黛系列</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl('single/quanwei') ;?>">权威报告</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>0]) ;?>">韩黛动态</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl('contact/index') ;?>">联系我们</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl('single/join') ;?>">招商加盟</a>
            <a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>1]) ;?>">护肤百科</a>
            <a target="_blank" href="http://shop1417193011416.1688.com/">阿里店铺</a>
        </div>
        <div>
        	<span><b>友情链接：</b></span>			<?php foreach ($links as $v):?>
            <a href="<?php echo $v->url; ?>" target="_blank"><?php echo $v->name;?></a>			<?php endforeach;?>
        </div>
        <div>Copyright（C） 2005 - 2014 Vowoo. All Rights Reserved</div>
    </div>


    <?php $this->endBody() ?>
    <script>

	
window.addEvent('domready', function(){
				SexyLightbox = new SexyLightBox({color:'black', dir: '<?php echo Yii::$app->request->baseUrl;?>/images'});
			});	
 
    //加入收藏

function AddFavorite(title, url) {
 try {
   window.external.addFavorite(url, title);
 }
catch (e) {
   try {
    window.sidebar.addPanel(title, url, "");
  }
   catch (e) {
     alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请进入新网站后使用Ctrl+D进行添加");
   }
 }
}
 
    //设为首页
 
    function SetHome(obj,url){
  try{
    obj.style.behavior='url(#default#homepage)';
    obj.setHomePage(url);
  }catch(e){
    if(window.netscape){
     try{
       netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
     }catch(e){
       alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
     }
    }else{
    alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
    }
 }
}
 
	$("#goods-center").mouseover(function(){
		$("#goods-center").css('background-color','#252525');
    	$('.position-list').slideDown(300);   
	}); 
	
	$("#goods-center").mouseleave(function(){     
		$('.position-list').slideUp(200);
		$("#goods-center").css('background-color','#00a0a0');
	}); 

	
  </script>   
</body>
</html>
<?php $this->endPage() ?>
