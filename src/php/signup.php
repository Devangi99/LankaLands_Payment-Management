<?php
include_once'config30.php';
?>

<?php

$f_name = $_POST["fname"];
$l_name = $_POST["lname"];
$e_mail = $_POST["email"];
$p_wd = $_POST["pwd"];
$cp_wd = $_POST["c_pwd"];

$sql = "insert into details(id,firstName,lastName,email,password,confirm_password)values ('','$f_name','$l_name','$e_mail','$p_wd','$cp_wd')";

if (mysqli_query($conn,$sql)){
	echo"<script>alert('Record inserted successfully')</script>";
	
}

else{
	echo"<script>alert('Error')</script>";
}

mysqli_close($conn);
?>