<?php

if(!isset($_SESSION))
{
  session_start();
}

include 'dbconnect.php';

if(!isset($_SESSION['loginSuccess']))
{
    header('Location: ../404.php');
}

if($_POST['vehicleName'] && $_POST['vehicleModel'] && $_POST['vehicleNumber'] && $_POST['vehicleCapacity'] && $_POST['vehicleRent'])
{
    $conn = dbconnect();
    if(!$conn)
    {
        header("Location: ../404.php");
    }

    $sql = "INSERT INTO `rent` (`agency`, `name`, `model`, `number`, `capacity`, `rent`) VALUES ('".$_SESSION['email']."', '".$_POST['vehicleName']."', '".$_POST['vehicleModel']."', '".$_POST['vehicleNumber']."', '".$_POST['vehicleCapacity']."', '".$_POST['vehicleRent']."')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['addCarSuccess'] = true;
        $_SESSION['message'] = 'Added car details successfully!';
      } else {
        $_SESSION['addCarSuccess'] = false;
        $_SESSION['message'] = 'Failed to add car details! Kindly retry...';
      }

      header("Location: ../welcome.php");
      
      $conn->close();
}

?>