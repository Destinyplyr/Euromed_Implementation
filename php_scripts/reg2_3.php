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

	    <h1>  Registration - Step 2/3: </h1>
	    <br>
	    <progress value="2" max="3" style="margin-left: 7%;">
	    </progress>

	    <br> <br> <br>

	    <h1 style="margin-left: 0%;"> Registration details </h1> 

	    <br>  

		<div style="padding-left: 5%;">


		<form style="padding-left: 7.5%;" method="post" action="">
			<label>Name :</label> <label style="padding-left: 15.5%;">E-mail :</label> <label style="padding-left: 15.5%;"> Password : </label> <br> 
			<input type="text" name="name" placeholder="name" />
			<input style="margin-left: 5%;" type="text" name="e-mail" placeholder="e-mail" />
			<input style="margin-left: 5%;" type="text" name="password" placeholder="password" /> <br> <br>
			<label> Telephone : </label> <label style="padding-left: 13%;"> Address :</label> <label style="padding-left: 14.5%;"> City :</label>  <label style="padding-left: 16.5%;"> Postal Code : </label> <br>
			<input type="text" name="telephone" placeholder="telephone" />
			<input style="margin-left: 5%;" type="text" name="address" placeholder="address" />
			<input style="margin-left: 5%;" type="text" name="city" placeholder="city" />
			<input style="margin-left: 5%;" type="text" name="postal_code" placeholder="postal_code" /> <br> <br>
			<label> Institution : </label>  <label style="padding-left: 13%;"> State:</label> <label style="padding-left: 16.5%;"> Institution Country :</label> <label style="padding-left: 8%;"> Country : </label> <br> 
			<input style="margin-left: 0%;" type="text" name="institution" placeholder="institution" />
			<input style="margin-left: 5%;" type="text" name="state" placeholder="state" />
			<select style="margin-left: 5%; width: 175px;" class="reasons">
	   		  <option value="0"> List of countries </option>
	   		  <option value="1"> Cyprus </option>
	   		  <option value="2"> Greece </option>
	   		  <option value="3"> USA </option>
	   		  <option value="3"> UK </option>
	   		</select>
			<select style="margin-left: 5%; width: 175px;" class="reasons">
	   		  <option value="0"> List of countries </option>
	   		  <option value="1"> Cyprus </option>
	   		  <option value="2"> Greece </option>
	   		  <option value="3"> USA </option>
	   		  <option value="3"> UK </option>
	   		</select>
		</form>
		</div>

		<br> <br>


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

	    <form style="padding-left: 0%;" method="post" action="">
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


	    <br> <br>   

	    <div id="getTickets"> 
	      <button class="button listButton"> Proceed </button>
	    </div>

	    <br>   <br>

	    <hr style="width: 85%">



	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <div style="padding-left: 38%; padding-bottom: 10px;"  id="media">
	      <a href="http://www.w3schools.com">
	      <img  alt="facebook" src="../images/_facebookIcon.png" width="100" height="100">
	      </a>

	      <a href="http://www.hello.com">
	      <img  alt="twitter" src="../images/_twitterIcon.png" width="100" height="100"> </a>

	      <a href="http://www.w3schools.com">
	      <img  alt="instagram" src="../images/_instagramIcon.png" width="100" height="100">
	      </a>
	    </div>

	</body>




</html>