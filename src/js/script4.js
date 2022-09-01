/*Home*/
function backImage(btn){
	if(btn == "on1")
	{
		
		document.getElementById("image").style.backgroundImage = "url('../images/vision.jpg')";
		document.getElementById("myText").innerHTML = "Our vision is to earn customer satisfaction while providing the best service.";
		document.getElementById("heading").innerHTML = "VISION";
	}
	else if(btn == "on2")
	{
		document.getElementById("image").style.backgroundImage = "url('../images/mission.jpg')";
		document.getElementById("myText").innerHTML = "Our mission is to become a leading land sales company.";
		document.getElementById("heading").innerHTML = "MISSION";
		
	}
	else if(btn == "on3")
	{
		document.getElementById("image").style.backgroundImage = "url('../images/values.jpg')";
		document.getElementById("myText").innerHTML = "Teamwork<br>Customer Satisfaction<br>Innovation";
		document.getElementById("heading").innerHTML = "VALUES";
		
		
	}
	
	else
	{
		alert("Error");
	}
}

/*contact us*/
function SubmitEnable(){
	if(document.getElementById("condition").checked){
		document.getElementById("Sbtn").disabled=false;
	}
	else{
		document.getElementById("Sbtn").disabled=true;
	}
}