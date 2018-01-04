<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	$this->title = '添加/编辑权威报告图片';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl('quanwei/index') ;?>"><<返回列表</a></div>

<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>

<div class="save">
	<?php $form = ActiveForm::begin(['id' => 'quanwei-save', 'options'=>['enctype'=>'multipart/form-data']]);?>
        <table>
            <tr>
            	<td width="50"><b>分类：</b></td>
                <td><?php echo $form->field($model, 'pid')->dropDownList(['1'=>'检查机构','2'=>'检查中心'])->label(false);?></td>
            </tr>
            <tr>
            	<td width="50"><b>图片：</b></td>
                <td><?php echo $form->field($model, 'pic')->fileInput()->label(false);?></td>
            </tr>
            
            <tr>
            	<td height="50">&nbsp;</td>
                <td height="50" valign="bottom"><?php echo Html::submitButton('保存', ['class' => 'bt', 'name' => 'quanwei-save-btt']);?></td>
          </tr>
        </table>
    <?php ActiveForm::end();?>
</div>
