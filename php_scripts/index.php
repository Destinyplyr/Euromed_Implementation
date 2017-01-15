<?php 
  session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Euromed 2016 | Home </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href ="../css_scripts/homeCSS.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
    <script type="text/javascript" src="../js_scripts/testFrame.js"></script> 
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

    <div id="myModal" class="modal">
      <span class="close">&times;</span>
      <iframe class="modal-content" id="myFrame"> </iframe>
      <div id="caption"></div>
    </div>
  
    <?php 
      if(isset($_SESSION['name']))
      {
        echo "<span style = 'margin-left:5%;'> 
          <a style = 'color:darkorange; padding:5px; font-size: 20px; border:1px solid;' href=". "profileManagement.php" . ">  Hello user,  " .  $_SESSION['name'] . "</a> 
        
        </span>
        <span style ='position:absolute; left: 1100px;' >
        
        <button class='loginButton' onclick='showLogout();'> Logout </button>
        </span>
      "; 
      }
    ?> 

    <?php  
      if(!isset($_SESSION['name']))
      {
        echo "<span style = 'margin-left:90%;' > <button class='loginButton' onclick='showLogin();'> Login </button> </span>";
      }
    ?>
    

    <a href="index.php">
       <img id="homeBanner" alt="Link to homepage" src="../images/banner.jpg" border="0">
    </a>


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <h1> EUROMED 2016 <span class="conDate"> 31 October - 5 November 2016 </span> </h1> 

    <p> Digital Cultural Heritage : Documentation <br>
    Preservation and Protection </p>
    <p> Filoxenia Conference Center | Nicosia, Cyprus </p> <br>

    <div id="getTickets"> 
      <a href="reg1_3.php"><button class="button ticketButton">GET TICKETS</button></a>
    </div>


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText"> CONFERENCE COUNTDOWN  <p> <br>
    <div id="clockdiv">
      <div>
        <span class="days"></span>
        <div class="smalltext">Days</div>
      </div>
      <div>
        <span class="hours"></span>
        <div class="smalltext">Hours</div>
      </div>
      <div>
        <span class="minutes"></span>
        <div class="smalltext">Minutes</div>
      </div>
      <div>
        <span class="seconds"></span>
        <div class="smalltext">Seconds</div>
      </div>
    </div>

    <script type="text/javascript" src = "../js_scripts/sampleTimer.js" ></script>


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 5%;"> KEYNOTE SPEAKERS  <p> 


    <div id="content">
        <a title="Wolfgang Kippes." class="tooltip">
            <img src="../images/Wolfgang_Kippes.jpg"  class="images" />
        </a>
        <a title="Fellner." class="tooltip">
            <img src="../images/Fellner.png" class="images" />
        </a>
        <a title="Mustafa Erdik." class="tooltip">
            <img src="../images/Mustafa_Erdik.jpg"  class="images" />
        </a>
        <a title="Sarah Image." class="tooltip">
            <img src="../images/Sarah.jpg"  class="images" />
        </a>
        <a title="Axel Ermert." class="tooltip">
            <img src="../images/Axel_Ermert.jpg"  class="images" />
        </a>
    </div>

    <br> <br>

    <div id="restSpeakersButton"> 
      <a href="speakers.php"> <button class="button ticketButton">CHECK OUT ALL THE SPEAKERS</button> </a>
    </div>

    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> THIS YEAR <p> 


    <p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

    <br> <br>

    <div id="manifestoButton"> 
      <a href="manifesto.php"> <button class="button ticketButton"> View our manifesto </button> </a>
    </div>

    <br> <br>

    <div id="previousEventsButton"> 
      <a href="previous_events.php"> <button class="button ticketButton"> View previous events </button> </a>
    </div>

    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> VISITORS <p> 


    <div class="inline-div">
        <p align="center"> Program Info </p>
         <!-- <hr class="vr"> -->
       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       </p>
       <div id="programButton"> 
          <a href="program.php"> <button class="button ticketButton"> Program </button> </a>
       </div>
    </div>

    <div class="inline-div">
    <p align="center"> Info for students </p>
        <p id="programInfo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="programButton"> 
          <a href="students.php"> <button class="button ticketButton"> Students </button> </a>
        </div>
    </div>

    <div class="inline-div">
        <p align="center"> TICKETS </p>
        <p>
        DEADLINE 1
        DEADLINE 2
        DEADLINE 3
        DEADLINE 1
        DEADLINE 2
        DEADLINE 3
        DEADLINE 1
        DEADLINE 2
        </p>
        <div id="programButton"> 
          <a href="reg1_3.php"> <button class="button ticketButton">GET TICKETS</button> </a>
        </div>
    </div>  

    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> SPEAKERS <p> 

    <div class="inline-div">
        <p align="center">Program Info</p>
       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       </p>
       <div id="getTickets"> 
         <a href="program.php"> <button class="button ticketButton">Program </button> </a>
       </div>
    </div>

    <div class="inline-div">
    <p align="center">Provisions Info</p>
        <p id="programInfo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <a href="provisions.php"> <button class="button ticketButton">Provisions</button> </a>
        </div>
    </div>
    <div class="inline-div">
        <p align="center">Paper submissions</p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <a href="submitPaper.php"> <button class="button ticketButton">Submit your paper</button> </a>
        </div>
    </div> 


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->   

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> EXHIBITORS <p> 

    <div class="inline-div">
        <p align="center">Program Info</p>
         <!-- <hr class="vr"> -->
       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       </p>
       <div id="getTickets"> 
         <a href="program.php"> <button class="button ticketButton">Program</button> </a>
       </div>
    </div>

    <div class="inline-div">
    <p align="center">Practical Info</p>
        <p id="programInfo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <a href="exhibitors.php"> <button class="button ticketButton">Venue and Provisions</button> </a>
        </div>
    </div>
    <div class="inline-div">
        <p align="center">Submissions</p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <a href="exhibitors.php"> <button class="button ticketButton">Submit your request</button> </a>
        </div>
    </div> 

    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> VENUE <p> 


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    
    <div id = "clearfix">
	    <!-- <div class="map-div"> -->
	    <div id="map"></div>
	    <!-- </div> -->
        <script type="text/javascript" src = "../js_scripts/mapShow.js" ></script>
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClU3fGihtFNeHlr1Vj96OR0OcGXIkdlnE&callback=initMap">
        </script>
	    <p id="mapInfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      <br>

      <p id="Accomo"> Suggested Accommodation : 
      <div class="img">
        <a target="_blank" href="http://www.timeoutcyprus.com/sites/default/files/ajax.jpg">
          <img src="../images/hotel_1.jpg" alt="timeoutcyprus" width="300" height="200">
        </a>
        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
      </div>

      <div class="img">
        <a target="_blank" href="http://www.navarriahotel.com/images/w_66219.jpg">
          <img src="../images/hotel_2.jpg" alt="navarriahotel" width="300" height="200">
        </a>
        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
      </div>

      <div class="img">
        <a target="_blank" href="https://images.trvl-media.com/hotels/2000000/1460000/1457300/1457242/1457242_39_z.jpg">
          <img src="../images/hotel_3.jpg" alt="navarriahotel" width="300" height="200">
        </a>
        <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
      </div>
       </p>

   	</div>

   	<br> <br> <br> 

   	<hr style="width: 85%; overflow: hidden;">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> SPONSORS <p> 

    <div id="content">
        <a title="Thales." class="tooltip">
            <img src="../images/sponsor_1.png"  class="images" />
        </a>
        <a title="Europa Nostra." class="tooltip">
            <img src="../images/sponsor_2.png" class="images" />
        </a>
        <a title="Vimm." class="tooltip">
            <img src="../images/sponsor_3.png"  class="images" />
        </a>
        <a title="Dachverband." class="tooltip">
            <img src="../images/sponsor_4.png"  class="images" />
        </a>
        <a title="Digitale Rekonstruktion." class="tooltip">
            <img src="../images/sponsor_6.png"  class="images" />
        </a>
    </div>

    <br> <br> 


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> NEED ANY HELP? <p> 

    <br> 
    
    <div style="padding-left: 36%;" id="programButton"> 
        <a href="faq.php"> <button class="button ticketButton"> FAQ </button> </a>
        <a href="contact.php"> <button class="button ticketButton"> Contact </button> </a>
    </div>
    


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <div style="padding-left: 42%; padding-bottom: 10px;"  id="media">
      <a href="http://www.w3schools.com">
      <img  alt="facebook" src="../images/_facebookIcon.png" width="50" height="55">
      </a>

      <a href="http://www.hello.com">
      <img  alt="twitter" src="../images/_twitterIcon.png" width="50" height="55"> </a>

      <a href="http://www.w3schools.com">
      <img  alt="instagram" src="../images/_instagramIcon.png" width="50" height="55">
      </a>
    </div>

  </body>
</html>