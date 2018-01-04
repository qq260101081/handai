<?php 
	if($cid == 1)
		$this->title = '韩黛系列';
	elseif($cid == 2)
		$this->title = "KOMEI'S系列";
	else
		$this->title = '产品中心';

?>

        <div class="banner-ad banner-ad-margin">

        	<img width="1000" src="<?php echo Yii::$app->request->baseUrl;?>/images/about_ad.png" />

        </div>

        <div class="clear"></div>

        <div class="content content-no-bg">

        	<div class="position">网站首页 > <?php echo $this->title;?></div>

            <div class="content-title"><span><?php echo $this->title;?></span></div>

            <div class="content-boxs">

            	<div class="content-body">

                	<?php foreach ($model as $v):?>

                	<div class="goods">

                    	<a target="_blank" href="<?php echo Yii::$app->urlManager->createUrl(['goods/info','id'=>$v->id]) ;?>"><img src="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" /></a>

                        <span><?php echo $v->name;?></span>

                    </div>

                    <?php endforeach;?>

                </div>

                <div class="clear"></div>

            </div>

        </div>

        