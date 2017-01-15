<?php
	include('userLogin.php'); // Include Login Script
	if ((isset($_SESSION['name']) != '')) 
	{
		//echo $_SESSION['name'];
		header("Location: mainSample.php");
	}
	//echo "myefmtmymy";
	error_reporting(-1);
?>
<!DOCTYPE html>
<html>
<head>
	<title> User Login </title>
	<link rel="stylesheet" type="text/css" href ="../css_scripts/loginTest.css">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
</head>
<body>
	<h1 style="color:white; padding-left: 23%; padding-top: 10%;"> Welcome to Euromed 2016 </h1>
	<form id="loginForm" method="post" action="" target="_top">
		<label>Username :</label><br>
		<input type="text" name="name" placeholder="username" /><br><br>
		<label>Password :</label><br>
		<input type="password" name="pass" placeholder="password" />  <br><br>
		<input type="submit" name="submit" value="Login" /> 
	</form>
</body>
</html>