<?php
class OAuth {
	/**
	 * Authorization username.
	 */
	private $username;
	/**
	 * Authorization password.
	 */
	private $password;
	
	/**
	 * Setups the authorization credential.
	 */
	public function __construct ($username, $password)
	{
		$this->username	= $username;
		$this->password	= $password;
	}
}
?>