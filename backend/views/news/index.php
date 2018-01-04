<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;	if($type == 0)
		$this->title = '韩黛动态';	elseif ($type == 1)		$this->title = '护肤百科';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl(['news/save','type'=>$type]) ;?>">添加</a></div>
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
            
            <th>标题</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
        <?php foreach($model as $v):?>
        <tr>
            <td><?php echo $v->id;?></td>
            
            <td><?php echo $v->title;?></td>
            <td><?php echo date('Y-m-d H:i:s', $v->addtime);?></td>
            <td>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['news/save', 'id' => $v->id,'type' =>$type]) ;?>">修改</a>
                <a href="<?php echo Yii::$app->urlManager->createUrl(['news/del', 'id' => $v->id]) ;?>">删除</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>