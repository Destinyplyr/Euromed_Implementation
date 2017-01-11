<?php 
	session_start();
	require_once 'login.php'; 
	$conn = new mysqli($hn, $un, $pw, $db);
	
	if ($conn->connect_error)	die($conn->connect_error);
	
	if(isset($_POST["subUpdate"]))
	{
	    
      $username=$_POST['Name'];
      $mail=$_POST['E-mail'];
      $telephone=$_POST['Telephone'];
      $institution=$_POST['Institution'];
      $institution_country=$_POST['Institution Country'];
      $address=$_POST['Address'];
      $city=$_POST['City'];
      $state=$_POST['State'];
      $postal_code=$_POST['Postal Code'];
      $country=$_POST['Country'];
	  $password=$_POST['pass'];


	  $_SESSION['Name']= $username;

      $query=  "UPDATE user SET Name = ' $username', E-mail = '$mail', Telephone = '$telephone', 
      Institution = '$institution', Institution Country = '$institution_country', Address = '$address',
      City = '$city', State = '$state', Postal Code = '$postal_code', Country = '$country' WHERE Password = '$password'";
      $result = $conn->query($query);
      if (!$result) die ($conn->error);
	    
	}

	$result->close();
	$conn->close();
		
?>