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
		    <td> <img style="padding-left: 45%;" src="../images/NERDOULAS.jpg" width="150" height="200"> </td>
		    <td> <p style="padding-left: 10%;" id="lorem_ipsum"> <span style="color:darkorange;"> Mark </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem  <br> <span style="color:darkorange;"> @12:30 p.m. </span>  </p> </td>
		    
		    <td> <img style="padding-left: 0%;" 
		    src="../images/thinking_lady.JPG" width="200" height="200"> </td>
		    <td> <p style="padding-left: 8%;" id="lorem_ipsum2"> <span style="color:darkorange;"> Penelope </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing  <br> <span style="color:darkorange;"> @17:40 p.m. </span>  </p> </td>
		  </tr>
		</table>

		<button style="margin-left: 45%;" onclick="showThem(3)" class="button listButton"> Load More </button>

		<div id="workhid" style="display: none;"> 
		 	<table>
		 	  <col width="100">
		 	  <col width="500">
			  <tr>
			    <td> <img style="padding-left: 60%;" src="../images/workshop_1.jpg" width="150" height="200"> </td>
			    <td> <p style="padding-left: 25%;" id="lorem_ipsum"> <span style="color:darkorange;"> W1 </span> <br>  Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit <br> <span style="color:darkorange;">  @14:00 p.m. </span>  </p> </td>
			    
			    <td> <img style="padding-left: 0%;" src="../images/workshop_2.jpg" width="150" height="200"> </td>
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