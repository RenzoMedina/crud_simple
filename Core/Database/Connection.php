<?php

namespace Core\Database;
use PDO;
use PDOException;

class Connection{

	protected const DBLocal ="localhost";
       	protected const DBName ="post";
	protected const DBUser ="renzo";
	protected const DBPass ="renzo08";	

	public static function start(){
		$dns ="mysql:host=".self::DBLocal.";db:name=".self::DBName;

		try{
		$con = new PDO($dns, self::DBUser, self::DBPass);
	      	return $con;	
		
		}catch(PDOException $poe){
			echo "Error".$poe->getMessage();
		}
	
	}
}

