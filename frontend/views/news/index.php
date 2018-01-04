<?php 
	use yii\widgets\LinkPager;
	if($type == 0)
		$this->title = '韩黛动态';
	elseif ($type == 1)
		$this->title = '护肤百科';
	
?>
        <div class="banner-ad banner-ad-margin">
        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/news_ad.png" />
        </div>
        <div class="clear"></div>
        <div class="content content-no-bg">
        	<div class="position">网站首页 > <?php echo $this->title;?></div>
            <div class="content-title"><span><?php echo $this->title;?></span></div>
            <div class="content-boxs">
            	<div class="content-body news-body">
                	<ul>
                		<?php foreach ($model as $v):?>
                    	<li>
                            <a target="_blank" href="<?php echo Yii::$app->urlManager->createUrl(['news/content','id'=>$v->id]) ;?>"><?php echo $v->title;?></a>
                            <span>日期：<?php echo date('Y-m-d',$v->addtime);?></span>
                        </li>
                        <?php endforeach;?>
                    </ul>
                  
                   
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
        