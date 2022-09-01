<?php
	$username = "localhost";
	$id = "username";
	$contactNumber = "contact number";
	$email="email";
	$city="city"
	$db="reserve",
	
// Create connection
	$conn = new mysqli($username,$id,$conntactNumber,$email,$city,$db);
// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
	echo "Connected successfully";
?>