<?php

/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: http://www.w3schools.com/php/php_sessions.asp
***********************************************************/




//check if user is logged in
if( isset($_SESSION["username"]) ) {
	$buttons = "<div>You are logged in as <b> ".$_SESSION["username"]."</b></div>
	
	<div>(<a href='logout.php'>Logout</a>)</div>";
}else{
	$buttons = "<div><a href='index.php'>Login</a> | <a href='signup.php'>Sign Up</a></div>";
	
}
	echo $buttons; 
?>