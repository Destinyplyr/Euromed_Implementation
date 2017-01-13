<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Submit your paper </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/submitPaper.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
	    <script type="text/javascript" src="../js_scripts/collapseLists.js"></script> 
		<!-- 	    <script type="text/javascript" src="CollapsibleLists.js"></script>  -->
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

	    <a href="../php_scripts/mainSample.php">
	       <img id="homeBanner" alt="Link to homepage" src="http://www.culturavietii.ro/wp-content/uploads/2015/04/TranshumanMichelangelo-1024x567.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br> <br> <br>

	    <h1> Submit your paper </h1> 


	    <div style="padding-left: 5%;">
	    	<button class="button listButton"> Conference </button>
	    	<button class="button listButton"> Workshop </button>
	    </div>

	    <br> <br>

		    <ul id="EventsList" style="padding-left:7%;">
		    	<li>
		    		Conference
		    		<div> 
		    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
		    		 sed do sed do <br> sed do sed do sed do sed do sed sed do sed do sed do sed do sed do
		    		sed do sed </p>
	
		    		</div>
		    	</li>
		    	<li style="padding-right: 20%;"> 
		    		<div> 
		    		<p id="guidelines"> Paper guidelines and deadlines here </p>
		    			<form method="post" action="submitPaper.php" enctype="multipart/form-data">
	    					<label>Name :</label> <label style="padding-left: 12%;"> E-mail :</label> <label style="padding-left: 11%;"> Institution : </label> <br> 
	    					<input size="6" type="text" name="name" placeholder="name" />
	    					<input size="6" style="margin-left: 5%;" type="text" name="email" placeholder="email" />
	    					<input size="8" style="margin-left: 5%;" type="password" name="institution" placeholder="institution" /> <br> <br> 
	    					<label> Select a file : </label> <br>  <br> 
	    					<input class="paperSubmit" type="submit" value="Submit your paper" name="submitPaper"/><br />
		    			</form>
		    		</div>
		    	</li>
		    </ul>
		    	
		    <br> 

		    <hr style="width: 85%"> 

		    


		    <br> <br> <br>	 

	    <!-- <hr style="width: 40%;"> -->

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