<?php
	
	// function myFuc()
	// {
		require_once 'login.php'; 
		$conn = new mysqli($hn, $un, $pw, $db);
		if ($conn->connect_error)	die($conn->connect_error);

		$query = "SELECT * FROM Foods";
		$result = $conn->query($query);
		if (!$result) die ($conn->error);

		$rows = $result->num_rows;

		for ($i=0; $i < $rows; ++$i) 
		{
			$result->data_seek($i);
			echo "Food number : "  . $result->fetch_assoc()['Color']	. '<br>';	
			$result->data_seek($i);
			echo "Flavoe : "  . $result->fetch_assoc()['Flavour']	. '<br>';	
		}



		$result->close();
		$conn->close();
	// }

/*	if (isset($_GET['hello'])) 
	{
	   myFuc();
	}*/
	
?>