<?php 
	use yii\widgets\LinkPager;	if($model->type == 0)
	$this->title = '韩黛动态';	elseif ($model->type == 1)	$this->title = '护肤百科';
?>
        <div class="banner-ad banner-ad-margin">
        	<img src="<?php echo Yii::$app->request->baseUrl;?>/images/news_ad.png" />
        </div>
        <div class="clear"></div>
        <div class="content content-no-bg">
        	<div class="news-content">
            	<div class="news-title"><?php echo $model->title;?></div>
                <div class="news-auter">作者：<?php echo $model->author?> &nbsp;&nbsp;&nbsp;上传时间：<?php echo date('Y-m-d', $model->addtime);?></div>
            	<?php echo $model->content;?>
            </div>
        </div>
        