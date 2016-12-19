<?php
	
	require_once 'login.php'; 
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error)	die($conn->connect_error);

	$query = "SELECT * FROM User";
	$result = $conn->query($query);
	if (!$result) die ($conn->error);

	$rows = $result->num_rows;

	for ($i=0; $i < $rows; ++$i) 
	{
		$result->data_seek($i);
		echo "Name : "  . $result->fetch_assoc()['Name']	. '<br>';	
		$result->data_seek($i);
		echo "E-mail : "  . $result->fetch_assoc()['E-mail']	. '<br>';	
		$result->data_seek($i);
		echo "Country : "  . $result->fetch_assoc()['Country']	. '<br><br>';	
	}



	$result->close();
	$conn->close();
?>