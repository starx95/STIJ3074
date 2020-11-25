<?php

$servername = "sql306.epizy.com";
$username = "epiz_27301144";
$password = "wD6lMstAIf";
$database = "epiz_27301144_Restaurant";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>