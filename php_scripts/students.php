<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Students </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/students.css">
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

	    <h1> Students </h1> 

	    <br> 

	    <!-- <hr style="width: 40%;"> -->

	    <br> <br> 
	
		<!-- <div style="float: right;  padding-right: 7%" id="programButton"> 
			<button class="button ticketButton"> View the discounts </button>
		</div>	 -->

		<p style="font-size: 25px;"> Check out the discounts we offer for participating students   ---> 
			<button class="button ticketButton"> View the discounts </button>
		</p>

	    <p id="firstpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

	    <!-- <p id="extraInfo"> EXTRA INFO <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> -->

	    <img style="padding-left: 7%;" width="200" height="200" src="../images/students_1.jpg">

	    <p id="secondpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>	
	    </div>


	    <p id="thirdpar"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

	    <img width="400" height="300" src="../images/students_2.jpg">

	    <br> <br> 

	    <hr style="width: 85%">

	    <br> 

	    <!-- <p style="padding-left: 17%; font-size: 35px;"> Check out the discounts we offer for participating students! </p> -->

	   	<!-- <div style="padding-left: 41%;" id="programButton"> 
	   		<button class="button ticketButton"> View the discounts </button>
	   	</div> -->
	    


	    <br> 

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br>

	    <div style="padding-left: 25%;" id="programButton"> 
	      <button class="button ticketButton"> View the discounts </button>
	      <a href="fullProgram.php"> <button class="button ticketButton"> Full Program </button> </a>
	      <a href="reg1_3.php"> <button class="button ticketButton"> GET TICKETS </button> </a>
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