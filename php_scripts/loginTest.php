<?php
	include('userLogin.php'); 
	// if ((isset($_SESSION['name']) != '')) 
	// {
	//  	echo $_SESSION['name'];
	// }
	// error_reporting(-1);
?>
<!DOCTYPE html>
<html>
<head>
	<title> User Login </title>
	<link rel="stylesheet" type="text/css" href ="../css_scripts/loginTest.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
</head>
<body>
	<form id="loginForm" method="post" action="mainSample.php" target="_top">
		<label>UsernamePHP:</label><br>
		<input type="text" name="name" placeholder="username" /><br><br>
		<label>Password:</label><br>
		<input type="password" name="pass" placeholder="password" />  <br><br>
		<input type="submit" name="submit" value="Login" /> 
	</form>
</body>
</html>