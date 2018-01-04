<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	$this->title = '友情链接';	
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl('links/save') ;?>">添加</a></div>
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
            <th>网站名称</th>
            <th>网站链接</th>
            <th>操作</th>
        </tr>
        <?php foreach($model as $v):?>
        <tr>
            <td><?php echo $v->id;?></td>
            <td><?php echo $v->name;?></td>
            <td><?php echo $v->url;?></td>
            <td>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['links/save', 'id' => $v->id]) ;?>">修改</a>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['links/del', 'id' => $v->id]) ;?>">删除</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>