<?php
	include('userLogin.php'); // Include Login Script
	// if ((isset($_SESSION['name']) != '')) 
	// {
	// 	echo $_SESSION['name'];
	// }
	error_reporting(-1);
?>
<form method="post" action="userLogin.php">
	<label>Username:</label><br>
	<input type="text" name="name" placeholder="username" /><br><br>
	<label>Password:</label><br>
	<input type="password" name="pass" placeholder="password" />  <br><br>
	<input type="submit" name="submit" value="Login" /> 
</form>