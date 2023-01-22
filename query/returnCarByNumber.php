<?php

include 'dbconnect.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

if(!$_POST['vehicleNumber'])
{
    header('Location: ../404.php');
}

$conn = dbconnect();
$sql = "SELECT * FROM `rent` WHERE number='".$_POST['vehicleNumber']."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) 
{
    $_SESSION['editForm'] = true;
    while($row = $result->fetch_assoc()) {
        $_SESSION['vehicleName'] = $row['name'];
        $_SESSION['vehicleModel'] = $row['model'];
        $_SESSION['vehicleNumber'] = $row['number'];
        $_SESSION['vehicleCapacity'] = $row['capacity'];
        $_SESSION['vehicleRent'] = $row['rent'];
    }
    header('Location: ../editCars.php');
}
else
{
    header('Location: ../404.php');
}

?>