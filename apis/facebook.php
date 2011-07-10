<?php
class FacebookUser
{
	private $id;
	private $name;
}

/**
 * Represents a Facebook Application.
 */
class FacebookApp
{
	private $id;
	private $secretKey;
	
	private static $cache = array ( );
	
	/**
	 * Loads FacebookApp instance using application identifier and secret key from cache.
	 *
	 * @return void
	 * @author Shillo Ben-David
	 **/
	public static function loadFromCache ( $id, $secretKey )
	{
		$key = $id.$secretKey;
		
		if(!isset(self::$cache[$key])) {
			self::$cache[$key] = new FacebookApp($id, $secretKey);
		}
		
		return self::$cache[$key];
	}
	
	private function __construct($id, $secretKey)
	{
		$this->id 			= $id;
		$this->secretKey 	= $secretKey;
	}
}
