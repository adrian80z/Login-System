<?php

/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: http://www.w3schools.com/php/php_mysql_connect.asp,
* Ref: part of code provided by fellow Carlos
***********************************************************/


class User
{	
	//Attributes 
	private $firstname;
	private $lastname;
	private $username;
	private $password;
	private $email;

	private $dataallfields = array("id","username", "first_name", "last_name", "email");

	//Methods
	public function loginUser($username, $password)
	{
		$this->username	= $username;
		$this->password	= $password;

		if( self::checkLogin() )
		{
			return true;
		}else{
			return false;
		}
	}

	private function checkLogin(){
		include_once("database.class.php");
		$db = new Database(); // Instance class Database

		$query = "SELECT id, username, first_name, last_name, email
 					FROM users WHERE username = '".$this->username."'
				  AND password = '".$this->password."';";

		$array = $db->getArrayData($query, $this->dataallfields);
		if(sizeof($array)<1){
			return false;
		}else{
			for($i=0;$i<sizeof($array);$i++){
				$_SESSION["username"] = $array[$i]["username"];
				$_SESSION["firstname"] = $array[$i]["first_name"];
				$_SESSION["lastname"] = $array[$i]["last_name"];
				$_SESSION["email"] = $array[$i]["email"];
			}
			return true;
		}
	}

	public function createUser($firstname, $lastname, $username, $email, $password)
	{
		$this->firstname	= $firstname;
		$this->lastname		= $lastname;
		$this->username		= $username;
		$this->email		= $email;
		$this->password		= $password;

		if( self::insertUser() )
		{
			return true;
		}else{
			return false;
		}
	}

	private function insertUser()
	{
		include_once("database.class.php");
		$db = new Database(); // Instance class Database

		$query = "INSERT INTO users
					(username, first_name, last_name, email, password)
				  VALUES
				  ('".$this->username."', '".$this->firstname."', '".$this->lastname."',
				   '".$this->email."','".$this->password."');";
		return $db->execQuery($query);
	}
}
?>