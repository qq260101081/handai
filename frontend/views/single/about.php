<?php 
	$this->title = '公司简介'
?>
        <div class="banner-ad banner-ad-margin">
        	<img width="1000" src="<?php echo Yii::$app->request->baseUrl;?>/images/about_ad.jpg" />
        </div>
        <div class="clear"></div>
        <div class="content content-no-bg">
        	<div class="position">网站首页 > 公司简介</div>
            <div class="content-title"><span>韩黛简介</span></div>
            <div class="content-boxs">
            	<div class="content-body">
                	<?php echo $model->content;?>
                </div>
            </div>
        </div>
    

