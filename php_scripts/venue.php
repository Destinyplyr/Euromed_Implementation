<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Venue </title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/venue.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
		<!-- 	    <script type="text/javascript" src="CollapsibleLists.js"></script>  -->
	    <!-- <link rel="stylesheet" type="text/css" href ="../css_scripts/tdButton.css"> -->
	</head>

	<body>
		<ul class="MenuClass">
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
	       <img id="homeBanner" alt="Link to homepage" src="http://www.culturavietii.ro/wp-content/uploads/2015/04/TranshumanMichelangelo-1024x567.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br>

	    <h1> Access to Venue </h1> 
	
		<!-- <div style="float: right;  padding-right: 7%" id="programButton"> 
			<button class="button ticketButton"> View the discounts </button>
		</div>	 -->
		<br> <br>
	    
        <div id = "clearfix">
    	    <!-- <div class="map-div"> -->
    	    <div id="map"></div>
    	    <!-- </div> -->
            <script type="text/javascript" src = "../js_scripts/mapShow.js" ></script>
            <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClU3fGihtFNeHlr1Vj96OR0OcGXIkdlnE&callback=initMap">
            </script>
    	    <p id="mapInfo"> <span style="color:darkorange; font-size: 25px;"> From the airport </span> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <span style="color:darkorange; font-size: 25px;"> From the Cyprus center </span> consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br> <span style="color:darkorange; font-size: 25px;"> From near hotels </span>  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>    	    

	    <br> 
	    <hr style="width: 85%">

	    <br> <br> <br> 

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