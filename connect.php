<?php
$servername = "localhost";
$db = "damaged class assets registration";
$username = "root";
$password = "";

// Create connection

$con = new mysqli("localhost", "root", "", "damaged class assets registration");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>