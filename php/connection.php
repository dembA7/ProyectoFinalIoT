<?php
  //Connect to database
  $servername = "localhost";
  $username = "";
  $password = "";
  $dbname = "climatec";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Database Connection failed: " . $conn->connect_error);
  }
?>
