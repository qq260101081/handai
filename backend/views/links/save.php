<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;	$this->title = '友情链接';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl('links/index') ;?>"><<返回列表</a></div>

<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>

<div class="save">
	<?php $form = ActiveForm::begin(['id' => 'links-save', 'options'=>['enctype'=>'multipart/form-data']]);?>
        <table>
            <tr>
              	<td width="70"><b><?php echo $model->attributeLabels()['name'];?></b></td>
                <td><?php echo $form->field($model, 'name')->label(false);?></td>
            </tr>
            <tr>
                <td width="70"><b><?php echo $model->attributeLabels()['url'];?></b></td>                <td><?php echo $form->field($model, 'url')->label(false);?></td>
            </tr>
            <tr>
            	<td height="50">&nbsp;</td>
                <td height="50" valign="bottom"><?php echo Html::submitButton('保存', ['class' => 'bt', 'name' => 'links-save-btt']);?></td>
          </tr>
        </table>
    <?php ActiveForm::end();?>
</div>