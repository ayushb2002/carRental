<?php

include 'dbconnect.php';

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 

function returnLease()
{
$conn = dbconnect();
$sql = "SELECT * FROM `leased` WHERE agency='".$_SESSION['email']."'";
$result = $conn->query($sql);
return $result;
}

?>