<?php
	include_once
	//new db connection object
	$db=new DbCocument();
	
	//connect to the db
	$cnn=$db->getConnection();
	
	if($cnn){
		
		
		//insert submited data
		$ID=$_POST["user_id"];
		$UserName ==$_POST ["username"];
		$contactNumber ==$_POST ["contact number]";
		$email==$_POST["email"];
		$city==$_POST["city"];
		$db==$_POST  ["reserve"];
		
		if($_POST['action'] == 'update'){
			$updatequary="UPDATE tbuser SET ID='$ID', UserName='$username',contactNumber=$contactNumber',email='$email'";
			$respond=mysqli_query($conn,$updateQuery);
			
			if($respond)
				echo "recode updated";
			else
				echo "recode is not updated"
		}
		else ($_POST['action'] == 'delete'){
			$updatequary="DELETE FROM tbuser";
			$respond=mysqli_query($conn,$deleteeQuery);
			
			if($respond)
				echo "recode deleted";
			else
				echo "recode is not deleted"
			
?>