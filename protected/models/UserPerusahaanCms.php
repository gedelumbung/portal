<?php

/**
 * This is the model class for table "tbl_user_perusahaan".
 *
 * The followings are the available columns in table 'tbl_user_perusahaan':
 * @property integer $id_user
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $level
 * @property string $email
 * @property integer $stts
 */
class UserPerusahaanCms extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UserPerusahaanCms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_user_perusahaan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, username, level, email, stts', 'required'),
			array('stts', 'numerical', 'integerOnly'=>true),
			array('nama, username', 'length', 'max'=>100),
			array('level', 'length', 'max'=>20),
			array('email', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_user, nama, username, password, level, email, stts', 'safe', 'on'=>'search'),
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
			'id_user' => 'Id User',
			'nama' => 'Nama',
			'username' => 'Username',
			'password' => 'Password',
			'level' => 'Level',
			'email' => 'Email',
			'stts' => 'Stts',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('level',$this->level,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('stts',$this->stts);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function validatePassword($password)
	{
		return crypt($password,$this->password)===$this->password;
	}

	public function hashPassword($password)
	{
		return crypt($password, $this->generateSalt());
	}

	public function generateSalt($cost=10)
	{
		if(!is_numeric($cost)||$cost<4||$cost>31){
			throw new CException(Yii::t('Cost parameter must be between 4 and 31.'));
		}
		// Get some pseudo-random data from mt_rand().
		$rand='';
		for($i=0;$i<8;++$i)
			$rand.=pack('S',mt_rand(0,0xffff));
		// Add the microtime for a little more entropy.
		$rand.=microtime();
		// Mix the bits cryptographically.
		$rand=sha1($rand,true);
		// Form the prefix that specifies hash algorithm type and cost parameter.
		$salt='$2a$'.str_pad((int)$cost,2,'0',STR_PAD_RIGHT).'$';
		// Append the random salt string in the required base64 format.
		$salt.=strtr(substr(base64_encode($rand),0,22),array('+'=>'.'));
		return $salt;
	}
}