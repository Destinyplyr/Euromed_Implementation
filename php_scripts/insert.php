<?php

	session_start();
	include('login.php'); 
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	$error = "";

	// $query = "INSERT INTO user VALUES";
	// $result = $conn->query($query);

	// if (!$result)
	// {
	// 	echo "Insert FAILED";
	// }

?>