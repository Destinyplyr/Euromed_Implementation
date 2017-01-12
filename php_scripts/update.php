    <?php
    	if (isset($_POST["subUpdate"]))
    	{
    		require_once 'login.php'; 
    		$conn = new mysqli($hn, $un, $pw, $db);
    		if ($conn->connect_error)	die($conn->connect_error);

    		$_SESSION['username'] = $_POST["username"];
    		$_SESSION['email'] = $_POST["email"];
    		$_SESSION['telephone'] = $_POST["telephone"];
    		$_SESSION['institution'] = $_POST["institution"];
    		$_SESSION['institution_country'] = $_POST["institution_country"];
    		$_SESSION['address'] = $_POST["address"];
    		$_SESSION['city'] = $_POST["city"];
    		$_SESSION['state'] = $_POST["state"];
    		$_SESSION['postal_code'] = $_POST["postal_code"];
    		$_SESSION['country'] = $_POST["country"];


    		if(isset($_SESSION['name']))
			{
			   $username = $_SESSION['name']; 
			}

    		// $address = "Pen";

    		// $sql = "UPDATE user SET Name='Doe' WHERE Address='$address'";

    		$sql = "UPDATE user SET Name = '".$_POST["username"]."', Email = '".$_POST["email"]."',                   					 Telephone = '".$_POST["telephone"]."', Institution = '".$_POST["institution"]."', 
    								InstitutionCountry = '".$_POST["institution_country"]."', 
  									Address = '".$_POST["address"]."', City = '".$_POST["city"]."', 
    								State = '".$_POST["state"]."', PostalCode = '".$_POST["postal_code"]."', 
    								Country = '".$_POST["country"]."' WHERE Name = '$username'";
    		
    		if ($_POST["username"] != $_SESSION['name'])
    		{
    			$_SESSION['name'] = $_POST["username"];
    		}
    		

			if ($conn->query($sql) === TRUE) 
			{
				echo "<script type= 'text/javascript'>alert('Your info updated successfully');</script>";
				// header("Location : reg3_3.php");
			} else 
			{
				echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
			}

    		$conn->close();
    	}
    	else
    	{
    		$_SESSION['username'] = $_SESSION["name"];
    	}
    ?>