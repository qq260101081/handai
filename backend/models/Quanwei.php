<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Quanwei extends ActiveRecord
{
    
	public static function tableName()
	{
		return '{{%quanwei}}';
	}
    
	public function attributeLabels()
	{
		return array(
			
			'pic'     => '图片：',
			
		);
	}
	
	public  function rules()
	{
		return [
			[['pic','pid'], 'safe'],
			[['pic'], 'file', 'extensions'=>'jpg,png,gif'],
		];
	}
}
