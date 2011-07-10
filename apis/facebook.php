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
	
	/**
	 * Loads FacebookApp instance using application identifier and secret key from cache.
	 *
	 * @return void
	 * @author Shillo Ben-David
	 **/
	public static function loadFromCache ( $id, $secretKey )
	{
		
	}
	
	private function __construct($id, $secretKey)
	{
		$this->id 			= $id;
		$this->secretKey 	= $secretKey;
	}
}
