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
	    <script type="text/javascript" src="../js_scripts/testFrame.js"></script>   
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

	    <br> <br> <br> <br> <br>

	    <h1> Submit your paper </h1> 


	    <div style="padding-left: 5%;">
	    	<button onclick="goToAnchor('conf')" class="button listButton"> Conference </button>
	    	<button onclick="goToAnchor('work')" class="button listButton"> Workshop </button>
	    </div>

	    <br> <br>

	    <ul id="EventsList" style="padding-left:7%;">
	    	<li>Conference
	    		<a name="conf"></a> 
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
	    		 sed do sed do <br> sed do sed do sed do sed do sed sed do sed do sed do sed do sed do
	    		sed do sed </p>
	    		<img src="http://sces.org.uk/wp-content/uploads/2016/01/conference2.jpg" width="500" height="200">
	    		</div>
	    	</li>
	    	<li style="padding-right: 0%;"> 
	    		<div> 
	    		<p id="guidelines"> Paper guidelines and deadlines here </p>
	    			<form method="post" action="submitPaper.php" enctype="multipart/form-data">
    					<label>Name :</label> <label style="padding-left: 11%;"> E-mail :</label> <label style="padding-left: 12%;"> Institution : </label> <br> 
    					<input size="6" type="text" name="username" placeholder="name" />
    					<input size="8" style="margin-left: 5%;" type="text" name="email" placeholder="email" />
    					<input size="10" style="margin-left: 5%;" type="text" name="institution" placeholder="institution" /> <br> <br> 
    					<label style="padding-right: 8px;"> Select a file : </label> <input type="file" name="fileName" size="1">  <br>  <br> 
    					<input class="paperSubmit" type="submit" value="Submit your paper" name="submitPaper"/><br />
	    			</form>
	    		</div>
	    	</li>
	    </ul>
		    	
		<br> 

	    <hr style="width: 85%"> 

	    <ul id="EventsList" style="padding-left:7%;">
	    	<li>Workshops
	    		<a name="work"></a>
	    		<div> 
	    		<p id="lorem_ipsum"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
	    		 sed do sed do <br> sed do sed do sed do sed do sed sed do sed do sed do sed do sed do
	    		sed do sed </p>
	    		<img src="http://www.hcst.gov.jo/sites/default/files/workshop_0.jpg" width="500" height="200">
	    		</div>
	    	</li>
	    	<li style="padding-right: 0%;"> 
	    		<div> 
	    		<p id="guidelines"> Paper guidelines and deadlines here </p>
	    			<form method="post" action="submitPaper.php" enctype="multipart/form-data">
    					<label>Name :</label> <label style="padding-left: 11%;"> E-mail :</label> <label style="padding-left: 12%;"> Institution : </label> <br> 
    					<input size="6" type="text" name="username" placeholder="name" />
    					<input size="8" style="margin-left: 5%;" type="text" name="email" placeholder="email" />
    					<input size="10" style="margin-left: 5%;" type="text" name="institution" placeholder="institution" /> <br> <br> 
    					<label style="padding-right: 8px;"> Select a file : </label> <input type="file" name="fileName" size="1">  <br>  <br> 
    					<input class="paperSubmit" type="submit" value="Submit your paper" name="submitPaper"/><br />
	    			</form>
	    		</div>
	    	</li>
	    </ul>	 

	    <!-- <hr style="width: 40%;"> -->

	    <hr style="width: 85%">

	    <br> <br>

	    <?php 
	    	if ($_FILES)
	    	{
	    		require_once 'login.php'; 
	    		$conn = new mysqli($hn, $un, $pw, $db);
	    		if ($conn->connect_error)	die($conn->connect_error);

	    		mysqli_select_db($conn, "files");

	    		if (isset($_POST["submitPaper"]))
	    		{
		    		$upload_file = $_FILES['fileName']['name'];
		    		$folder="../pdf_files/";
					move_uploaded_file($_FILES['fileName']['tmp_name'], "$folder".$_FILES['fileName']['name']);
		    		
		    		$sql="INSERT INTO file (Name, Folder, User, Email, Institution) VALUES('$upload_file', '$folder', 
		    		'".$_POST["username"]."', '".$_POST["email"]."', '".$_POST["institution"]."')";
					if ($conn->query($sql) === TRUE) 
					{
						echo "<script type= 'text/javascript'>alert('Your pdf file submitted successfully');</script>";
						// header("Location : reg3_3.php");
					} else 
					{
						echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
					}

		    		$conn->close();
	    		}
	    	}

	    ?> 



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