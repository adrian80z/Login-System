<?php

/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: http://www.w3schools.com/php/php_sessions.asp
***********************************************************/

	session_start();
	if(!isset($_SESSION["username"])){
		header("location: index.php");
		exit();
	}
?>
<!doctype html>
<html>
<head>
	<title>Profile</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width:device-width, initial-scale=1" />
	<link rel="stylesheet" href="css/style.css" />
	</head>
<body>
<div class="wrapper">
	<header>
		<?php
			include "includes/header.php";
		?>
	</header>
	<main>
		<section>
			<h1>Your personal details:</h1>
			<hr/>
			<p class="details">
			First name: <b><?php echo $_SESSION["firstname"]?></b><br/>
			Last name: <b><?php echo $_SESSION["lastname"]?></b><br/>
			Username: <b><?php echo $_SESSION["username"]?></b><br/>
			Email: <b><?php echo $_SESSION["email"]?></b><br/>
			</p>
		</section>
	</main>
<footer>
</footer>
</div>
</body>
</html>