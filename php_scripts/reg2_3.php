<?php 
  session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Registration 2/3 </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/reg2_3.css">
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

	    <a href="../php_scripts/index.php">
	       <img id="homeBanner" alt="Link to homepage" src="http://www.culturavietii.ro/wp-content/uploads/2015/04/TranshumanMichelangelo-1024x567.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <h1>  Registration - Step 2/3: </h1>
	    <br>
	    <progress value="2" max="3" style="margin-left: 7%;">
	    </progress>

	    <br> <br> <br>

	    <h1 style="margin-left: 0%;"> Registration details </h1> 

	    <br>  

		<div style="padding-left: 5%;">


		<form style="padding-left: 7.5%;" method="post" action="">
			<label>Username :</label> <br>
			<input type="text" name="username" placeholder="username" required /> <br> <br>
			<label>Name :</label> <label style="padding-left: 15.5%;">E-mail :</label> <label style="padding-left: 15.5%;"> Password : </label> 
			<label style="padding-left: 12.5%;"> Role selection for pricing : </label> <br> 
			<input type="text" name="name" placeholder="name" required />
			<input style="margin-left: 5%;" type="text" name="email" placeholder="email" required/>
			<input style="margin-left: 5%;" type="password" name="password" placeholder="password" required/>
			<select required id="priceSelector" onchange="showPrice();" name="role" style="margin-left: 5%; width: 175px;" class="reasons" >
	   		  <option value=""> None </option>
	   		  <option value="140&euro;"> Visitor-Early Bird </option>
	   		  <option value="30&euro;"> Student-Early Bird </option>
	   		  <option value="You will be contacted by e-mail."> Exhibitor </option>
	   		  <option value="20&euro;"> Speaker </option>
	   		</select> <br> <br>
			<label> Telephone : </label> <label style="padding-left: 13%;"> Address :</label> <label style="padding-left: 14.5%;"> City :</label>  <label style="padding-left: 16%;"> Postal Code : </label> <br>
			<input type="text" name="telephone" placeholder="telephone" required/>
			<input style="margin-left: 5%;" type="text" name="address" placeholder="address" required/>
			<input style="margin-left: 5%;" type="text" name="city" placeholder="city" required/>
			<input style="margin-left: 5%;" type="text" name="postal_code" placeholder="postal_code" required/> <br> <br>
			<label> Institution : </label>  <label style="padding-left: 13%;"> State:</label> <label style="padding-left: 15.5%;"> Institution Country :</label> <label style="padding-left: 8.5%;"> Country : </label> <br> 
			<input style="margin-left: 0%;" type="text" name="institution" placeholder="institution" required/>
			<input style="margin-left: 5%;" type="text" name="state" placeholder="state" required/>
			<select required name="institution_country" style="margin-left: 5%; width: 175px;" class="reasons" >
	   		  <option value=""> None </option>
	   		  <option value="Cyprus"> Cyprus </option>
	   		  <option value="Greece"> Greece </option>
	   		  <option value="USA"> USA </option>
	   		  <option value="UK"> UK </option>
	   		</select>
			<select required name="country" style="margin-left: 3.8%; width: 175px;" class="reasons" >
	   		  <option value=""> None </option>
	   		  <option value="Cyprus"> Cyprus </option>
	   		  <option value="Greece"> Greece </option>
	   		  <option value="USA"> USA </option>
	   		  <option value="UK"> UK </option>
	   		</select>
	   		<input class="regiSubmit" type="submit" value="Proceed" name="submitRegi" required/><br />
		</form>
		</div>


		<br> <br>
		<p style="padding-left: 50%; color:darkorange; font-size: 25px; " id="price"></p>

		<hr style="width: 85%">

		<h1 > Billing Information </h1>

		<p> Payment Method 
			<select style="margin-left: 2%; width: 15%;" class="reasons">
	   		  <option value="0"> List of methods </option>
	   		  <option value="1"> Paypal </option>
	   		  <option value="2"> Credit Card </option>
	   		  <option value="3"> Bank Transer </option>
	   		  <option value="4"> Jewellery </option>
	   		</select>
		</p>
		<br><br>

		<div style="padding-left: 7%;">

	    <form style="padding-left: 0%;" method="" action="">
	    	<label>Name :</label> <label style="padding-left: 15%;"> Telephone :</label> <br> <input type="text" name="name" placeholder="name" />
	    	<input style="margin-left: 5%;" type="text" name="e-mail" placeholder="telephone" /><br><br>
	    	<label>Address :</label> <label style="padding-left: 13.5%;">City :</label> <br> <input type="text" name="telephone" placeholder="address" />
	    	<input style="margin-left: 5%;" type="text" name="institution" placeholder="city" /><br><br>
	    	<label> State :</label> <label style="padding-left: 15.5%;"> Postal Code :</label> <br> <input type="text" name="instCountry" placeholder="state" />
	    	<input style="margin-left: 5%;" type="text" name="address" placeholder="postal_code" /><br> <br> <br>
	    	<label style="padding-left: 10%;"> Country :</label> <br>
			<select style="margin-left: 10%; width: 15%;" class="reasons">
	   		  <option value="0"> List of countries </option>
	   		  <option value="1"> Cyprus </option>
	   		  <option value="2"> Greece </option>
	   		  <option value="3"> USA </option>
	   		</select><br><br>
	    </form>
	    </div>
	     
	    <br>

	   



	    <hr style="width: 85%">



	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <div style="padding-left: 38%; padding-bottom: 10px; margin-bottom: 0%;"  id="media">
	      <a href="http://www.w3schools.com">
	      <img  alt="facebook" src="../images/_facebookIcon.png" width="100" height="100">
	      </a>

	      <a href="http://www.hello.com">
	      <img  alt="twitter" src="../images/_twitterIcon.png" width="100" height="100"> </a>

	      <a href="http://www.w3schools.com">
	      <img  alt="instagram" src="../images/_instagramIcon.png" width="100" height="100">
	      </a>
	    </div>


	    <?php
	    	if (isset($_POST["submitRegi"]))
	    	{
	    		require_once 'login.php'; 
	    		$conn = new mysqli($hn, $un, $pw, $db);
	    		if ($conn->connect_error)	die($conn->connect_error);

	    		// $address = "Pen";

	    		// $sql = "UPDATE user SET Name='Doe' WHERE Address='$address'";

	    		$sql = "INSERT INTO user (Name, Email, Telephone, Institution, InstitutionCountry, Address, City, 
	    		State, PostalCode, Country, Password, Role, ActualName) VALUES ('".$_POST["username"]."', '".$_POST["email"]."', 
	    		'".$_POST["telephone"]."', '".$_POST["institution"]."', '".$_POST["institution_country"]."', 
	    		'".$_POST["address"]."', '".$_POST["city"]."', '".$_POST["state"]."', '".$_POST["postal_code"]."', 
	    		'".$_POST["country"]."', '".$_POST["password"]."', '".$_POST["role"]."', '".$_POST["name"]."')";


	    		$_SESSION['username'] = $_POST["username"];
	    		$_SESSION['email'] = $_POST["email"];
	    		$_SESSION['telephone'] = $_POST["telephone"];
	    		$_SESSION['institution'] = $_POST["institution"];
	    		$_SESSION['institution_country'] = $_POST["institution_country"];
	    		$_SESSION['address'] = $_POST["address"];
	    		$_SESSION['city'] = $_POST["city"];
	    		$_SESSION['state'] = $_POST["state"];
	    		$_SESSION['postal_code'] = $_POST["postal_code"];
	    		$_SESSION['country'] = $_POST["country"];
	    		

				if ($conn->query($sql) === TRUE) 
				{
					echo "<script type= 'text/javascript'>alert('Your info submitted successfully');</script>";
					// header("Location : reg3_3.php");
				} else 
				{
					echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
				}

	    		$conn->close();
	    	}
	    ?>

	</body>




</html>