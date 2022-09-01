 <?php
   include_once"config1.php";
 ?>




 <!DOCTYPE html>
<html>
	<head>
		<title>Online Land Sales System</title>
		<link rel ="stylesheet" href= "../css/styles.css">
	</head>
	<body>
	
	<table width="100%">
		<tr>
		<td width =200px>
		
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
			<a class ="active" href="https://www.sliit.lk/"> Home</a>
			<a href="https://www.sliit.lk/"> Lands </a>
			<a href ="https://www.sliit.lk/"> Sell Your Lands </a>
			<a href = "https://www.sliit.lk/"> News</a>
			<a href = "https://www.sliit.lk/">About us</a>
			<a href = "https://www.sliit.lk/">Contact us</a>
			<input type="text" name="search" placeholder="Search...">
			
			
		</div>
		</td>
		</tr>
		</table>
		<hr style = "height: 2px ; border-width: 0;  background-color:white">
		<div style="background-image: url('../images/Beauti2.jpg');
		background-repeat: no-repeat;
		background-attachment: fixed;
		<br>
		
		<table width = "100%" height="screen">
		<td>
		 <table border="1"width="50%">
   
  <th>Land id    </th>
    <th>Land  type </th>
	  <th>Land owner name  </th>
	    <th>Land discription    </th>
		<th>Land quantity   </th>
		<th>Price(per 1perches)   </th>
		<th>Code   </th>
		 
		</tr>
	  
<tr>
 
<td>1</td>
<td>Sutibale for industrial</td>
<td> A.A.Ranasingha</td>
<td>land is situated in western province, colombo district.
it is situated in faced to the eastern highway.
it has threephase currunt and piped water.
more information-0774444555. 
 </td>
<td>100 </td>
<td>450000 </td>
<td>1123</td>
 
</tr>

<tr>
<td>2</td>
<td>sutibale for building houses</td>
<td>W.K.Weerasingha </td>
 
<td>land is situated in central province,peradeniya.
there is electricity and pure water.
free enviorenment.
more information:08145545522
 </td>
<td>20 </td>
<td>350000 </td>
<td>2345  </td>
</tr>


 
</table> 
	
		
<!--<>?php
		  $sql=" select *from land item";
		 $result=$conn->qurey($sql);
		 if ($result-> num_rows>0){
			 while($row=$result->fetch assoc(){
				 echo"<tr><td>".$row["land_id"]."<tr><td>".$row["land_type"]."<tr><td>".$row["land_ownername"]."<tr><td>".$row["land_description"]."<tr><td>".$row["land code"]."<tr><td>".$row["price"]."<tr><td>".$row["quantity"]."</td></tr>";
			 }
		 }
		 else{
			 echo "0 results";
		 }
		 echo "</table>";
		 $conn-.close();
		 
		  ?>-->
	
		  

		
	<!--</body>
 </html>-->
		
		
		 
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--<!--content--></td>-->
		<!--side nav bar-->
	<!--<td width = "200px">
		<div align="left">
			<ul>
				<li> <a class = "active" href="#">New Arrivals</a></li>
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
		<!---->
		<button type="submit"><a href="../php/submittAddItem.php">delete</a></button>
		<tr></tr>
	</table>
	
		
	<div class="footer">
		
		<a href="https://twitter.com/">
		<img src="../images/twitter.jpg" height="50px" width="50px">	
		</a>
		
		<a href="https://www.facebook.com/">
		<img src="../images/facebook.jpg" height="50px" width="50px">
		</a>
		
		<a href="https://www.instagram.com/">
		<img src="../images/insta.jpg" height="50px" width="50px">	
		</a>
		
		
		<a href="https://www.apple.com/app-store/">
		<img src="../images/apple.png" height="50px" width="150px">	
		</a>
		
		<a href="https://play.google.com/">
		<img src="../images/google.png" height="50px" width="150px">
		</a>
		
		
		
		<a href="https://www.visa.com.lk/">
		<img src="../images/visa.png" height="50px" width="80px">
		</a>
		
		<a href="https://www.mastercard.us/">
		<img src="../images/master.png" height="50px" width="80px">
		</a>
		
	
		<p class = "copy">Copyright 2020 © Lanka Lands<br/>
		All rights reserved</p>	
		
		
	</body>
</html>