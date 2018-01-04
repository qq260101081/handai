<?php 
	$this->title = '招商加盟';
?>
        <div class="banner-ad banner-ad-margin">
        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/join_ad.png" />
        </div>
        <div class="clear"></div>
        <div class="content content-no-bg">
        	<div class="position">网站首页 > <?php echo $this->title;?></div>
            <div class="content-title"><span>招商加盟</span></div>
            <div class="content-boxs">
            	<div class="content-body">
            		<?php echo $model->content;?>
                	<!-- <div class="join-ad"><img src="" /></div>
                    <div class="join-text">sdf sdfsdf sfds </div>
                    <div class="join-contact">加盟热线：<b>4000sfsdfd</b></div> -->
                </div>
            </div>
        </div>
       