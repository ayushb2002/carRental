<?php

if(!isset($_SESSION))
{
  session_start();
}

if(isset($_SESSION['loginSuccess']))
{
    if($_SESSION['agency'] == 1)
    {
        header('Location: ../404.php');
    }
}

include 'dbconnect.php';

if($_POST['rentDate'] && $_POST['days'] && $_POST['agency'] && $_POST['vehicleNumber'])
{
    $conn = dbconnect();
    if(!$conn)
    {
        header("Location: ../404.php");
    }

    $sql = "INSERT INTO `leased` (`agency`, `user`, `number`, `date`, `days`) VALUES ('".$_POST['agency']."', '".$_SESSION['email']."', '".$_POST['vehicleNumber']."', '".$_POST['rentDate']."', '".$_POST['days']."')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['rentSuccess'] = true;
        $_SESSION['message'] = 'Booked the car successfully';
        header("Location: ../viewCars.php");
      } else {
        $_SESSION['rentSuccess'] = false;
        $_SESSION['message'] = 'Failed booking!';
        header("Location: ../viewCars.php");
      }
      
      $conn->close();
}

?>