<?php

/**
 * This is the model class for table "{{review}}".
 *
 * The followings are the available columns in table '{{review}}':
 * @property integer $id
 * @property integer $user_id
 * @property string $date_created
 * @property string $text
 * @property string $username
 * @property integer $moderation
 */
class Review extends yupe\models\YModel
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{review}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, date_created, username, text, moderation, useremail', 'required'),
			array('user_id, moderation', 'numerical', 'integerOnly'=>true),
			array("useremail", "email"),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, date_created, username, text, moderation, useremail', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'date_created' => 'Date Created',
			'text' => 'Текст',
			'moderation' => 'Moderation',
			'username' => 'Имя',
			'useremail' => 'E-mail',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('date_created',$this->date_created,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('moderation',$this->moderation);
		$criteria->compare('username',$this->username);
		$criteria->compare('useremail',$this->useremail);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function notification($email)
	{
		$subject = "Уведомление о новом отзыве";
		$site = explode("//",Yii::app()->getBaseUrl(true))[1];
		
		$headers = "From: Admin ".$site." <no-replay@suvenir.ru>\r\n" .
				"Reply-To: no-replay@".$site."\r\n" .
			 'MIME-Version: 1.0' . "\r\n" .
			 'Content-type: text/html; charset=utf-8\r\nContent-Transfer-Encoding: 8bit\r\nX-Priority: 1\r\nX-MSMail-Priority: High\r\n';
		$message = "Новый отзыв на сайте " . $site;
		if (mail($email, $subject, $message, $headers)) {
			/* echo "Запрос отправлен!"; */
		} else {
		}/*  echo "Произошла ошибка!" */;
	
	}
	
	public function getAllReviewsList($selfId = false)
	{
		$criteria = new CDbCriteria();
		//$criteria->order = "{$this->tableAlias}.order DESC, {$this->tableAlias}.date_created DESC";

/* 		if ($selfId) {
			$otherCriteria = new CDbCriteria();
			$otherCriteria->addNotInCondition('id', (array)$selfId);
			$otherCriteria->group = "{$this->tableAlias}.slug, {$this->tableAlias}.id";
			$criteria->mergeWith($otherCriteria);
		} */

		return CHtml::listData($this->findAll($criteria), 'id', 'username');
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Review the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getUrl($absolute = false)
	{
		return $absolute ? Yii::app()->createAbsoluteUrl('/review/review/show/', array('id' => $this->id)) : Yii::app()->createUrl('/review/review/show/', array('id' => $this->id));
	}
}
