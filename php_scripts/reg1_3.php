<?php 
  session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Registration 1/3 </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/reg1_3.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">    
	    <!-- <link rel="stylesheet" type="text/css" href ="../css_scripts/tdButton.css"> -->
	</head>

	<body>
		<ul>
      <div id="media">
        <a href="http://www.facebook.com">
        <img  alt="facebook" src="../images/_facebookIcon.png" width="50" height="55">
        </a>

        <a href="http://www.twitter.com">
        <img  alt="twitter" src="../images/_twitterIcon.png" width="50" height="55"> </a>

        <a href="http://www.instagram.com">
        <img  alt="instagram" src="../images/_instagramIcon.png" width="50" height="55">
        </a>
      </div>


      <li><a href="contact.php"> Contact </a></li>
      <li> <a href="faq.php"> FAQ </a></li>
      <li style="padding-left: 15em" class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"> Visitors </a>
        <div class="dropdown-content">
          <a href="program.php">Program</a>
          <a href="students.php">Students</a>
          <a href="reg1_3.php">GET TICKETS</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"> Speakers </a>
        <div class="dropdown-content">
          <a href="program.php">Program</a>
          <a href="provisions.php">Provisions</a>
          <a href="submitPaper.php">Submit your paper</a>
        </div>
      </li>
      <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn"> Exhibitors </a>
        <div class="dropdown-content">
          <a href="program.php">Program</a>
          <a href="exhibitors.php">Venue and Provisions</a>
          <a href="exhibitors.php">Submit your request</a>
        </div>
      </li>
      <li><a href="venue.php"> Venue </a></li>
      <li><a href="previous_events.php"> Previous Events </a></li>
      <li class="tickets"><a href="reg1_3.php"> TICKETS </a></li>
    </ul>

	    <a href="../php_scripts/index.php">
	       <img id="homeBanner" alt="Link to homepage" src="../images/banner.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <h1>  Registration - Step 1/3: </h1>
	    <br>
	    <progress value="1" max="3" style="margin-left: 15%;">
	    </progress>

	    <h1 style="margin-left: 22%;"> Choose who you are </h1> 

	    <br>   <br>   <br> 

	    <div class="inline-div">
	        <p align="center"> </p>
	         <!-- <hr class="vr"> -->
	       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	       </p>
	       <div id="getTickets"> 
	         <a href="reg2_3.php"> <button class="button listButton"> Student </button> </a>
	       </div>
	    </div>

	    <div class="inline-div">
	    <p align="center"></p>
	        <p id="programInfo">
	        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	        </p>
	        <div id="getTickets"> 
	          <a href="reg2_3.php"> <button class="button listButton"> Visitor </button> </a>
	        </div>
	    </div>
	    <div class="inline-div">
	        <p align="center"> </p>
	        <p>
	        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
	        </p>
	        <div id="getTickets"> 
	         <a href="reg2_3.php">  <button class="button listButton"> Speaker </button> </a>
	        </div>
	    </div> 

	 <!--    <hr style="width: 20%; float: left;"> -->


	 	<p id="prices"> 30&euro; 140&euro; 20&euro;  </p>

	    <br> <br>   <br>   <br>

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