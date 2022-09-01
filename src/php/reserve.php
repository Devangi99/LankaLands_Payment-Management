<?php
	include_once 'config5.php'
?>

<?php
	$userName= $_POST["field1"];
	$id= $_POST["field2"];
	$contactNumber= $_POST["field3"];
	$email= $_POST["field4"];
	$city= $_POST["field5"];
	
	$sql="insert into user(user_name,ID,contact_number,email,city) valus('$userName ','$id ','$contactNumber ','$email ','$city ')";
	
	if(mysqli_query($conn,$sql)){
		echo "<spript> alert('recode insert sucsess!')</script>";
		header("location:receive.html");
	}
	else{
		echo "<spript> alert('erro in inserting recode!')</script>";
	}
	mysqli_close($conn);
?>