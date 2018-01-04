<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Dianpu extends ActiveRecord
{
    
	public static function tableName()
	{
		return '{{%dianpu}}';
	}
    
	public function attributeLabels()
	{
		return array(
			'name'   => '标题：',
			'pic'     => '图片：',
		);
	}
	
	public  function rules()
	{
		return [
			[['name','pic'], 'safe'],
			[['pic'], 'file', 'extensions'=>'jpg,png,gif'],
		];
	}
}
