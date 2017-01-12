<?php
	if (isset($_POST["submitRegi"]))
	{
		require_once 'login.php'; 
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error)	die($conn->connect_error);

		// $address = "Pen";

		// $sql = "UPDATE user SET Name='Doe' WHERE Address='$address'";

		$sql = "INSERT INTO user (Name, Email, Password, Telephone, Address, City, 	PostalCode, Institution, State, 
		InstitutionCountry, Country) VALUES ('Snowman', 'Snowman@snow.com', 'CARROT', '7894561230', 'SNWO', 'EU', 
		'78965', 'SNOOWW', 'SNOWYY', 'Finland', 'Finland')";


		if ($conn->query($sql) === TRUE) {
		    // echo "Record updated successfully";
		    echo "New record created successfully!";
		} else {
		    echo "Error updating record: " . $conn->error;
		}

		$conn->close();
	}
?>