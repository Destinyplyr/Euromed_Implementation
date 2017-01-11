<?php
	
	require_once 'login.php'; 
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)	die($conn->connect_error);

	$address = "Pen";

	$sql = "UPDATE user SET Name='Doe' WHERE Address='$address'";

	if ($conn->query($sql) === TRUE) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	
?>