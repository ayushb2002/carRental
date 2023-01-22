<?php

include 'dbconnect.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

function returnCars()
{
$conn = dbconnect();
$sql = "SELECT * FROM `rent`";
$result = $conn->query($sql);
return $result;
}

?>