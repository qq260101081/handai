<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Single extends ActiveRecord
{
    
	public static function tableName()
	{
		return '{{%single}}';
	}
    
	public function attributeLabels()
	{
		return array(
			'content' => '内容：',
		);
	}
	
	public  function rules()
	{
		return [
			[['content'], 'safe'],
		];
	}
}
