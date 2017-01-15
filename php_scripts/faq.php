<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | FAQ </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/faq.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
	    <script type="text/javascript" src="../js_scripts/collapseLists.js"></script> 
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

	    <a href="../php_scripts/index.php">
	       <img id="homeBanner" alt="Link to homepage" src="http://www.culturavietii.ro/wp-content/uploads/2015/04/TranshumanMichelangelo-1024x567.jpg" border="0">
	    </a>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br> <br> <br> <br> <br> 

	    <h1> FAQ </h1> 

	    <br> 

	    <!-- <hr style="width: 40%;"> -->

	    <br> <br> <br> <br> <br> 


	    <p> Category_1 </p>

	    <br>

	  <!--   <div id="programButton"> 
	      <button class="button ticketButton"> View the questions and answers for this category
	      	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">  
	      </button>
	    </div> -->
	   <div id="legends">
	    	<button onclick="showHide(1);" class="collapseButton"> View the questions and answers for this category  
	    		
	    	</button>
	    	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
	       	<fieldset id="legendary1" class="majorpoints" style="display: none">
	      
	       <div id="mylist1" style="display:none" >
	           <ul id="qaList">
	               <li id="qa"> How? </li>
	               <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	               <li id="qa"> When? </li>  
	               <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	               <li id="qa"> Where? </li>  
	               <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	           </ul>
	       </div>
	       </fieldset>
	   </div>



	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br>

	    <hr style="width: 85%">

	    <br> <br> 


	    <p> Category_2 </p>

	    <br>

	    <!-- <div id="programButton"> 
	      <button class="button ticketButton"> View the questions and answers for this category
	      	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
	      </button>
	    </div> -->

	    <div id="legends">
	     	<button onclick="showHide(2);" class="collapseButton"> View the questions and answers for this category  
	     		
	     	</button>
	     	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
	        	<fieldset id="legendary2" class="majorpoints" style="display: none">
	       
	        <div id="mylist2" style="display:none" >
	            <ul id="qaList">
	                <li id="qa"> How? </li>
	                <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	                <li id="qa"> When? </li>  
	                <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	                <li id="qa"> Where? </li>  
	                <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	            </ul>
	        </div>
	        </fieldset>
	    </div>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br>

	    <hr style="width: 85%">

	    <br> <br> 


	    <p> Category_3 </p>

	    <br>

	    <!-- <div id="programButton"> 
	      <button class="button ticketButton"> View the questions and answers for this category 
	      	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
	      </button>
	    </div> -->
	    <div id="legends">
	     	<button onclick="showHide(3);" class="collapseButton"> View the questions and answers for this category  
	     		
	     	</button>
	     	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
	        	<fieldset id="legendary3" class="majorpoints" style="display: none">
	       
	        <div id="mylist3" style="display:none" >
	            <ul id="qaList">
	                <li id="qa"> How? </li>
	                <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	                <li id="qa"> When? </li>  
	                <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	                <li id="qa"> Where? </li>  
	                <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </li>
	            </ul>
	        </div>
	        </fieldset>
	    </div>

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br> <br> <br> <br> <br> <br>

	    <div id="programButton"> 
	      <a href="fullProgram.php"> <button class="button ticketButton"> View the full program </button> </a> 
	      <a href="reg1_3.php"> <button id="getTickets" class="button ticketButton"> GET TICKETS </button> </a>
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