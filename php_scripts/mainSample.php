<?php 
  session_start(); 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title> Euromed 2016 | Home </title>
    <meta charset="utf-8">
   <!--  <meta name="viewport" content="width=device-width, initial-scale=1"> -->
   <!--  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script> -->
    <link rel="stylesheet" type="text/css" href ="../css_scripts/homeCSS.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato"> 
    <script type="text/javascript" src="../js_scripts/logging.js"></script>       
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


      <li><a href="#contact"> Contact </a></li>
      <li> <a href="#faq"> FAQ </a></li>
    
      <?php
          if ((isset($_SESSION['name']) != '')) 
          {
            echo "<li> <a>  Hello user,  " .  $_SESSION['name'] . "</a> </li>"; 
          }
          error_reporting(-1);
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
      <li><a href="#prev_events"> Previous Events </a></li>
      <li class="tickets"><a href="#tickets"> TICKETS </a></li>
    </ul>

    <div id="myModal" class="modal">
      <span class="close">&times;</span>
      <iframe class="modal-content" id="myFrame"> </iframe>
      <div id="caption"></div>
    </div>
  

    <div style="padding-left: 93%;"> 
      <!-- <button onclick="showMe();" class="button ticketButton"> Login </button> -->
      <button class="loginButton" onclick="showLogin();"> Login </button>
    </div>

    <a href="mainSample.php">
       <img id="homeBanner" alt="Link to homepage" src="http://www.culturavietii.ro/wp-content/uploads/2015/04/TranshumanMichelangelo-1024x567.jpg" border="0">
    </a>




    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <h1> EUROMED 2016 <span class="conDate"> 31 October - 5 November 2016 </span> </h1> 

    <p> Digital Cultural Heritage : Documentation <br>
    Preservation and Protection </p>
    <p> Filoxenia Conference Center | Nicosia, Cyprus </p> <br>

    <!-- <div class="button-row">
    	<div><a title="GET TICKETS"></a></div>
    	<div><a title="another!"></a></div>
  	</div> -->
    <div id="getTickets"> 
      <a href="#tickets"><button class="button ticketButton">GET TICKETS</button></a>
    </div>

    <!-- <a id="like" href="#" >Like</a> -->
    <!-- <a href="" onclick="myAjax()" class="deletebtn">Delete</a> -->
    <!-- <a href='query.php?hello=true'>Run PHP Function</a> -->
    <!-- <a href='query.php'>Run PHP Function</a> -->
    <!-- <form action="" method="GET">
        <input type="text" name="query" />
        <input type="submit" name="submit" value="Search" />
    </form> -->

    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <!--  <iframe width="350" height="150" src="https://w2.countingdownto.com/1633515" frameborder="0"></iframe> -->
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

    <!-- <div id="speakers"> 
    <img style="float: left; margin: 2% 0 15% 25%;" src="http://www.euromed2016.eu/application/files/7314/5432/9155/Wolfgang-Kippes_800.jpg" width="100" height="150" />
    <img style="float: left; margin: 2% 0 15% 5%;" src="http://www.euromed2016.eu/application/files/6814/5432/9354/Fellner_060Rc.png" width="100" height="150"/>
    <img style="float: left; margin: 2% 0 15% 5%;" src="http://www.euromed2016.eu/application/files/1114/5503/1175/Mustafa_Erdik.jpg" width="100" height="150"/>
    <img style="float: left; margin: 2% 0 15% 5%;" src="http://www.euromed2016.eu/application/files/9414/7504/2696/Sarah_Image.jpg" width="100" height="150"/>
    <img style="float: left; margin: 2% 0 15% 5%;" src="http://www.euromed2016.eu/application/files/3514/7504/2458/Axel-Ermert-2016.jpg" width="100" height="150"/>
    </div> -->

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
      <button class="button ticketButton">CHECK OUT ALL THE SPEAKERS</button>
    </div>

    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> THIS YEAR <p> 


    <p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

    <br> <br>

    <div id="manifestoButton"> 
      <button class="button ticketButton"> View our manifesto </button>
    </div>

    <br> <br>

    <div id="previousEventsButton"> 
      <button class="button ticketButton"> View previous events </button>
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
         <button class="button ticketButton"> Program </button>
       </div>
    </div>

    <div class="inline-div">
    <p align="center"> Info for students </p>
        <p id="programInfo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="programButton"> 
          <button class="button ticketButton"> Students </button>
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
          <button class="button ticketButton">GET TICKETS</button>
        </div>
    </div>  





    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> SPEAKERS <p> 

    <div class="inline-div">
        <p align="center">Title 1</p>
         <!-- <hr class="vr"> -->
       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       </p>
       <div id="getTickets"> 
         <button class="button ticketButton">GET TICKETS</button>
       </div>
    </div>

    <div class="inline-div">
    <p align="center">Title 2</p>
        <p id="programInfo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <button class="button ticketButton">GET TICKETS</button>
        </div>
    </div>
    <div class="inline-div">
        <p align="center">Title 3</p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <button class="button ticketButton">GET TICKETS</button>
        </div>
    </div> 


    <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->   

    <br> <br> <br>

    <hr style="width: 85%">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> EXHIBITORS <p> 

    <div class="inline-div">
        <p align="center">Title 1</p>
         <!-- <hr class="vr"> -->
       <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
       </p>
       <div id="getTickets"> 
         <button class="button ticketButton">GET TICKETS</button>
       </div>
    </div>

    <div class="inline-div">
    <p align="center">Title 2</p>
        <p id="programInfo">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <button class="button ticketButton">GET TICKETS</button>
        </div>
    </div>
    <div class="inline-div">
        <p align="center">Title 3</p>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div id="getTickets"> 
          <button class="button ticketButton">GET TICKETS</button>
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

      <br> <br> <br> <br>

      <p id="Accomo"> Suggested Accommodation :  </p>
      <br>
      <div>
        <p id="lorem_ipsum">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <img style="padding-left: 40em;" src="http://www.timeoutcyprus.com/sites/default/files/ajax.jpg" height="200" width="250" alt="accommonadation1">
      </div>

      <div>
        <p id="lorem_ipsum">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <img style="padding-left: 40em;" src="http://www.navarriahotel.com/images/w_66219.jpg" height="200" width="250" alt="accommonadation2">
      </div>
 
	  <!--   <p id="mapInfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->

	    

        

   	</div>

   	<br> <br> <br> 

   	<hr style="width: 85%; width: auto; overflow: hidden;">

    <br> <br> 

    <p id="countText" style="padding-right: 10%;"> SPONSORS <p> 

    <div id="content">
        <a title="Thales." class="tooltip">
            <img src="http://www.euromed2016.eu/application/files/9614/4724/9014/e-space.png"  class="images" />
        </a>
        <a title="Europa Nostra." class="tooltip">
            <img src="http://www.euromed2016.eu/application/files/5814/7385/6117/EuropaNostra_red_1.png" class="images" />
        </a>
        <a title="Vimm." class="tooltip">
            <img src="http://www.euromed2016.eu/application/files/2214/4724/9014/DHRLAB.png"  class="images" />
        </a>
        <a title="Dachverband." class="tooltip">
            <img src="http://www.euromed2016.eu/application/files/2614/7489/3536/cys_logo.png"  class="images" />
        </a>
        <a title="Digitale Rekonstruktion." class="tooltip">
            <img src="http://www.euromed2016.eu/application/files/5314/4724/8341/high_res_cut_logo.png"  class="images" />
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
        <button class="button ticketButton"> FAQ </button>
        <button class="button ticketButton"> Contact </button>
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