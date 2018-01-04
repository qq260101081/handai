<?php 
	$this->title = '权威报告';
?>
		
        <div class="banner-ad banner-ad-margin">
        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/quanwei_ad.jpg" />
        </div>
        <div class="clear"></div>
        <div class="content content-no-bg">
        	<div class="position">网站首页 > <?php echo $this->title;?></div>
            <div class="content-title"><span>权威报告</span></div>
            <div class="content-boxs">
            	<div class="content-body">
                	<?php echo $model->content;?>
                    <div class="clear"></div>
                    <div class="quanwei-img-list">
                    	<div><img src="<?php echo Yii::$app->request->baseUrl;?>/images/gjjbjccgyg.jpg" /></div>
                            <ul>
                                <?php foreach($imgs as $v):?>
                                <?php if($v->pid == 2):?>
                                <li>
                                   <a href="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" rel="sexylightbox[group1]">
                                   <img src="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" />
                                   </a>
                                </li>
                                <?php endif;?>
                                <?php endforeach;?>
                            </ul>
                    	<div><img src="<?php echo Yii::$app->request->baseUrl;?>/images/gjjgz.jpg" /></div>
                        <ul>
							<?php foreach($imgs as $v):?>
                                <?php if($v->pid == 1):?>
                                <li>
                                   <a href="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" rel="sexylightbox[group1]"> 
                                   <img src="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" />
                                    </a>
                                </li>
                                <?php endif;?>
                                <?php endforeach;?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        