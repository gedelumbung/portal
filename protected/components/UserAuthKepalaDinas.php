<?php class UserAuthKepalaDinas extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		$user=UserKepalaDinasModel::model()->find('LOWER(username)=?',array(strtolower($this->username)));
		if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
		{
			$this->_id=$user->id_user;
			$this->username=$user->username;
			$this->setState('nama', $user->nama);
			$this->setState('id_bidang', "0");
			$this->setState('level', "kepala_dinas");
			$this->setState('pengadaan', "0");
			$this->setState('route_admin', "kepala_dinas");
			$this->errorCode=self::ERROR_NONE;
		}
		return $this->errorCode==self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}