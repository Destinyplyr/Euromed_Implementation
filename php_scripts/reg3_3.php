<?php 
  session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Registration 3/3 </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/reg3_3.css">
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

	    <h1>  Registration - Step 3/3: </h1>
	    <br>
	    <progress value="3" max="3" style="margin-left:7%;">
	    </progress>

	    <br>   <br>   <br> 

	    <h1> Thanks for your participation! </h1>
	    <h2> We can't wait to meet you!</h2>

	    <hr style="width: 85%">

	    <br> 
	    <h2> ...and while we're at it": </h2>
	 	<h3> Check out this page of this museum, near the conference center. </h3>

	 	<div>

	 		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	 			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	 			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	 			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	 			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	 			proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p> 

	 		<img style="padding-left: 7%; float: left;" src="http://osmiva.com/wp-content/uploads/2013/03/5-National-Archaeological-Museum.jpg" width = "400" height = "250">

	 		<br> <br>   <br> <br> <br>   <br> <br> <br>   <br> 
	 			 
	 	
	 	</div>

	 	<br> <br>   <br> <br> <br> <br> <br>   <br>   <br>

	 	<div id="programButton"> 
	 	  <button class="button listButton"> Back to Home </button>
	 	  <button class="button listButton"> Program </button>
	 	</div>

	    <br> <br>   <br>   <br> <br> <br>   <br>   

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