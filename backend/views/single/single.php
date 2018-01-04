<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	
	if($model->type == 1)
		$this->title = '公司简介';
	elseif ($model->type == 2)
		$this->title = '权威报告';
	elseif ($model->type == 3)
		$this->title = '联系我们';
	elseif ($model->type == 4)
		$this->title = '招商加盟';
?>
<div class="h2"><?php echo $this->title;?></div>
<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>
<div class="list">
<?php $form = ActiveForm::begin(['id' => 'about-save']);?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
    	<td width="70" valign="top"><b><?php echo $model->attributeLabels()['content'];?></b></td>
    	<td>			<textarea id="editor_id" name="Single[content]" style="width:1000px;height:400px;">				<?php echo $model->content;?>			</textarea>
		</td>
	</tr>
	
    <tr valign="middle">
    	<td height="50">&nbsp;</td>
        <td height="50"><?php echo Html::submitButton('保存', ['class' => 'bt', 'name' => 'about-save-btt']);?></td>
    </tr>
</table>
<?php ActiveForm::end();?>
</div>
<script type="text/javascript">KindEditor.ready(function(K) {    window.editor = K.create('#editor_id');});</script>