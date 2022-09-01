<?php
	include_once 'config4.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Online Land Sales System</title><!--IT19169736 Gamage M.G.U.D.-->
		<link rel ="stylesheet" href= "../css/styles4.css">
		<script src = "../js/script4.js"></script>
	</head>
	
	<body>
		<!--Header-->
		<table width="100%" >
			<tr>
				<td width = "200px">
					<img src ="../images/logo.jpg" align = "left" width="200px" height ="200px" >
				</td>
		
				<td align ="right">
					<div>
						<button type= "button" class="buttons" >Login</button>
						<br>
						<button type= "button" class="buttons">Sign up</button>
						<br>
						<button type= "button" class="wishlist" >Wish list</button>
						<br>
					</div>
					<div class="menu">
						<a href="#"> Home</a>
						<a href="#"> Lands </a>
						<a href ="#"> Sell Your Lands </a>
						<a href = "#"> News</a>
						<a href = "#">About us</a>
						<a href = "ContactUs.html">Contact us</a>
						<input type="text" name="search" placeholder="Search...">		
					</div>
				</td>
			</tr>
		</table>
		
		<hr style = "height: 2px ; border-width: 0;  background-color:white">
		
		
		<table width = "100%">
			<tr>
				<td class = "confirm">

<?php
$ID = $_POST["idnum"];
$sql = "DELETE FROM advertisement WHERE nic = '$ID'";

if(mysqli_query($conn,$sql)){
		echo "Deleted Successfully<br>";
		
		//header ("Location:../html/PaymentDetails.html");
		//echo "<script>alert('Deleted Successhully!')</script>";
	}
	else{
		echo "Error in deleteing <br>";
		echo("Error description: " . mysqli_error($conn));
	}
	
	mysqli_close($conn);

?>

	<br>		
		<a href = "../html/PaymentDetails.html" style = "text-decoration:none;">Go Back</a>	
	</td>
				
				<td width = "200px" align = "center" valign = "top">
					<div align="right">
						<ul>
							<li> <a href="#">New Arrivals</a></li>
							<li> <a href="#"> Branches</a></li>
							<li> <a href="#">Careers</a></li>
							<li> <a href="#">Feedback</a></li>
							<li> <a href="#">FAQ</a></li>
						</ul>
					</div>				
					<table class = "tab">
						<tr>
							<td style = "padding : 10px 10px 10px 15px ;">
								<h2><u><b>Support</b></u></h2>
								<h3>Hotline:</h3>
								<h4>8.00am to 5.30pm</h4>
								+94 112 532719
								<br>
								+94 710 596282
								<h3>e-mail:</h3>
								lankalands@gmail.com
								<br>			
							</td>
						</tr>	
					</table>					
				</td>
			</tr>			
		</table>
		<!--Footer-->
		<div class="footer">
			<a href="https://twitter.com/"><img src="../images/twitter.jpg" height="50px" width="50px">	</a>
			<a href="https://www.facebook.com/"><img src="../images/facebook.jpg" height="50px" width="50px"></a>
			<a href="https://www.instagram.com/"><img src="../images/insta.jpg" height="50px" width="50px">	</a>
			<a href="https://www.apple.com/app-store/"><img src="../images/apple.png" height="50px" width="150px"></a>
			<a href="https://play.google.com/"><img src="../images/google.png" height="50px" width="150px"></a>
			<a href="https://www.visa.com.lk/"><img src="../images/visa.png" height="50px" width="80px"></a>
			<a href="https://www.mastercard.us/"><img src="../images/master.png" height="50px" width="80px"></a>		
			<p class = "copy">
				Copyright 2020 © Lanka Lands
				<br/>
				All rights reserved
			</p>
		</div>
		
	</body>
</html>
