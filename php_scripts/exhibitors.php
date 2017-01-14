<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Exhibitors </title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/exhibitors.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
		<!-- 	    <script type="text/javascript" src="CollapsibleLists.js"></script>  -->
	    <!-- <link rel="stylesheet" type="text/css" href ="../css_scripts/tdButton.css"> -->
	</head>

	<body>
		<ul class="MenuClass">
	      <div style="float: left;" id="media">
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

	    <h1> Exhibitors </h1> 
	
		<!-- <div style="float: right;  padding-right: 7%" id="programButton"> 
			<button class="button ticketButton"> View the discounts </button>
		</div>	 -->
		<br> <br>

	   <!--  <p id="firstpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> -->

	    <!-- <p id="extraInfo"> EXTRA INFO <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->
	    <p> <img style="padding-left: 3%; float: left;" width="320" height="200" src="http://www.southampton.ac.uk/assets/imported/transforms/content-block/BoxGridWithImages_ImageBlock/DC4F72A8F076487CB557629E49CF774D/_3JB2926.jpg_SIA_JPG_fit_to_width_MEDIUM.jpg"></p>
	    

	    <p id="secondpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>	
	    </div>
<!-- 

	    <p id="thirdpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p> -->

	<!--     <img width="300" height="200" src="https://aos.iacpublishinglabs.com/question/aq/700px-394px/many-college-students-change-major_e73c1e71ac0c0ed3.jpg?domain=cx.aos.ask.com"> -->

	    <br> <br> 

	    <hr style="width: 85%">

	    <br> 

	    <h2 style="text-align:center; color:darkorange;">Choose the price that suits you! </h2> <br>

	    <div class="columns">
	      <ul id="PriceList" class="price">
	        <li class="header">Low Budget Package</li>
	        <li class="grey"> 700 &euro; / day</li>
	        <li>2 Days </li>
	        <li>5 Square Meters </li>
	        <li>100 meters far from center</li>
	        <li>2 minutes presentation at conference  </li>
	        <li class="grey"><a href="#" class="button">Sign Up</a></li>
	      </ul>
	    </div>

	    <div class="columns">
	      <ul id="PriceList" class="price">
	        <li class="header"> Standard Package </li>
	        <li class="grey"> 1000 &euro; / day</li>
	        <li>4 Days </li>
	        <li>10 Square Meters </li>
	        <li>50 meters far from center</li>
	        <li>5 minutes presentation at conference </li>
	        <li class="grey"><a href="#" class="button">Sign Up</a></li>
	      </ul>
	    </div>

	    <div class="columns">
	      <ul id="PriceList" class="price">
	        <li class="header">Premium Package</li>
	       	<li class="grey"> 2000 &euro; / day</li>
	        <li> Every day </li>
	        <li> 30 Square Meters </li>
	        <li> At the center </li>
	        <li>10 minutes presentation at conference </li>
	        <li class="grey"><a href="#" class="button">Sign Up</a></li>
	      </ul>
	    </div>
	    


	    

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