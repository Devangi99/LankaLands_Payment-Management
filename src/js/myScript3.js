function changeImage(){
	var image = document.getElementById('colombo');
	
	if (image.src.match("Matara")){
	    image.src = "../images/colombo.jpg";
		document.getElementById("branch").innerHTML = "Branch - Colombo</br> Contact Number:0112546895";
	}
	else{
		image.src = "../images/Matara.jpg";
		document.getElementById("branch").innerHTML = "Branch - Matara</br> Contact Number:0342228186 ";
	}
	
}

