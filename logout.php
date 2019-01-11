<?php

/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: http://www.w3schools.com/php/php_sessions.asp
***********************************************************/


	
	// Start the session
	session_start();
	
	// remove all session variables
	session_unset();

	// destroy the session 
	session_destroy();
	
	//redirection to login page
	header ("location: index.php");
?>