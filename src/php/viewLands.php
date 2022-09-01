<!--IT19994406-->

<?php
	include_once 'config2.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Online Land Sales System</title>
		<link rel ="stylesheet" href= "../css/styles2.css">
		<script src="../js/script2.js"></script>
	</head>
	
	<body>
	
		<table width="100%" >
			<tr>
				<td width ="200px">
		
				<img src ="../images/logo.jpg" align = "left" width="200px" height ="200px" alt="Photo not found">
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
						<a href="Lands.html"> Lands </a>
						<a class ="active" href ="#"> Sell Your Lands </a>
						<a href = "#"> News</a>
						<a href = "#">About us</a>
						<a href = "#">Contact us</a>
						<input type="text" name="search" placeholder="Search...">
						
					</div>
				</td>
			</tr>
		</table>
		
		<hr style = "height: 2px ; border-width: 0;  background-color:white">
		
		
		<!--Sell your lands-->
		
		<table width = "100%">
		
			<td style="background-color:#E8E8E8">
			
			<table border="3" width = "100%" height ="100%">
						<tr>
							<th>Name</th>
							<th>Land code</th>
							<th>Contact No</th>
							<th>E-mail</th>
							<th>Location</th>
							<th>Facilities</th>
							<th>Number of perch</th>
							<th>Price</th>
						</tr>
						
						<?php
							$sql = "select * from items";
							$result = $conn->query($sql);
							
							if($result->num_rows>0){
								while($row = $result->fetch_assoc()){
									echo "<tr><td>".$row["name"]."</td><td>".$row["land_code"]."</td><td>".$row["contact"]."</td><td>".$row["mail"]."</td><td>".$row["location"]."</td><td>".$row["facilities"]."</td><td>".$row["perch_no"]."</td><td>".$row["price"]."</td></tr>";
								}
							}
							
							else{
								echo "empty table";
							}
							
							$conn->close();
							echo "</table>";
										
						?>
						
		
			</td>
			
	<!--side nav bar-->
		
			<td width = "200px" align = "center" valign = "top">
				<div align="right">
					<ul>
						<li> <a href="#">New Arrivals</a></li>
						<li> <a href="#"> Branches</a></li>
						<li> <a href="#">Careers</a></li>
						<li> <a href="#">Feedback</a></li>
						<li> <a href="FAQ.html">FAQ</a></li>
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
			
		</table>
			
		<div class="footer">
		
			<a href="https://twitter.com/">
			<img src="../images/twitter.jpg" height="50px" width="50px" alt="Photo not found">	
			</a>
			
			<a href="https://www.facebook.com/">
			<img src="../images/facebook.jpg" height="50px" width="50px" alt="Photo not found">
			</a>
			
			<a href="https://www.instagram.com/">
			<img src="../images/insta.jpg" height="50px" width="50px" alt="Photo not found">	
			</a>
					
			<a href="https://www.apple.com/app-store/">
			<img src="../images/apple.png" height="50px" width="150px" alt="Photo not found">	
			</a>
			
			<a href="https://play.google.com/">
			<img src="../images/google.png" height="50px" width="150px" alt="Photo not found">
			</a>
				
			<a href="https://www.visa.com.lk/">
			<img src="../images/visa.png" height="50px" width="80px" alt="Photo not found">
			</a>
			
			<a href="https://www.mastercard.us/">
			<img src="../images/master.png" height="50px" width="80px" alt="Photo not found">
			</a>
			
			<p class = "copy">Copyright 2020 © Lanka Lands<br/>
			All rights reserved</p>	
		</div>
		
	</body>
</html>
