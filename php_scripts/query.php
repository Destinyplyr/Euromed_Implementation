<?php
	
	// function myFuc()
	// {
		require_once 'login.php'; 
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error)	die($conn->connect_error);

		$query = "SELECT * FROM user";
		$result = $conn->query($query);
		if (!$result) die ($conn->error);

		$rows = $result->num_rows;

		for ($i=0; $i < $rows; ++$i) 
		{
			$result->data_seek($i);
			echo "User's name : "  . $result->fetch_assoc()['Name']	. '<br>';	
			$result->data_seek($i);
			echo "User's e-mal : "  . $result->fetch_assoc()['E-mail']	. '<br>';	
		}



		$result->close();
		$conn->close();
	// }

/*	if (isset($_GET['hello'])) 
	{
	   myFuc();
	}*/
	
?>