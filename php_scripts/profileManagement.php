<?php
	session_start();
	// if ((isset($_SESSION['name']) != '')) 
	// {
	// 	echo $_SESSION['name'];
	// 	//header("Location: mainSample.php");
	// }
	//echo "myefmtmymy";
	//error_reporting(-1);
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
				if ($conn->connect_error) die($conn->connect_error);
				
				if(isset($_SESSION['name']) || isset($_SESSION['username']))
				{

			?>
			<form method="post" action="">
			   <label> Name </label> <input type="text" name="username" placeholder= <?php echo $_SESSION['username'] ?> /> <br>
			   <label> E-mail </label> <input type="text" name="email" placeholder= <?php echo $_SESSION['email'] ?> /> <br>
			   <label> Telephone </label> <input type="text" name="telephone" placeholder= <?php echo $_SESSION['telephone'] ?> /> <br>
			   <label> Institution </label> <input type="text" name="institution" placeholder= <?php echo $_SESSION['institution'] ?> /> <br>
			   <label> Institution Country </label> <input type="text" name="institution_country" 
			   placeholder= <?php echo $_SESSION['institution_country'] ?> /> <br>
			   <label> Address </label> <input type="text" name="address" placeholder= <?php echo $_SESSION['address'] ?> /> <br>
			   <label> City </label> <input type="text" name="city" placeholder= <?php echo $_SESSION['city'] ?> /> <br>
			   <label> State </label> <input type="text" name="state" placeholder= <?php echo $_SESSION['state'] ?> /> <br>
			   <label> Postal Code </label> <input type="text" name="postal_code" placeholder= <?php echo $_SESSION['postal_code'] ?> /> <br>
			   <label> Country </label> <input type="text" name="country" placeholder= <?php echo $_SESSION['country'] ?> /> <br> <br>
			   <input style="margin-left: 7%;"  type="submit" name="subUpdate" value="Update" /> <br> <br>
			</form >
       				   
		   <?php

				   	
				 
				
				
				}
				$conn->close();
    		?>


		    <?php
		    	if (isset($_POST["subUpdate"]))
		    	{
		    		require_once 'login.php'; 
		    		$conn = new mysqli($hn, $un, $pw, $db);
		    		if ($conn->connect_error)	die($conn->connect_error);

		    		if (isset($_POST['username']))
		    		{
		    			$_SESSION['username'] = $_POST['username'];
		    		}

		    		if (isset($_POST['email']))
		    		{
		    			$_SESSION['email'] = $_POST['email'];
		    		}

		    		if (isset($_POST['telephone']))
		    		{
		    			$_SESSION['telephone'] = $_POST['telephone'];
		    		}

		    		if (isset($_POST['institution']))
		    		{
		    			$_SESSION['institution'] = $_POST['institution'];
		    		}

		    		if (isset($_POST['institution_country']))
		    		{
		    			$_SESSION['institution_country'] = $_POST['institution_country'];
		    		}

		    		if (isset($_POST['address']))
		    		{
		    			$_SESSION['address'] = $_POST['address'];
		    		}

		    		if (isset($_POST['city']))
		    		{
		    			$_SESSION['city'] = $_POST['city'];
		    		}

		    		if (isset($_POST['state']))
		    		{
		    			$_SESSION['state'] = $_POST['state'];
		    		}	

		    		if (isset($_POST['postal_code']))
		    		{
		    			$_SESSION['postal_code'] = $_POST['postal_code'];
		    		}

		    		if (isset($_POST['country']))
		    		{
		    			$_SESSION['country'] = $_POST['country'];
		    		}




		    		// $_SESSION['username'] = $_POST["username"];
		    		// $_SESSION['email'] = $_POST["email"];
		    		// $_SESSION['telephone'] = $_POST["telephone"];
		    		// $_SESSION['institution'] = $_POST["institution"];
		    		// $_SESSION['institution_country'] = $_POST["institution_country"];
		    		// $_SESSION['address'] = $_POST["address"];
		    		// $_SESSION['city'] = $_POST["city"];
		    		// $_SESSION['state'] = $_POST["state"];
		    		// $_SESSION['postal_code'] = $_POST["postal_code"];
		    		// $_SESSION['country'] = $_POST["country"];


		    		if(isset($_SESSION['name']))
					{
					   $username = $_SESSION['name']; 
					}

		    		// $address = "Pen";

		    		// $sql = "UPDATE user SET Name='Doe' WHERE Address='$address'";

		    		// $sql = "UPDATE user SET Name = '".$_POST["username"]."', Email = '".$_POST["email"]."',                   					 Telephone = '".$_POST["telephone"]."', Institution = '".$_POST["institution"]."', 
		    		// 						InstitutionCountry = '".$_POST["institution_country"]."', 
		  				// 					Address = '".$_POST["address"]."', City = '".$_POST["city"]."', 
		    		// 						State = '".$_POST["state"]."', PostalCode = '".$_POST["postal_code"]."', 
		    		// 						Country = '".$_POST["country"]."' WHERE Name = '$username'";

		    		$sql = "UPDATE user SET Name = '".$_POST["username"]."' WHERE Name = '$username'";


					if ($conn->query($sql) === TRUE) 
					{
						echo "<script type= 'text/javascript'>alert('Your info updated successfully');</script>";
						// header("Location : reg3_3.php");
					} else 
					{
						echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
					}

		    		$conn->close();
		    	}
		    ?>


       	</div>

	</body>
</html>