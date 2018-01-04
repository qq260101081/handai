<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	$this->title = '编辑网站信息';
?>
<div class="h2"><span><?php echo $this->title;?></span></div>

<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>

<div class="save">
	<?php $form = ActiveForm::begin(['id' => 'config-save']);?>
        <table>
            <tr>
              	<td width="150" align="right"><b>联系地址：</b></td>
                <td><?php echo $form->field($model, 'address')->label(false);?></td>
            </tr>
            <tr>
            	<td width="150" align="right"><b>联系电话：</b></td>
                <td><?php echo $form->field($model, 'tel')->label(false);?></td>
            </tr>
            <tr>
            	<td width="150" align="right"><b>联系QQ：</b></td>
                <td><?php echo $form->field($model, 'qq')->label(false);?></td>
            </tr>
            <tr>
            	<td width="150" align="right"><b>电子邮箱：</b></td>
                <td><?php echo $form->field($model, 'email')->label(false);?></td>
            </tr>
            <tr>
            	<td height="50">&nbsp;</td>
                <td height="50" valign="bottom"><?php echo Html::submitButton('保存', ['class' => 'bt', 'name' => 'config-save-btt']);?></td>
          </tr>
        </table>
    <?php ActiveForm::end();?>
</div>
