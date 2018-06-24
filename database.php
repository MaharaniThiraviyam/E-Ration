<?php
session_start();
  $host="localhost";
  $user="root";
  $password1="";
  $dbname="ration management";
  

$conn = new mysqli($host, $user, $password1, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

?>