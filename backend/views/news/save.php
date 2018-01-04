<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;	if($type == 0)
	$this->title = '添加/编辑韩黛动态';	elseif ($type == 1)	$this->title = '添加/编辑护肤百科';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl(['news/index','type'=>$type]) ;?>"><<返回列表</a></div>

<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>

<div class="save">
	<?php $form = ActiveForm::begin(['id' => 'news-save', 'options'=>['enctype'=>'multipart/form-data']]);?>
        <table>
            <tr>
              	<td width="50"><b><?php echo $model->attributeLabels()['title'];?></b></td>
                <td><?php echo $form->field($model, 'title')->label(false);?></td>
            </tr>
            <!-- <tr>
            	<td width="50"><b><?php echo $model->attributeLabels()['pic'];?></b></td>
                <td><?php echo $form->field($model, 'pic')->fileInput()->label(false);?></td>
            </tr> -->			            <?php echo $form->field($model, 'type')->hiddenInput(['value'=>$type])->label(false);?>
            <tr>
                <td><b><?php echo $model->attributeLabels()['content'];?></b></td>
                <td>					<textarea id="editor_id" name="News[content]" style="width:1000px;height:400px;">						<?php echo $model->content;?>					</textarea>
                    
                </td>
            </tr>
            <tr>
            	<td height="50">&nbsp;</td>
                <td height="50" valign="bottom"><?php echo Html::submitButton('保存', ['class' => 'bt', 'name' => 'news-save-btt']);?></td>
          </tr>
        </table>
    <?php ActiveForm::end();?>
</div>
<script type="text/javascript">
KindEditor.ready(function(K) {    window.editor = K.create('#editor_id');});
</script>