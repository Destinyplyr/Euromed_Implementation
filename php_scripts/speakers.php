<?php 
  session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Speakers </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/speakers.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">    
	    <script type="text/javascript" src="../js_scripts/testFrame.js"></script>   
	    <script type="text/javascript" src="../js_scripts/collapseLists.js"></script> 
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

	     <br> <br>   <br> 

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	   <br> <br> <br>

	    <h1> Speakers </h1> 


	    <div style="padding-left: 5%;">
	    	<button onclick="goToAnchor('conf')" class="button listButton"> Conference </button>
	    	<button onclick="goToAnchor('work')" class="button listButton"> Workshop </button>
	    </div>

	    <br> <br> 

	    <ul id="EventsList" style="padding-left:7%;">
	    	<li> <span style="font-size: 25px; color: darkorange;"> Conference </span>
	    		<a name="conf"></a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sed do sed do sed do sed do sed do sed do 
	    		<br> <span style="padding-left: 15.8%;"> sed sed do sed do sed do sed do sed do sed do sed do sed  do sed  do sed  do sed   
	    		do sed do sed do sed sed </span>
	    	</li>
	    </ul>

	   	<p style="padding-left: 7%; font-size: 25px;"> Keynote Speakers </p>
		    	

	 	<table>
	 	  <col width="100">
	 	  <col width="500">
		  <tr>
		    <td> <img style="padding-left: 45%;" src="../images/Axel_Ermert.jpg" width="150" height="200"> </td>
		    <td> <p style="padding-left: 10%;" id="lorem_ipsum"> <span style="color:darkorange;"> Ermert </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet <br> <span style="color:darkorange;"> Innovation
		    and Technology @12:30 p.m. </span>  </p> </td>
		    
		    <td> <img style="padding-right: 5%;" src="../images/Fassina.png" width="150" height="200"> </td>
		    <td> <p style="padding-left: 3%;" id="lorem_ipsum2"> <span style="color:darkorange;"> Fassina </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet <br> <span style="color:darkorange;"> Human cloning @17:40 p.m. </span>  </p> </td>
		  </tr>
		</table>

		<button style="margin-left: 45%;" onclick="showThem(1)" class="button listButton"> Load More </button>

		<div id="hid" style="display: none;"> 
		 	<table>
		 	  <col width="100">
		 	  <col width="500">
			  <tr>
			    <td> <img style="padding-left: 60%;" src="../images/Wolfgang_Kippes.jpg" width="150" height="200"> </td>
			    <td> <p style="padding-left: 25%;" id="lorem_ipsum"> <span style="color:darkorange;"> Wolfgang </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum <br> <span style="color:darkorange;"> Serious Games @14:00 p.m. </span>  </p> </td>
			    
			    <td> <img style="padding-right: 5%;" src="../images/Mustafa_Erdik.jpg" width="150" height="200"> </td>
			    <td> <p style="padding-left: 3%;" id="lorem_ipsum2"> <span style="color:darkorange;"> Mustafa </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet <br> <span style="color:darkorange;"> Cultural Technologies @19:50 p.m. </span>  </p> </td>
			  </tr>
			</table>
		</div>


	    <hr style="width: 90%;">

		<p style="padding-left: 7%; font-size: 25px;"> Other Speakers </p>

	    <table>
	 	  <col width="100">
	 	  <col width="500">
		  <tr>
		    <td> <img style="padding-left: 45%;" src="../images/Fellner.png" width="150" height="200"> </td>
		    <td> <p style="padding-left: 10%;" id="lorem_ipsum"> <span style="color:darkorange;"> Fellner </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing <br> <span style="color:darkorange;"> Innovation
		    and Technology @12:30 p.m. </span>  </p> </td>
		    
		    <td> <img style="padding-left: 0%;" src="../images/Sarah.jpg" width="150" height="200"> </td>
		    <td> <p style="padding-left: 8%;" id="lorem_ipsum2"> <span style="color:darkorange;"> Sarah </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing  <br> <span style="color:darkorange;"> Human cloning @17:40 p.m. </span>  </p> </td>
		  </tr>
		</table> <br>

		<button style="margin-left: 45%;" onclick="showThem(2)" class="button listButton"> Load More </button> <br> <br>

		<div id="otherhid" style="display: none;"> 
		 	<table>
		 	  <col width="100">
		 	  <col width="500">
			  <tr>
			    <td> <img style="padding-left: 60%;" src="../images/Moropoulou.jpg" width="150" height="200"> </td>
			    <td> <p style="padding-left: 25%;" id="lorem_ipsum"> <span style="color:darkorange;"> Moropoulou </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing adipiscing elit <br> <span style="color:darkorange;"> Serious Games @14:00 p.m. </span>  </p> </td>
			    
			    <td> <img style="padding-left: 40%;" src="../images/Stephan.png" width="150" height="200"> </td>
			    <td> <p style="padding-left: 15%;" id="lorem_ipsum2"> <span style="color:darkorange;"> Stephan </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit <br> <span style="color:darkorange;"> Cultural Technologies @19:50 p.m. </span>  </p> </td>
			  </tr>
			</table>
		</div>

	    <hr style="width: 85%">


	    <ul id="EventsList" style="padding-left:7%;">
	    	<li> <span style="font-size: 25px; color: darkorange;"> Workshops </span>
	    		<a name="work"></a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sed do sed do sed do sed do sed do sed do 
	    		<br> <span style="padding-left: 15.8%;"> sed sed do sed do sed do sed do sed do sed do sed do sed  do sed  do sed  do sed   
	    		do sed do sed do sed sed </span>
	    	</li>
	    </ul>


	    <table>
	 	  <col width="100">
	 	  <col width="500">
		  <tr>
		    <td> <img style="padding-left: 45%;" src="http://pm1.narvii.com/5866/45cc61eb9e3eaefdc26be045e9f9fbfdf916f45b_hq.jpg" width="150" height="200"> </td>
		    <td> <p style="padding-left: 10%;" id="lorem_ipsum"> <span style="color:darkorange;"> Mark </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem  <br> <span style="color:darkorange;"> @12:30 p.m. </span>  </p> </td>
		    
		    <td> <img style="padding-left: 0%;" 
		    src="https://design.ncsu.edu/sites/default/files/styles/large/public/12.05.15%20Let's%20Ride%202.JPG?itok=TqrNYrL5" width="200" height="200"> </td>
		    <td> <p style="padding-left: 8%;" id="lorem_ipsum2"> <span style="color:darkorange;"> Penelope </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing  <br> <span style="color:darkorange;"> @17:40 p.m. </span>  </p> </td>
		  </tr>
		</table>

		<button style="margin-left: 45%;" onclick="showThem(3)" class="button listButton"> Load More </button>

		<div id="workhid" style="display: none;"> 
		 	<table>
		 	  <col width="100">
		 	  <col width="500">
			  <tr>
			    <td> <img style="padding-left: 60%;" src="http://www.lukihuber.com/wp-content/uploads/manual-thinking-workshop-1-1024x512.jpg" width="150" height="200"> </td>
			    <td> <p style="padding-left: 25%;" id="lorem_ipsum"> <span style="color:darkorange;"> W1 </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit <br> <span style="color:darkorange;">  @14:00 p.m. </span>  </p> </td>
			    
			    <td> <img style="padding-left: 0%;" src="https://www1.chemmedia.de/tl_files/inhalte/kw_days_2013/bilder_aktuelle_meldungen/Serious%20Gaming%20with%20Saba%20People%20Cloud%20(Workshop).jpg" width="150" height="200"> </td>
			    <td> <p style="padding-left: 8%;" id="lorem_ipsum2"> <span style="color:darkorange;"> W2 </span> <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing <br> <span style="color:darkorange;">  @19:50 p.m. </span>  </p> </td>
			  </tr>
			</table>
		</div>

		<br> <br>

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