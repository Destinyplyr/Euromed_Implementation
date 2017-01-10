<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Profile Management </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/profileManagement.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">    
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

    			$result->data_seek(0);
    			echo "<p> User's name : "  . $result->fetch_assoc()['Name']	. '</p> <br>';	
    			$result->data_seek(0);
    			echo "<p> User's e-mail : "  . $result->fetch_assoc()['E-mail']	. '</p> <br>';
    			$result->data_seek(0);
    			echo "<p> User's telephone : "  . $result->fetch_assoc()['Telephone']	. '</p>';	
    			$result->data_seek(0);
    			echo "<p> User's institution : "  . $result->fetch_assoc()['Institution']	. '</p> <br>';	
    			$result->data_seek(0);
    			echo "<p> User's institution country : "  . $result->fetch_assoc()['Institution Country']	. '</p> <br>';	
    			$result->data_seek(0);
    			echo "<p> User's address : "  . $result->fetch_assoc()['Address']	. '</p> <br>';	
    			$result->data_seek(0);
    			echo "<p> User's city : "  . $result->fetch_assoc()['City']	. '</p> <br>';	
    			$result->data_seek(0);
    			echo "<p> User's state : "  . $result->fetch_assoc()['State']	. '</p> <br>';		
    			$result->data_seek(0);
    			echo "<p> User's postal code : "  . $result->fetch_assoc()['Postal Code']	. '</p> <br>';
    			$result->data_seek(0);
    			echo "<p> User's country : "  . $result->fetch_assoc()['Country']	. '</p> <br>';	
    		



	    		$result->close();
	    		$conn->close();
	    	// }

	    /*	if (isset($_GET['hello'])) 
	    	{
	    	   myFuc();
	    	}*/
	    	
	    ?>

	    <br> 

	    <p> Your Information  </p>


	    

	    


	    <form style="padding-left: 7.5%;" method="post" action="">
	    	<label>Name :</label> <label style="padding-left: 15%;">E-mail :</label> <br> <input type="text" name="name" placeholder="name" />
	    	<input style="margin-left: 5%;" type="text" name="e-mail" placeholder="e-mail" /><br><br>
	    	<label>Telephone :</label> <label style="padding-left: 12.5%;">Institution :</label> <br> <input type="text" name="telephone" placeholder="telephone" />
	    	<input style="margin-left: 5%;" type="text" name="institution" placeholder="institution" /><br><br>
	    	<label>Institution Country :</label> <label style="padding-left: 7.5%;">Address :</label> <br> <input type="text" name="instCountry" placeholder="institution country" />
	    	<input style="margin-left: 5%;" type="text" name="address" placeholder="address" /><br><br>
	    	<label>City :</label> <label style="padding-left: 16%;">State :</label> <br> <input type="text" name="city" placeholder="city" />
	    	<input style="margin-left: 5%;" type="text" name="state" placeholder="state" /><br><br>
	    	<label>Postal Code :</label> <label style="padding-left: 11.5%;">Country :</label> <br> <input type="text" name="postalCode" placeholder="postal code" />
	    	<input style="margin-left: 5%;" type="text" name="country" placeholder="country" /><br><br>

	    	<label style="padding-left: 8%;">Password:</label><br>
	    	<input  style="margin-left: 8%;" type="password" name="pass" placeholder="password" />  <br><br>
	    	<input  type="submit" name="submit" value="Update" /> 
	    </form>


	    <br> <br> 

		<!-- <div style="padding-left: 5.5%;">
			<button class="button listButton"> Update </button>
		</div> -->

	</body>
</html>