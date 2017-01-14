<?php 
  session_start(); 
?>



<!DOCTYPE html>
<html lang="en">
	<head>
	    <title> Euromed 2016 | Full Program </title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href ="../css_scripts/fullProgram.css">
	    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">    
	    <script type="text/javascript" src="../js_scripts/testFrame.js"></script>   
	    <script type="text/javascript" src="../js_scripts/collapseLists.js"></script> 
	    <script type="text/javascript" src="../js_scripts/checkChange.js"></script> 
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

	     <br> <br>   <br> 

	    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

	   <br> <br> <br>

	    <h1> Full Program </h1> 

	    <br> 

	    <p style="padding-left: 7%;"> Select anything you want to view in the program table </p>

	    <br> 

	    <form style="padding-left: 7%;" action="">
		    <input  checked="true" class="fieldTrips" onchange="changeTheCheckbox(1);"  style="margin-left: 3%;" type="checkbox" name="check1"/>
		    <input  checked="true" class="speakers"   onchange="changeTheCheckbox(2);" style="margin-left: 10%;" type="checkbox" name="check2" />
		    <input checked="true" class="workshops"  onchange="changeTheCheckbox(3);" style="margin-left: 10%;" type="checkbox" name="check3" /> 
		    <input checked="true" class="others"     onchange="changeTheCheckbox(4);" style="margin-left: 10%;" type="checkbox" name="check4" /> 
		    <input checked="true" class="social"     onchange="changeTheCheckbox(5);" style="margin-left: 10%;" type="checkbox" name="check5" /> <br>
		    Fieldtrips <span style="padding-left: 4%;"> </span> Keynote Speakers 
		    		   <span style="padding-left: 3%;"> </span> Workshops
		    		   <span style="padding-left: 5%;"> </span> Other Speakers
		    		   <span style="padding-left: 4%;"> </span> Social 
		     
	    </form>



	    <br> 

	    <table width="80%" style="padding-left: 7%;" >
	        <div id="head_nav">
	        <tr>
	            <th>Time</th>
	            <th>Monday</th>
	            <th>Tuesday</th>
	            <th>Wednesday</th>
	            <th>Thrusday</th>
	            <th>Friday</th>
	            <th>Saturday</th>
	        </tr>
	    </div>  

	        <tr>
	            <th>10:00 - 11:00</th>
	            
	                <td class="checkOne"> FieldTrip1 </td>
	                <td class="checkThree"> Workshop1</td>
	                <td class="checkFive"> Social6 </td>
	                <td class="checkTwo">Speaker1</td>
	                <td class="checkFive">Social1</td>
	                <td class="checkFour">OtherSpeaker1</td>
	            </div>
	        </tr>

	        <tr>
	            <th>11:00 - 12:00</td>
	            
	                <td class="checkFive">Social2</td>
	                <td class="checkOne">FieldTrip2</td>
	                <td class="checkFour">OtherSpeaker2</td>
	                <td class="checkOne">FieldTrip3</td>
	                <td class="checkThree">Workshop2</td>
	                <td class="checkTwo">Speaker2</td>
	            </div>
	        </tr>

	        <tr>
	            <th>12:00 - 01:00</td>
	            
	                <td class="checkTwo">Speaker3</td>
	                <td class="checkTwo">Speaker4</td>
	                <td class="checkThree">Workshop3</td>
	                <td class="checkFour">OtherSpeaker3</td>
	                <td class="checkFour">OtherSpeaker4</td>
	                <td class="checkOne">FieldTrip4</td>

	            </div>
	        </tr>

	        <tr>
	            <th>01:00 - 02:00</td>
	            
	                <td class="checkFive">Social3</td>
	                <td class="checkOne">FieldTrip5</td>
	                <td class="checkFour">OtherSpeaker5</td>
	                <td class="checkTwo">Speaker5</td>
	                <td class="checkFive">Social4</td>
	                <td class="checkThree">Workshop4</td>

	            </div>
	        </tr>

	        <tr>
	            <th>02:00 - 03:00</td>
	            
	                <td class="checkThree">Workshop5</td>
	                <td class="checkOne">FieldTrip6</td>
	                <td class="checkFour">OtherSpeaker6</td>
	                <td class="checkThree">Workshop6</td>
	                <td class="checkFive">Social5</td>
	                <td class="checkTwo">Speaker6</td>
	            </div>
	        </tr>
	    </table>

	    <br> <br>

	    <button style="margin-left: 7%;" class="button listButton"> Print your personalised program </button>

	    <br> <br>

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