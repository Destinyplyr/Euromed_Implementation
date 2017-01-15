<?php 
  session_start(); 
  
?>



<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Previous Events </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/previous_events.css">
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

	     <?php 
		      if(isset($_SESSION['name']))
		      {
		        echo "<span style = 'margin-left:5%;'> 
		          <a style = 'color:darkorange; padding:5px; font-size: 20px; border:1px solid;' href=". "profileManagement.php" . ">  Hello user,  " .  $_SESSION['name'] . "</a> "; 
		      }
  		  ?> 

	    <a href="../php_scripts/index.php">
	       <img id="homeBanner" alt="Link to homepage" src="../images/banner.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br> 

	    <h1> Previous Events </h1> 

	    <br> 

	 <!--    <hr style="width: 20%; float: left;"> -->

	    <br> <br>

	    <ul id="EventsList" style="padding-left: 5.5%;">
	    	<li style="text-align: center;">
	    		Euromed2015
	    		<div> 
	    		<!-- <div style="border-right: 5px solid darkgrey;"> -->
	    		<br> 
	    		  <button class="button listButton"> Photos </button>
	    		  <button class="button listButton"> Speakers </button>
	    		  <br><button class="button listButton"> Proceedings </button>
	    		</div>
	    	</li>
	    	<li style="text-align: center; padding-left: 25%;"> 
	    		Euromed2014
	    		<div> 
	    		<br>
	    		  <button class="button listButton"> Photos </button>
	    		  <button class="button listButton"> Speakers </button>
	    		  <br><button class="button listButton"> Proceedings </button>
	    		</div>
	    	</li>
	    </ul>
	    	
	    <br> 

	    <hr style="width: 85%"> 

	    <ul id="EventsList" style="padding-left: 5.5%;">
	    	<li style="text-align: center;">
	    		Euromed2013
	    		<div> 
	    		<!-- <div style="border-right: 5px solid darkgrey;">  -->
	    		<br> 
	    		  <button class="button listButton"> Photos </button>
	    		  <button class="button listButton"> Speakers </button>
	    		  <br><button class="button listButton"> Proceedings </button>
	    		</div>
	    	</li>
	    	<li style="text-align: center; padding-left: 25%;"> 
	    		Euromed2012
	    		<div> 
	    		<br>
	    		  <button class="button listButton"> Photos </button>
	    		  <button class="button listButton"> Speakers </button>
	    		  <br><button class="button listButton"> Proceedings </button>
	    		</div>
	    	</li>
	    </ul>



	    <br> <br> <br>


	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <div id="olderProcs"> 
	      <button class="button ticketButton"> Older Proceedings </button>
	    </div>	

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