<?php

/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: http://www.w3schools.com/php/php_sessions.asp
***********************************************************/


session_start();

		if( isset($_POST["formname"]))
		{
            include_once ("classes/user.class.php");
            $user = new User();

			switch($_POST["formname"])
            {
				case "login":
                    ///////////////////////////////////////////////////
					$username 	= addslashes($_POST["username"]);
					$password 	= addslashes($_POST["password"]);

                    if(!$user->loginUser($username, $password)){
                        header("location: signup.php");
                    }else{
                        header("location: profile.php");
                    }
                    break;
					///////////////////////////////////////////////////
				case "signup":
                    ///////////////////////////////////////////////////
					$firstname 	= addslashes($_POST["firstname"]);
					$lastname 	= addslashes($_POST["lastname"]);
					$username   = addslashes($_POST["username"]);
					$email 		= addslashes($_POST["email"]);
					$password 	= addslashes($_POST["password"]);

                    if(!$user->createUser($firstname, $lastname, $username, $email, $password))
                    {
                        header("location: signup.php");
                    }else{
                        header("location: index.php");
                    }
                    ///////////////////////////////////////////////////
					break;
					}
			}
       ?>