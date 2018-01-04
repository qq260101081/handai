<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Goods extends ActiveRecord
{
	
	public static function tableName()
	{
		return '{{%goods}}';
	}
    
	public function attributeLabels()
	{
		return array(
			
			'name'   => '名称：',
			'pic'   => '商品图：',
			'pid'   => '分类：',
			'content' => '内容：',
		);
	}
	
	public  function rules()
	{
		return [
			
			[['pid','name','pic','content','addtime'], 'safe'],
			[
				'pic', 'file', 'extensions'=>'jpg,png,gif','maxSize'=>1024*1024*2
			],
		];
	}
}
