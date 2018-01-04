<?php

namespace backend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Links extends ActiveRecord
{
    
	public static function tableName()
	{
		return '{{%links}}';
	}
    
	public function attributeLabels()
	{
		return array(
			'name'   => '网站名称：',
			'url'     => '网站链接：',
		);
	}
	
	public  function rules()
	{
		return [
			[['name','url'], 'safe'],
		];
	}
}
