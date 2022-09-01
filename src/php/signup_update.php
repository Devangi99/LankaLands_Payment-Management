<?php
//include the configuration file
include_once'config30.php';
?>
<!DOCTYPE html>
<html>
<body>
<a href = "signup.php">Back</a>

<form method = ""post action = "signup_update.php">
<table border = "1">
<tr>
<td>First Name</td>
<td><input type="text" name = "fname" value = "<?php echo $fname;?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name = "lname" value = "<?php echo $lname;?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name = "email" value = "<?php echo $email;?>"></td>
</tr>
</body>
</html>
<?php
//check if user enter update, then redirect to homepage after update
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$email = $_POST['email'];
	
	//updating progress
	$result = mysqli_query($conn, "UPDATE details SET firstName ='$fname', lastName = '$lname', email = '$email' WHERE id='$id'");
	
	//redirecting
	heaeder("Location:signup.php");	
}
?>
<?php
//display the data
$id = $_GET['id'];

//fetch user data based on id
$result = mysqli_query($conn, "SELECT * FROM details WHERE id=$id");

while($row = mysqli_fetch_array($result)){
	$fname = $row['firstName'];
	$lname = $row['lastName'];
	$email = $row['email'];
}
?>
