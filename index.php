
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
	<title>Login</title>
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
		<form action="process.php" method="post" id="login">
			<p class="signup">Welcome</p>
			<input type="hidden" name="formname" value="login" readonly="readonly" />
			<input type="text" name="username" required="required" placeholder="Username" autofocus />
			<input type="password" name="password" required="required" placeholder="Password" />
			<button class="button" type="submit">Login</button>
		</form>
	</main>
	<footer>
	</footer>
</div>
</body>
</html>