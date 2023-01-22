<?php

if(!isset($_SESSION))
{
  session_start();
}

include 'dbconnect.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['agency']))
{
    $conn = dbconnect();
    if(!$conn)
    {
        header("Location: ../404.php");
    }

    $sql = "INSERT INTO `user` (`name`, `email`, `password`, `agency`) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['agency']."')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['registerSuccess'] = true;
        header("Location: ../login.php");
      } else {
        $_SESSION['registerSuccess'] = false;
        $_SESSION['message'] = 'Registration failed! User already exists';
        header("Location: ../register.php");
      }
      
      $conn->close();
}
else
{
  $_SESSION['registerSuccess'] = false;
  $_SESSION['message'] = "Registration failed due to internal server error...";
  header('Location: ../register.php');
}

?>