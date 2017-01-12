<?php
	
	require_once 'login.php'; 
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)	die($conn->connect_error);

	// $address = "Pen";

	// $sql = "UPDATE user SET Name='Doe' WHERE Address='$address'";



	$sql = "INSERT INTO user (Name, Email, City) VALUES ('NewMail', 'dwaddwa', 'HelloCity')";


	if ($conn->query($sql) === TRUE) {
	    // echo "Record updated successfully";
	    echo "New record created successfully!";
	} else {
	    echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	
?>