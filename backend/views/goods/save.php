<?php
	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	$this->title = '添加/编辑商品';
?>
<div class="h2"><span><?php echo $this->title;?></span> <a href="<?php echo Yii::$app->urlManager->createUrl('goods/index') ;?>"><<返回列表</a></div>

<?php if (Yii::$app->session->hasFlash('error')): ?>
<div class="error-msg"><?php echo Yii::$app->session->getFlash('error'); ?></div>
<?php endif;?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="success-msg"><?php echo Yii::$app->session->getFlash('success'); ?></div>
<?php endif;?>

<div class="save">
	<?php $form = ActiveForm::begin(['id' => 'goods-save', 'options'=>['enctype'=>'multipart/form-data']]);?>
        <table>
        	<tr>
        		<td><b>产品分类：</b></td>
                <td><?php echo $form->field($model, 'pid')->dropDownList(['1'=>'韩黛系列','2'=>'康美系列'])->label(false);?></td>
        	</tr>
        	
            <tr>
              <td width="70" align="right"><b><?php echo $model->attributeLabels()['name'];?></b></td>
                <td><?php echo $form->field($model, 'name')->label(false);?></td>
            </tr>
            <tr>
              <td width="70" align="right"><b><?php echo $model->attributeLabels()['pic'];?></b></td>
                <td><?php echo $form->field($model, 'pic')->fileInput()->label(false);?></td>
            </tr>
            <tr>
                <td align="right"><b><?php echo $model->attributeLabels()['content'];?></b></td>
                <td>
                    
                    <textarea id="editor_id" name="Goods[content]" style="width:1000px;height:400px;">
						<?php echo $model->content;?>
					</textarea>
                </td>
            </tr>
            <tr>
            	<td height="50">&nbsp;</td>
                <td height="50" valign="bottom"><?php echo Html::submitButton('保存', ['class' => 'bt', 'name' => 'goods-save-btt']);?></td>
          </tr>
        </table>
    <?php ActiveForm::end();?>
</div>

 <script type="text/javascript">

KindEditor.ready(function(K) {
    //window.editor = K.create('#editor_id');
	window.editor = K.create('#editor_id',{
		//uploadJson : '<?php echo Yii::$app->request->baseUrl;?>/kindeditor-4.1.10/php/upload_json.php',
        //fileManagerJson : '<?php echo Yii::$app->request->baseUrl;?>/kindeditor-4.1.10/php/file_manager_json.php',
        //allowFileManager : true
	});
});

</script>