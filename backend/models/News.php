<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class News extends ActiveRecord
{
    
	public static function tableName()
	{
		return '{{%news}}';
	}
    
	public function attributeLabels()
	{
		return array(
			'title'   => '标题：',
			'pic'     => '图片：',
			'content' => '内容：',
		);
	}
	
	public  function rules()
	{
		return [
			[['title','pic','type','content','addtime'], 'safe'],
			[['pic'], 'file', 'extensions'=>'jpg,png,gif'],
		];
	}
}
