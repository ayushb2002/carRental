<?php

if(!isset($_SESSION))
{
  session_start();
}

include 'dbconnect.php';

if(isset($_POST['email']) && isset($_POST['password']))
{
    $conn = dbconnect();
    if(!$conn)
    {
        $_SESSION['message'] = 'Could not connect to database!';
        header("Location: ../404.php");
    }

    $sql = "SELECT * FROM  `user` WHERE `email`='".$_POST['email']."' AND `password`='".$_POST['password']."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['loginSuccess'] = true;
        while($row = $result->fetch_assoc()) {
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['agency'] = $row['agency']; 
        }
        header("Location: ../welcome.php");
      } else {
        $_SESSION['agency'] = 0;
        $_SESSION['loginSuccess'] = false;
        header("Location: ../login.php");
      }
      
      $conn->close();
}
else
{
  $_SESSION['loginSuccess'] = false;
  header('Location: ../login.php');
}

?>