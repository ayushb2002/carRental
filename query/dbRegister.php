<?php

session_start();

include 'dbconnect.php';

if($_POST['name'] && $_POST['email'] && $_POST['password'] && $_POST['agency'])
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
        header("Location: ../register.php");
      }
      
      $conn->close();
}

?>