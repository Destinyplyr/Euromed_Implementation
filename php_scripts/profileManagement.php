<?php
	// session_start();
	include('update.php');
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


	      <li><a href="#contact"> Contact </a></li>
	      <li> <a href="#faq"> FAQ </a></li>
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
	      <li><a href="#prev_events"> Previous Events </a></li>
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

       				include('login.php'); 

       				$conn = new mysqli($hn, $un, $pw, $db);
       				if ($conn->connect_error) die($conn->connect_error);
       				if(isset($_SESSION['name']))
       				{
       				   $username = $_SESSION['name']; 
       				   $query = "SELECT * FROM user WHERE Name = '$username'";

       				    if ($result=mysqli_query($conn,$query))
       				   	{
       				   	$row=mysqli_fetch_row($result);
       			?>
       				   <label> Name </label> <input type="text" name="Name" placeholder= <?php echo $row[0] ?> /> <br>
       				   <label> E-mail </label> <input type="text" name="E-mail" placeholder= <?php echo $row[1] ?> /> <br>
       				   <label> Telephone </label> <input type="text" name="Telephone" placeholder= <?php echo $row[2] ?> /> <br>
       				   <label> Institution </label> <input type="text" name="Institution" placeholder= <?php echo $row[3] ?> /> <br>
       				   <label> Institution Country </label> <input type="text" name="Institution Country" 
       				   placeholder= <?php echo $row[4] ?> /> <br>
       				   <label> Address </label> <input type="text" name="Address" placeholder= <?php echo $row[5] ?> /> <br>
       				   <label> City </label> <input type="text" name="City" placeholder= <?php echo $row[6] ?> /> <br>
       				   <label> State </label> <input type="text" name="State" placeholder= <?php echo $row[7] ?> /> <br>
       				   <label> Postal Code </label> <input type="text" name="Postal Code" placeholder= <?php echo $row[8] ?> /> <br>
       				   <label> Country </label> <input type="text" name="Country" placeholder= <?php echo $row[9] ?> /> <br>
       				   <?php

       				   	}
       				   		//echo "<table>";
       				   		
       				   		// for ($i=0; $i < 10; ++$i) 
       				   		// {
       				   		// 	$fieldinfo=mysqli_fetch_field($result);
       				   		//    	echo "<label>" . $fieldinfo->name  . "</label>" . "<input name = " .  "'". $fieldinfo->name . "'" . " type = " .  "text " . "placeholder = "  . "'". $row[$i] . "'" . "/>" . "<br>";
       				   		// }
       				   		
       				   	 	mysqli_free_result($result);
       				
       				
       				}
       				$conn->close();
       		    ?>


       	</div>
       	<br>
       	<form method="post" action="">
       		<input style="margin-left: 13%;"  type="submit" name="subUpdate" value="Update" /> 
       	</form >
	    
	    <!-- <div style="padding-left: 50%;">
	    <p> Update Your Information  </p>



	    <form style="padding-left: 7.5%;" method="post" action="">
	    	<label>Name :</label> <label style="padding-left: 25%;">E-mail :</label> <br> <input type="text" name="name" placeholder="name" />
	    	<input style="margin-left: 5%;" type="text" name="e-mail" placeholder="e-mail" /><br><br>
	    	<label>Telephone :</label> <label style="padding-left: 20%;">Institution :</label> <br> <input type="text" name="telephone" placeholder="telephone" />
	    	<input style="margin-left: 5%;" type="text" name="institution" placeholder="institution" /><br><br>
	    	<label>Institution Country :</label> <label style="padding-left: 10%;">Address :</label> <br> <input type="text" name="instCountry" placeholder="institution country" />
	    	<input style="margin-left: 5%;" type="text" name="address" placeholder="address" /><br><br>
	    	<label>City :</label> <label style="padding-left: 27%;">State :</label> <br> <input type="text" name="city" placeholder="city" />
	    	<input style="margin-left: 5%;" type="text" name="state" placeholder="state" /><br><br>
	    	<label>Postal Code :</label> <label style="padding-left: 18%;">Country :</label> <br> <input type="text" name="postalCode" placeholder="postal code" />
	    	<input style="margin-left: 5%;" type="text" name="country" placeholder="country" /><br><br>

	    	<label style="padding-left: 8%;">Password:</label><br>
	    	<input  style="margin-left: 8%;" type="password" name="pass" placeholder="password" />  <br><br>
	    	<input  type="submit" name="submit" value="Update" /> 
	    </form>
	    </div> -->


	    <br> <br>
	    <div>
    	    

	    </div>
	   



	   

	    <br> <br> 

		<!-- <div style="padding-left: 5.5%;">
			<button class="button listButton"> Update </button>
		</div> -->

	</body>
</html>