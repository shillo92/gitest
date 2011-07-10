<?php
/**
 * Facebook API.
 */
class FacebookAPI
{
	
}

/**
 * Represents a Facebook Application.
 */
class FacebookApp
{
	private $id;
	private $secretKey;
	
	
	public function __construct($id, $secretKey)
	{
		$this->id 			= $id;
		$this->secretKey 	= $secretKey;
	}
}
