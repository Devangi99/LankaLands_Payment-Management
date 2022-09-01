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
			<td>
				<div class="backForm">
					<img src="../images/form.jpg" width="100%" height="1000px" style="filter:blur(6px)">
					
					<div class="field">
					
									
						<fieldset style="border:solid black; display:inline-block"  >
						
							<legend style="font-size:30px"><b>Fill this form to update your advertisement</legend>							
							<form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
							
								<label>Land code</label><br>
								<input class="fill" type="text" id="Ncode" name="Ncode" placeholder="Enter the given land code" required><br><br>
								
								<label>Name</label><br>
								<input class="fill" type="text" id="Nname" name="Nname" placeholder="Enter your full name" required><br><br>
								
								<label>Contact no</label><br>
								<input class="fill" type="text" id="Tno" name="Tno" pattern="[0-9]{10}" required><br><br>
						
								<label>E-mail</label><br>
								<input class="fill" type="email" id="Nmail" name="Nmail"><br><br>
						
								<label>Location</label><br>
								<textarea class="fill" type="text" id="loc" name="loc" placeholder="Enter land address"></textarea><br><br>
						
								<label>Facilities :</label><br>
								<textarea class="fill" type="text" id="faci" name="faci" placeholder="Enter atleast 3 facilities"></textarea><br><br>
						
								<label>Number of perch</label><br>
								<input class="fill" type="number" id="Nperch" name="Nperch" placeholder="Select a number"><br><br>
						
								<label>Price</label><br>
								<input class="fill" type="text" id="Nprice" name="Nprice" placeholder="Enter price per perch"><br><br>
						
								<input class="subBtn" type="submit" id="newUpdate" name="newUpdate" value="Update details"><br><br>
			
							</form>
						</fieldset>
						
					<?php
						if(isset($_POST["newUpdate"])){
								$code = $_POST["Ncode"];
								$name = $_POST["Nname"];								
								$contact = $_POST["Tno"];
								$mail = $_POST["Nmail"];
								$location = $_POST["loc"];
								$fac = $_POST["faci"];
								$perch = $_POST["Nperch"];
								$price = $_POST["Nprice"];
								
								$sql = "UPDATE items SET name = '$name', contact = '$contact', mail = '$mail', location = '$location', facilities = '$fac', perch_no = '$perch', price = '$price' WHERE land_code = '$code' ";
								
								if(mysqli_query($conn, $sql)){
									echo "<script> alert ('Record updated successfully!!!')</script>";
								}
								else{
									echo "<script> alert ('Error in updating records')</script>";
								}
						}
						
						mysqli_close($conn);
					?>
					
					</div>
				</div>
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
