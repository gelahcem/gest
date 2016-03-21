<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	private $_id;

	public function authenticate()
	{
		$record=risorse::model()->findByAttributes(array('USERNAME'=>$this->username));
		if($record===null)
		{
			$this->_id='user Null';
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($record->PASSWORD!==$this->password)
		{        $this->_id=$this->username;
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else if($record['ACL']==='0')                //  here I check status as Active in db
		{
			$err = "You have been Inactive by Admin.";
			$this->errorCode = $err;
		}

		else
		{
			$this->_id=$record['RUOLO'];
			$this->setState('role', $record['RUOLO']);
			$this->errorCode=self::ERROR_NONE;

		}
		return !$this->errorCode;
	}

		public function getId()       //  override Id
	{
		return $this->_id;
	}
}