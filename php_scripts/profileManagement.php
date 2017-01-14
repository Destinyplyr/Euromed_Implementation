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
				if ($conn->connect_error)	die($conn->connect_error);

				if(isset($_SESSION['name']))
   				{
   					$username = $_SESSION['name']; 
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
   				   	mysqli_free_result($result);
   				}
   				$conn->close();
			?>
		</div>

		<?php
	    	if (isset($_POST["subUpdate"]))
	    	{
	    		require_once 'login.php'; 
	    		$conn = new mysqli($hn, $un, $pw, $db);
	    		if ($conn->connect_error)	die($conn->connect_error);
	    	
	    		

	    		$conn->close();
	  			
	    	}
		?>

	</body>
</html>