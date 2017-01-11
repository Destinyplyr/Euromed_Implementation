<?php 
	session_start();
	include('login.php'); 
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	$error = "";
	if(isset($_POST["subUpdate"]))
	{
	    //Define $username and $password
	    if(empty($_POST["Name"]))
	    {
	      $echo = "Both fields are required.";
	      header("Location: faq.php");
	    }
	    else
	    {

		  	$username=$_POST['Name'];
		  	header("Location: mainSample.php");

	    }
	 //    $mail=$_POST['E-mail'];
	 //    $telephone=$_POST['Telephone'];
	 //    $institution=$_POST['Institution'];
	 //    $institution_country=$_POST['Institution Country'];
	 //    $address=$_POST['Address'];
	 //    $city=$_POST['City'];
	 //    $state=$_POST['State'];
	 //    $postal_code=$_POST['Postal Code'];
	 //    $country=$_POST['Country'];
		// $password=$_SESSION['pass'];

		// echo '$state';
	    //Check username and password from database
	    // $query=  "UPDATE user SET Name='Vasilis' WHERE Address='$address'";
	    // $result = $conn->query($query);
	    // if (!$result) die ($conn->error);
	    // $rows = $result->num_rows;

	    // //If username and password exist in our database then create a session. Otherwise echo error.
	    // if($rows == 1)
	    // {
	    //    //$_SESSION['name'] = $username; // Initializing Session
	    //    //echo "<li> <a>  Hello user, " .  $_SESSION['name'] . "</a> </li>";
	      
	    //   if(isset($_POST['name']))
	    //   {
	    //       $_SESSION['name']= $username;
	    //       // echo "<li> <a>  Hello user, " .  $_SESSION['name'] . "</a> </li>";
	    //   }
	                  
	    //   //echo "heloo,ool". '<br>';

	    //   // for ($i=0; $i < $rows; ++$i) 
	    //   // {
	    //   //   $result->data_seek($i);
	    //   //   echo "User's name : "  . $result->fetch_assoc()['Name'] . '<br>'; 
	    //   //   $result->data_seek($i);
	    //   //   echo "User's e-mal : "  . $result->fetch_assoc()['E-mail']  . '<br>'; 
	    //   //   $result->data_seek($i);
	    //   //   echo "User's state : "  . $result->fetch_assoc()['State'] . '<br>'; 
	    //   // }
	    // }
	    // else
	    // {
	    //   $error = "Incorrect username or password.";
	    // }
	  
	}

	//session_destroy();






  	  //    $username=$_POST['Name'];
   //    $mail=$_POST['E-mail'];
   //    $telephone=$_POST['Telephone'];
   //    $institution=$_POST['Institution'];
   //    $institution_country=$_POST['Institution Country'];
   //    $address=$_POST['Address'];
   //    $city=$_POST['City'];
   //    $state=$_POST['State'];
   //    $postal_code=$_POST['Postal Code'];
   //    $country=$_POST['Country'];
	  // $password=$_SESSION['pass'];

	  // $address = "Pen";
	  // $sql = "UPDATE user SET Name='Vasilis' WHERE Address='$address'";
      // $query=  "UPDATE user SET Name = ' $username', E-mail = '$mail', Telephone = '$telephone', 
      // Institution = '$institution', Institution Country = '$institution_country', Address = '$address',
      // City = '$city', State = '$state', Postal Code = '$postal_code', Country = '$country' WHERE Password = '$password'";
      // $result = $conn->query($query);
      // if (!$result) die ($conn->error);
 //      if ($conn->query($sql) === TRUE) 
 //      {
	//     echo "Record updated successfully";
	//   } 
	//   else 
	//   {
	//   	echo "Error updating record: " . $conn->error;
	//   }
	    

	// $result->close();
		// $conn->close();
		
 
?>





