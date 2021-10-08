<?php 

/**
* 
*/
class Db
{
	private static $instance=NULL;
	
	function __construct(){}

	public static function  getConnect(){
		if (!isset(self::$instance)) {
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$instance= new PDO('mysql:host=heroku_3b0fafbdc4f5d9f;dbname=heroku_0922ccf225472e1','b9dda9592d64cb','4c4d3caa',$pdo_options);
		} 
		return self::$instance;
	}
}

 ?>