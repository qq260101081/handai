<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class Config extends ActiveRecord
{
    
	public static function tableName()
	{
		return '{{%config}}';
	}
    
	public function attributeLabels()
	{
		return array(
			//'content' => '内容：',
		);
	}
	
	public  function rules()
	{
		return [
			[['address','tel','qq','email'], 'safe'],
		];
	}
}
