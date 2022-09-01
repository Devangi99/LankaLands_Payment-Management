<?php
	include_once 'config2.php';
?>

<?php
	$name = $_POST["Sname"];
	$code = $_POST["Lcode"];
	$contact = $_POST["conNo"];
	$mail = $_POST["mail"];
	$location = $_POST["Adress"];
	$fac = $_POST["Facilities"];
	$perch = $_POST["pNo"];
	$price = $_POST["price"];
						
	$sql = "insert into items(ad_no, name, land_code, contact, mail, location, facilities, perch_no, price)values('', '$name', '$code', '$contact', '$mail', '$location', '$fac', '$perch', '$price')";
						
	if(mysqli_query($conn, $sql)){
		echo "<script> alert ('Record inserted successfully!!!')</script>";
	}
	
	else{
		echo "<script> alert ('Error in inserting records')</script>";
	}
						
	mysqli_close($conn);
						
?>


