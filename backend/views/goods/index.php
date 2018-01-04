<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	$this->title = '商品列表';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl('goods/save') ;?>">添加</a></div>
<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>
<div class="list">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <th>ID</th>
            <th>商品图片</th>
            <th>标题</th>
            <th>所属分类</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
        <?php foreach($model as $v):?>
        <tr>
            <td><?php echo $v->id;?></td>
            <td><img width="200" src="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" /></td>
            <td><?php echo $v->name;?></td>
            <td>
            	<?php if($v->pid == 1) echo '韩黛系列';elseif($v->pid == 2) echo '康美系列';?>
            </td>
            <td><?php echo date('Y-m-d H:i:s', $v->addtime);?></td>
            <td>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['goods/save', 'id' => $v->id]) ;?>">修改</a>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['goods/del', 'id' => $v->id]) ;?>">删除</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>