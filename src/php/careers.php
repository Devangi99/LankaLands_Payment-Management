<?php
include_once'config31.php';
?>

<?php
$cid = $_GET["cid"];
$name = $_POST["Name"];
$age = $_POST["Age"];
$dob = $_POST["DOB"];
$nic= $_POST["NIC"];
$address = $_POST["Address"];
$phn = $_POST["phn"];
$email = $_POST["email"];

$sql = "insert into cdetails(cid,name,age,dob,nic,address,phnNO,emailADDRESS)values ('','$name','$age','$dob','$nic','$address','$phn','$email')";

if (mysqli_query($conn,$sql)){
	echo"<script>alert('Record inserted successfully')</script>";
	
}

else{
	echo"<script>alert('Error')</script>";
}

mysqli_close($conn);
?>
