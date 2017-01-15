<?php
	session_start();
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Profile Management </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/profileManagement.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
	    <script type="text/javascript" src="../js_scripts/testFrame.js"></script>     
	    <!-- <link rel="stylesheet" type="text/css" href ="../css_scripts/tdButton.css"> -->
	</head>

	<body>
		<ul>
	      <div id="media">
	        <a href="http://www.w3schools.com">
	        <img  alt="facebook" src="../images/_facebookIcon.png" width="50" height="55">
	        </a>

	        <a href="http://www.hello.com">
	        <img  alt="twitter" src="../images/_twitterIcon.png" width="50" height="55"> </a>

	        <a href="http://www.w3schools.com">
	        <img  alt="instagram" src="../images/_instagramIcon.png" width="50" height="55">
	        </a>
	      </div>


	      <li><a href="contact.php"> Contact </a></li>
	      <li> <a href="faq.php"> FAQ </a></li>
	      <?php 
	       	if(isset($_SESSION['name']))
	        {
	        	echo "<li> <a>  Hello user,  " .  $_SESSION['name'] . "</a> </li>"; 
	        }
	      ?> 
	      <li style="padding-left: 15em" class="dropdown">
	        <a href="javascript:void(0)" class="dropbtn"> Visitors </a>
	        <div class="dropdown-content">
	          <a href="#">Link 1</a>
	          <a href="#">Link 2</a>
	          <a href="#">Link 3</a>
	        </div>
	      </li>
	      <li class="dropdown">
	        <a href="javascript:void(0)" class="dropbtn"> Speakers </a>
	        <div class="dropdown-content">
	          <a href="#">Link 1</a>
	          <a href="#">Link 2</a>
	          <a href="#">Link 3</a>
	        </div>
	      </li>
	      <li class="dropdown">
	        <a href="javascript:void(0)" class="dropbtn"> Exhibitors </a>
	        <div class="dropdown-content">
	          <a href="#">Link 1</a>
	          <a href="#">Link 2</a>
	          <a href="#">Link 3</a>
	        </div>
	      </li>
	      <li><a href="#venue"> Venue </a></li>
	      <li><a href="previous_events.php"> Previous Events </a></li>
	      <li class="tickets"><a href="#tickets"> TICKETS </a></li>
	    </ul>

	    <a href="../php_scripts/mainSample.php">
	       <img id="homeBanner" alt="Link to homepage" src="http://www.culturavietii.ro/wp-content/uploads/2015/04/TranshumanMichelangelo-1024x567.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br> 

	    <h1> Edit your profile </h1> <br>

	    <br> 

	    <p > Your Information </p>

	    <hr style=" width: 85%;">

       	<div style="padding-left: 7.5%;">
			<?php  
				require_once 'login.php'; 
				$conn = new mysqli($hn, $un, $pw, $db);
				if ($conn->connect_error)	die($conn->connect_error);

				if(isset($_SESSION['name']))
   				{
   					$username = $_SESSION['name']; 
   					//echo "Session name before output form : " . $username;
   					$query = "SELECT * FROM user WHERE Name = '$username'";
   				    if ($result=mysqli_query($conn,$query))
   				   	{
   				   		$row=mysqli_fetch_row($result);
   			?>
   					<form style="margin-left: 13%;" method="post" action="">
	   				   <label> Name </label> <input type="text" name="name" placeholder= <?php echo $row[0] ?> /> <br>
	   				   <label> E-mail </label> <input type="text" name="email" placeholder= <?php echo $row[1] ?> /> <br>
	   				   <label> Telephone </label> <input type="text" name="telephone" placeholder= <?php echo $row[2] ?> /> <br>
	   				   <label> Institution </label> <input type="text" name="institution" placeholder= <?php echo $row[3] ?> /> <br>
	   				   <label> Institution Country </label> <input type="text" name="institution_country" 
	   				   placeholder= <?php echo $row[4] ?> /> <br>
	   				   <label> Address </label> <input type="text" name="address" placeholder= <?php echo $row[5] ?> /> <br>
	   				   <label> City </label> <input type="text" name="city" placeholder= <?php echo $row[6] ?> /> <br>
	   				   <label> State </label> <input type="text" name="state" placeholder= <?php echo $row[7] ?> /> <br>
	   				   <label> Postal Code </label> <input type="text" name="postalCode" placeholder= <?php echo $row[8] ?> /> <br>
	   				   <label> Country </label> <input type="text" name="country" placeholder= <?php echo $row[9] ?> /> <br> <br>
	   				   <input style="margin-left: 10%;"  type="submit" name="subUpdate" value="Update" /> 
	   				</form >
   			<?php
   				   	}	
   				   	//mysqli_free_result($result);
   				}
   				//$conn->close();
			?>
		</div>

		<?php
			if (isset($_POST['subUpdate']))
			{
				//echo "my dawg name before output form : " . $_SESSION['name'];
				require_once 'login.php'; 
		    	$conn = new mysqli($hn, $un, $pw, $db);
		    	if ($conn->connect_error)	die($conn->connect_error);
				
				$username = $_SESSION['name'];
		    	//setcookie('myname', '$username');

				ini_set('display_errors',1);
				error_reporting(E_ALL);

		        if(mysqli_connect_errno())
		        {
		            echo mysqli_connect_error();
		        }

		        if (isset($_SESSION['name']))
		        {
		        	$name = $_SESSION['name'];
		        	//echo "NEW NAME : " . $name;
		        }

		     	if (isset($_SESSION['email']))
		     	{
		     		$email = $_SESSION['email'];
		     	}

		     	if (isset($_SESSION['telephone']))
		     	{
		     		$telephone = $_SESSION['telephone'];
		     	}

		     	if (isset($_SESSION['institution']))
		     	{
		     		$institution = $_SESSION['institution'];
		     	}

		     	if (isset($_SESSION['institution_country']))
		     	{
		     		$institution_country = $_SESSION['institution_country'];
		     	}

		     	if (isset($_SESSION['address']))
		     	{
		     		$address = $_SESSION['address'];
		     	}

		     	if (isset($_SESSION['city']))
		     	{
		     		$city = $_SESSION['city'];
		     	}

		     	if (isset($_SESSION['state']))
		     	{
		     		$state = $_SESSION['state'];
		     	}

		     	if (isset($_SESSION['postalCode']))
		     	{
		     		$postalCode = $_SESSION['postalCode'];
		     	}

		     	if (isset($_SESSION['country']))
		     	{
		     		$country = $_SESSION['country'];
		     	}

		       	if (isset($_POST['name']))
		       	{
		       		$name = $_POST['name'];
		       		//session_start();
		       		$_SESSION['name'] = $username;
		       		//setcookie('myname', '$name');
		       	}

		       	if (isset($_POST['email']))
		       	{
		       		$email = $_POST['email'];
		       	}

		       	if (isset($_POST['telephone']))
		       	{
		       		$telephone = $_POST['telephone'];
		       	}

		       	if (isset($_POST['institution']))
		       	{
		       		$institution = $_POST['institution'];
		       	}

		       	if (isset($_POST['institution_country']))
		       	{
		       		$institution_country = $_POST['institution_country'];
		       	}

		       	if (isset($_POST['address']))
		       	{
		       		$address = $_POST['address'];
		       	}

		       	if (isset($_POST['city']))
		       	{
		       		$city = $_POST['city'];
		       	}

		       	if (isset($_POST['state']))
		       	{
		       		$state = $_POST['state'];
		       	}

		       	if (isset($_POST['postalCode']))
		       	{
		       		$postalCode = $_POST['postalCode'];
		       	}

		       	if (isset($_POST['country']))
		       	{
		       		$country = $_POST['country'];
		       	}


		        $update_values = array();
		        if($name != "")
		            $update_values[] = "Name ='".$name."'";  
		        if($email != "")
		            $update_values[] = "Email='".$email."'";
		        if($telephone != "")
		            $update_values[] = "Telephone='".$telephone."'";
		        if($institution != "")
		            $update_values[] = "Institution='".$institution."'";
		        if($institution_country != "")
		            $update_values[] = "InstitutionCountry='".$institution_country."'";
		        if($address != "")
		            $update_values[] = "Address='".$address."'";
		        if($city != "")
		            $update_values[] = "City='".$city."'";
		        if($state != "")
		            $update_values[] = "State='".$state."'";
		        if($postalCode != "")
		            $update_values[] = "PostalCode='".$postalCode."'";
		        if($country != "")
		            $update_values[] = "Country='".$country."'";

		        $update_values_imploded = implode(', ', $update_values);

		        if(!empty($update_values) )
	            {
	                $q = "UPDATE user SET $update_values_imploded WHERE Name ='$username' ";
	                $r = mysqli_query($conn, $q);
	                mysqli_close($conn);
	                if($r)
	                {
	                    echo "<br>Information stored successfully";
	                    header("Location: profileManagement.php");
	          
	                }
	            }
	            // echo "<script type= 'text/javascript'> window.location.reload(); </script> ";
	            // die();
			}
		












	    	//if (isset($_POST["subUpdate"]))
	    	//{
	    		//require_once 'login.php'; 
	    		//$conn = new mysqli($hn, $un, $pw, $db);
	    		//if ($conn->connect_error)	die($conn->connect_error);


	    	
	    		// $username = $_SESSION['name'];
	    		// $semaphore = false;
	    		// $query = "UPDATE user SET ";
	    		// $fields = array('Name','Email','Telephone', 'Institution', 'InstitutionCountry', 'Address', 'City', 'State', 'PostalCode', 'Country');
	    		// foreach ($fields as $field) {
	    		//    if (isset($_POST[$field]) and !empty($_POST[$field])) 
	    		//    {
	    		//      $var = mysqli_real_escape_string($_POST[$field]);
	    		//      $query .= uppercase($field) . " = '$var'";
	    		//      $semaphore = true;
	    		//    }
	    		// }

	    		// if (isset($_POST['name']))
	    		// {
	    		// 	$_SESSION['name'] = $_POST['name'];
	    		// }

	    		// if ($semaphore) 
	    		// {
	    		//    $query .= " WHERE Name = '$username'";
	    		//    mysqli_query($query);
	    		// }



	    // 		if ($_POST['name'] != " ")
	    // 		{
	    // 			if (isset($_SESSION['name']))
	    // 			{
	    // 				$name = $_POST['name'];
		   //  			$prev_name = $_SESSION['name'];
		   //  			$sql = "UPDATE user SET Name ='$name' WHERE Name = '$prev_name'";
		   //  			if ($conn->query($sql) === TRUE) 
					// 	{
					// 		header("Location: profileManagement.php");
					// 		// echo "<script type= 'text/javascript'>alert('Your info updated successfully');</script>";
					// 		// echo "<script type= 'text/javascript'> window.location.reload(); </script> ";
					// 	} 
					// 	else 
					// 	{
					// 		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
					// 	}
		   //  			$_SESSION['name'] = $_POST['name'];
	    // 			}
	    // 		}


	    // 		if ($_POST['email'] != "")
	    // 		{
    	// 			$email = $_POST['email'];
	    // 			$prev_name = $_SESSION['name'];
	    // 			$sql = "UPDATE user SET Email ='$email' WHERE Name = '$prev_name'";
	    // 			if ($conn->query($sql) === TRUE) 
					// {
					// 	header("Location: profileManagement.php");
					// 	// echo "<script type= 'text/javascript'>alert('Your info updated successfully');</script>";
					// 	// echo "<script type= 'text/javascript'> window.location.reload(); </script> ";
					// } 
					// else 
					// {
					// 	echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
					// }
	    // 			// $_SESSION['name'] = $_POST['name'];
	    // 		}


	    		//$conn->close();
	  			
	    	//}
		?>
	</body>
</html>