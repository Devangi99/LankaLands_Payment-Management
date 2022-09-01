<?php
	include_once 'config2.php';
?>

<?php
	$code = $_POST["no"];
	
	$sql = "DELETE FROM items WHERE land_code = '$code'";
	
	if(mysqli_query($conn, $sql)){
		echo "<script> alert ('Record deleted successfully!!!')</script>";
	}
	else{
		echo "<script> alert ('Error in deleting records')</script>";
	}
	
	mysqli_close($conn);
	
?>