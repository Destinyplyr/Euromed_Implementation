<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Speaker Provisions </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/provisions.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
		<!-- 	    <script type="text/javascript" src="CollapsibleLists.js"></script>  -->
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

	    <br> <br> <br> <br> <br> <br> <br> 

	    <h1> Speaker Provisions </h1> 

	    <br> 

	    <!-- <hr style="width: 40%;"> -->

	    <br> <br> 
	
		<!-- <div style="float: right;  padding-right: 7%" id="programButton"> 
			<button class="button ticketButton"> View the discounts </button>
		</div>	 -->

		<p style="font-size: 25px;"> Check out a detailed list of what we offer for conference speakers   ---> 
			<button class="button ticketButton"> View the list </button>
		</p>

	    <p id="firstpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. </p>

	    <!-- <p id="extraInfo"> EXTRA INFO <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->
	    <p>
	    	<div class="img">
	    	  <a target="_blank" href="https://images.trvl-media.com/hotels/2000000/1460000/1457300/1457242/1457242_39_z.jpg">
	    	    <img src="../images/taxi.jpg" width="300" height="200">
	    	  </a>
	    	  <div class="desc">FREE taxi rides - Thanks to taxibeat!</div>
	    	</div>

	    	<div class="img">
	    	  <a target="_blank" href="https://images.trvl-media.com/hotels/2000000/1460000/1457300/1457242/1457242_39_z.jpg">
	    	    <img src="../images/dinner.jpg" width="300" height="200">
	    	  </a>
	    	  <div class="desc">Exclusive Speaker-only dinner</div>
	    	</div>

		    <div class="img">
		      <a target="_blank" href="http://www.timeoutcyprus.com/sites/default/files/ajax.jpg">
		        <img src="../images/conference.jpg" alt="timeoutcyprus" width="300" height="200">
		      </a>
		      <div class="desc">The world's most prestigious conference</div>
		    </div>

		    <div class="img">
		      <a target="_blank" href="http://www.navarriahotel.com/images/w_66219.jpg">
		        <img src="../images/snacks.jpg" alt="navarriahotel" width="300" height="200">
		      </a>
		      <div class="desc">FREE healthy snacks throughout the conference</div>
		    </div>

		    <div class="img">
		      <a target="_blank" href="https://images.trvl-media.com/hotels/2000000/1460000/1457300/1457242/1457242_39_z.jpg">
		        <img src="../images/networking.jpg" width="300" height="200">
		      </a>
		      <div class="desc">Endless netwroking possiblities</div>
		    </div>

		    <div class="img">
		      <a target="_blank" href="https://images.trvl-media.com/hotels/2000000/1460000/1457300/1457242/1457242_39_z.jpg">
		        <img src="../images/best_guy.jpg" width="300" height="200">
		      </a>
		      <div class="desc">The world's MOST PRESTIGIOUS EVENT!</div>
		    </div>

		</p>


	    <br> <br> 

	    <hr style="width: 85%">

	    <br> 




	    <br> 

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br>

	    <div style="padding-left: 25%;" id="programButton"> 
	      <button class="button ticketButton"> View the list </button>
	     <a href="fullProgram.php"> <button class="button ticketButton"> Full Program </button> </a>
	     <a href="reg1_3.php">  <button class="button ticketButton"> GET TICKETS </button> </a>
	    </div>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br>

	    <hr style="width: 85%">

	    <br> <br> 



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