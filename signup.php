<!--
/**********************************************************
* Author: Adrian Ziolkowski 
* Assignment: WE4.0 PHP Web App Assignment, Digital Skills Academy
* Student ID: D15126831
* Date : 2016/02/14
* Ref: http://www.w3schools.com/php/php_forms.asp
***********************************************************/
-->

<!doctype html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width:device-width, initial-scale=1" />	
	<link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="wrapper">
	<header>
		<?php
        include 'includes/header.php';
        ?>
	</header>
	<main>
		<form action="process.php" method="post" id="signup">
			<p class="signup">Sign Up</p>
			<input type="hidden" name="formname" value="signup" readonly="readonly" />
			<input type="text" name="firstname" required="required" placeholder="First Name" />
			<input type="text" name="lastname" required="required" placeholder="Last Name" />
			<input type="text" name="username" required="required" placeholder="Username/nickname" />
			<input type="password" name="password" required="required" placeholder="Create Password" />
			<input type="email" name="email" required="required" placeholder="Email" />
			<button class="button" type="submit">Sign Up</button>
		</form>
	</main>
	<footer>
		
	</footer>
	</div>
</body>
</html>