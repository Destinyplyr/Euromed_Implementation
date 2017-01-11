<?php
	include('login.php');
	session_start();
	$user_check=$_SESSION['name'];
 
	$sql = mysqli_query($db,"SELECT Name FROM users WHERE username='$user_check' ");
 	$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 	$login_user=$row['name'];
 
	if(!isset($user_check))
	{
	header("Location: loginTest.php");
	}
?>