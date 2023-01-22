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

    $sql1 = "DELETE FROM `rent` WHERE `number`='".$_POST['vehicleNumber']."'";
        unset($_SESSION['editForm']);
        unset($_SESSION['vehicleName']);
        unset($_SESSION['vehicleModel']);
        unset($_SESSION['vehicleNumber']);
        unset($_SESSION['vehicleCapacity']);
        unset($_SESSION['vehicleRent']);
    if ($conn->query($sql1) === TRUE) {
    $sql2 = "INSERT INTO `rent` (`agency`, `name`, `model`, `number`, `capacity`, `rent`) VALUES ('".$_SESSION['email']."', '".$_POST['vehicleName']."', '".$_POST['vehicleModel']."', '".$_POST['vehicleNumber']."', '".$_POST['vehicleCapacity']."', '".$_POST['vehicleRent']."')";

    if ($conn->query($sql2) === TRUE) {
        $_SESSION['editCarSuccess'] = true;
        $_SESSION['message'] = 'Updated car details successfully';
      } else {
        $_SESSION['editCarSuccess'] = false;
        $_SESSION['messsage'] = 'Failed to update car details!';
      }
    }
    else
    {
        $_SESSION['editCarSuccess'] = false;
        $_SESSION['messsage'] = 'Failed to find the car requested for!';
    }

      header("Location: ../welcome.php");
      
      $conn->close();
}

?>