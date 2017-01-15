<?php 
  session_start(); 
  
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Program </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/program.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
	   	<script type="text/javascript" src="../js_scripts/testFrame.js"></script>    
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

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	    <br> <br> <br> <br> <br> <br> <br> 

	    <!-- <h1> Program </h1>  -->
	    <div style="padding-left: 5.5%;">
	    	<button class="button listButton"> Full Program </button>
	    	<br> <br>
	    	<button style="font-size: 25px;" class="button listButton"> Print it! </button>
	    </div>
	    

	    <br> <br> <br> 	

	    <hr style="width: 85%;">

	   <!--  <iframe id="myFrame" style="display: none;" src="http://www.w3schools.com"></iframe> -->

	    <div id="myModal" class="modal">
	      <span class="close">&times;</span>
	      <iframe class="modal-content" id="myFrame"> </iframe>
	      <div id="caption"></div>
	    </div>

	    <ul id="EventsList" style="padding-left:7%;">
	    	<li>
	    		Speakings
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
		    		<div id="legends">
		    		 	<button onclick="showFrame();" class="collapseButton"> View all speakings 
		    		 		
		    		 	</button>
		    		 	<img style="padding : 0px 0px 0px 10px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
		    		    <!-- 	<fieldset id="legendary1" class="majorpoints" style="display: none">
		    		   
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
		    		    </fieldset> -->
		    		</div>
	    		</div>
	    	</li>
	    	<li style="padding-left: 0%;"> 
	    		Workshops
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
		    		<div id="legends">
		    		 	<button onclick="showFrame();" class="collapseButton"> View all workshops 
		    		 		
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
	    		</div>
	    	</li>
	    </ul>
	    	
	    <br> 

	    <hr style="width: 85%"> 

	     <ul id="EventsList" style="padding-left:7%;">
	    	<li>
	    		Networking
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
		    		<div id="legends">
		    		 	<button onclick="showFrame();" class="collapseButton"> View the events  
		    		 		
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
	    		</div>
	    	</li>
	    	<li style="padding-left: 0%;"> 
	    		Exhibition Events
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
		    		<div id="legends">
		    		 	<button onclick="showFrame();" class="collapseButton"> View the events  
		    		 		
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
	    		</div>
	    	</li>
	    </ul>



	    <br> <br> <br>


	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!-- 
		<p> Excursions <p>
		<div>
		<br> 
		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
	    <button class="button ticketButton"> View excursion
	    	<img style="padding : 0px 0px 0px 0px;" alt="plus_image" src="../images/plus_icon.png" width="15" height="15">
	    </button>
		</div>
 -->


 		<ul id="EventsList" style="padding-left:31%;">
	    	<li>
	    		<div >Excursions
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </p>
		    		<div id="legends">
		    		 	<button onclick="showFrame();" class="collapseButton"> View excursions  
		    		 		
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
	    		</div>
	    	</li>
	 	</ul>

	    <br> <br> <br>

	    <hr style="width: 85%">

	    <br> <br> 

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