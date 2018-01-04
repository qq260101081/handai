<?php 
	use yii\widgets\LinkPager;
	$this->title = '旗舰店铺';
?>
        <div class="banner-ad banner-ad-margin">
        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/dianpu_ad.png" />
        </div>
        <div class="clear"></div>
        <div class="content content-no-bg">
        	<div class="position">网站首 > <?php echo $this->title;?></div>
            <div class="content-title"><span>旗舰店铺</span></div>
            <div class="content-boxs">
            	<div class="content-body">
                	<div class="qijiandianpu-list">
                    	<ul>
                    		<?php foreach ($model as $v):?>
                        	<li>
                            	<a href="#">
                                	<img width="290" height="210" src="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" />
                                    <span><?php echo $v->name;?></span>
                                </a>
                            </li>
                            <?php endforeach;?>
                            
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="pages">
	                    	<?php 
	                   			echo LinkPager::widget([
									'pagination' => $pages,
									'prevPageLabel' => '上一页',
									'nextPageLabel' => '下一页',
									'firstPageLabel' => '首页',
									'lastPageLabel' => '末页'
								]);
	                    	?>
	                    	<span>共<b><?php echo ceil($pages->totalCount/$pages->pageSize);?></b>页<b><?php echo $pages->totalCount;?></b>条</span>
	                    </div>
	                    <div class="clear"></div>
                </div>
            </div>
        </div>
        