<?php
session_start();
require_once 'login.php'; 
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$error = "";
if(isset($_POST["submit"]))
{
  if(empty($_POST["name"]) || empty($_POST["pass"]))
  {
    $echo = "Both fields are required.";
  }
  else
  {
    // Define $username and $password
    $username=$_POST['name'];
    $password=$_POST['pass'];

    //Check username and password from database
    $query=  "SELECT * FROM user u WHERE u.Name = '$username' and u.Password = '$password'";
    $result = $conn->query($query);
    if (!$result) die ($conn->error);
    $rows = $result->num_rows;

    //If username and password exist in our database then create a session. Otherwise echo error.
    if($rows == 1)
    {
      //$_SESSION['name'] = $username; // Initializing Session
      //echo "<li> <a>  Hello user, " .  $_SESSION['name'] . "</a> </li>";
      
      if(isset($_POST['name']))
      {
          $_SESSION['name']= $username;
          //echo "<li> <a>  Hello user, " .  $_SESSION['name'] . "</a> </li>";
      }
    }
    else
    {
      $error = "Incorrect username or password.";
    }
  }
}

//session_destroy();

?>