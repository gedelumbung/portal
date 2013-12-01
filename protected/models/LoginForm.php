<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
	public $hak_akses;
	public $rememberMe;
	public $verifyCode;

	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array('username, password, hak_akses, verifyCode', 'required'),
			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
			// verifyCode needs to be entered correctly
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Remember me next time',
			'verifyCode'=>'Verification Code',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			if($this->hak_akses=="admin_bidang")
			{
				$this->_identity=new UserAuthBidang($this->username,$this->password);
				if(!$this->_identity->authenticate())
					$this->addError('password','Incorrect username or password.');
			}
			else if($this->hak_akses=="web_admin")
			{
				$this->_identity=new UserAuthAdmin($this->username,$this->password);
				if(!$this->_identity->authenticate())
					$this->addError('password','Incorrect username or password.');
			}
			else if($this->hak_akses=="perusahaan")
			{
				$this->_identity=new UserAuthPerusahaan($this->username,$this->password);
				if(!$this->_identity->authenticate())
					$this->addError('password','Incorrect username or password. Maybe your account have not moderate');
			}
			else if($this->hak_akses=="kepala_dinas")
			{
				$this->_identity=new UserAuthKepalaDinas($this->username,$this->password);
				if(!$this->_identity->authenticate())
					$this->addError('password','Incorrect username or password. Maybe your account have not moderate');
			}
			else if($this->hak_akses=="keuangan")
			{
				$this->_identity=new UserAuthKeuangan($this->username,$this->password);
				if(!$this->_identity->authenticate())
					$this->addError('password','Incorrect username or password. Maybe your account have not moderate');
			}
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			if($this->hak_akses=="admin_bidang")
			{
				$this->_identity=new UserAuthBidang($this->username,$this->password);
				$this->_identity->authenticate();
			}
			else if($this->hak_akses=="web_admin")
			{
				$this->_identity=new UserAuthAdmin($this->username,$this->password);
				$this->_identity->authenticate();
			}
			else if($this->hak_akses=="perusahaan")
			{
				$this->_identity=new UserAuthPerusahaan($this->username,$this->password);
				$this->_identity->authenticate();
			}
			else if($this->hak_akses=="kepala_dinas")
			{
				$this->_identity=new UserAuthKepalaDinas($this->username,$this->password);
				$this->_identity->authenticate();
			}
		}
		if($this->_identity->errorCode===UserAuthBidang::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
