<?php 
	
		$this->title = '产品详情';
	

?>

        <div class="banner-ad banner-ad-margin">

        	<img width="1000" src="<?php echo Yii::$app->request->baseUrl;?>/images/about_ad.png" />

        </div>

        <div class="clear"></div>

        <div class="content content-no-bg">

        	<div class="position">网站首页 > <?php echo $this->title;?></div>

            <div class="content-title"><span><?php echo $this->title;?></span></div>

            <div class="content-boxs">

            	<div class="content-body goods-body">

                	<?php echo $model->content;?>

                </div>

                <div class="clear"></div>

            </div>

        </div>

        