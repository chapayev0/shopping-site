<?php
// DB connection parameters
    $dbServer = "localhost";
	$dbUser = "root";
	$dbPassword = "";
	$database = "shopping";
	
// Connect
    $conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $database);
	   if(!$conn){
		   die("Connection Failed : ".mysqli_connect_error());
	   }
?>
	