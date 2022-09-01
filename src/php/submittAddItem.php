<html>
<body>
your inserted record successfully!!

<?php
  include_once'config1.php';
?>

<?php
  $landtype =$_post["feild1"];
  $land_ownername =$_post["feild2"]; 
  $land_description =$_post["feild3"];
  $quantity =$_post["feild4"];
  $price=$_post["feild5"];
  $land_code =$_post["feild6"];
  
  
  $sql="INSERT INTO land item(land_id,land_type	,land_ownername,land_description,land_code,price,quantity)values('','$landtype','$land_ownername','$land_description','$land_code','$price','$quantity')";
  
  if(mysqli_query($conn,$sql){
	  echo"Data inserted successfully";
	   
	   // echo "<script>alert ('your in inserted records successfully!!!')</script>";
	    
  }
  else{
	  echo"error in inserting";
	  echo("error description ".mysqli_error($conn)];
	  // echo  "<script>alert ('error inserted records!')</script> ";
  }
  mysqli_close($conn);
    
	 ?>
	 
	 </html>
</body>