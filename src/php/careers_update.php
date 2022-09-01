<?php
//include the configuration file
include_once'config31.php';
?>
<!DOCTYPE html>
<html>
<body>
<a href = "signup.php">Back</a>

<form method = ""post action = "careers_update.php">
<table border = "1">
<tr>
<td>Name with initials</td>
<td><input type="text" name = "name" value = "<?php echo $name;?>"></td>
</tr>
<tr>
<td>Age</td>
<td><input type="text" name = "age" value = "<?php echo $age;?>"></td>
</tr>
<tr>
<td>Date of Birth</td>
<td><input type="text" name = "dob" value = "<?php echo $dob;?>"></td>
</tr>
<td>NIC/Passport</td>
<td><input type="text" name = "nic" value = "<?php echo $nic;?>"></td>
</tr>
<td>Address</td>
<td><input type="text" name = "address" value = "<?php echo $address;?>"></td>
</tr>
<td>Phone Number</td>
<td><input type="text" name = "phn" value = "<?php echo $phn;?>"></td>
</tr>
<td>Email</td>
<td><input type="text" name = "email" value = "<?php echo $email;?>"></td>
</tr>
</body>
</html>
<?php
//check if user enter update, then redirect to homepage after update
if(isset($_POST['update'])){
	$cid = $_GET["cid"];
$name = $_POST["Name"];
$age = $_POST["Age"];
$dob = $_POST["DOB"];
$nic= $_POST["NIC"];
$address = $_POST["Address"];
$phn = $_POST["phn"];
$email = $_POST["email"];

	
	//updating progress
	$result = mysqli_query($conn, "UPDATE details SET name ='$name', age = '$age', dob = '$dob', nic = '$nic', address = '$address', phn = '$phn', email = '$email' WHERE cid='$cid'");
}
?>
<?php
//display the data
$cid = $_GET['cid'];

//fetch user data based on id
$result = mysqli_query($conn, "SELECT * FROM details WHERE cid=$cid");

while($row = mysqli_fetch_array($result)){
	$name = $row['name'];
	$age = $row['age'];
	$dob = $row['dob'];
	$nic = $row['nic'];
	$address = $row['address'];
	$phn = $row['phn'];
	$email = $row['email'];
}
?>
