<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	$this->title = '权威报告图片';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl('quanwei/save') ;?>">添加</a></div>
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
            <th>图片</th>
            <th>分类</th>
            <th>操作</th>
        </tr>
        <?php foreach($model as $v):?>
        <tr>
            <td><?php echo $v->id;?></td>
            <td><img width="200" src="<?php echo Yii::$app->params['picPath'] . $v->pic;?>" /></td>
            <td><?php if($v->pid == 1) echo '检查机构'; elseif ($v->pid == 2) echo '检查中心';?></td>
            <td>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['quanwei/save', 'id' => $v->id]) ;?>">修改</a>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['quanwei/del', 'id' => $v->id]) ;?>">删除</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>