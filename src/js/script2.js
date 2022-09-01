/*lands*/
function loadData (name) {
    if(name == "button1")
    {
		document.getElementById("land").src = "../images/land1.jpg";
        document.getElementById("Head1").innerHTML = "Land details";
		document.getElementById("Text1").innerHTML = "Malabe is a suburb of the city of Colombo in Sri Lanka with  all the facilities you expect for a better living.Situated within the city limits of Piliyandala which makes your daily routine very easy and flexible.Only 800m to120 Colombo- Horana main route. You can enjoy 24 Hour transportation facility, Medical facilities, Banking facilities and easy access to main cities within few minutes. Reserve your block of land today!";
		document.getElementById("Head2").innerHTML = "Contact Details";
		document.getElementById("Text2").innerHTML = "Thamaru - 071-0596282";
    }
    else if(name == "button2")
    {
		document.getElementById("land").src = "../images/land2.jpg";
        document.getElementById("Head1").innerHTML = "Investment details";
		document.getElementById("Text1").innerHTML = "After reserving by paying 50,000/=  and completing the down payment you can pay the balance in installments or in a bank loan";
		document.getElementById("Head2").innerHTML = "Special offer";
		document.getElementById("Text2").innerHTML = "Payment Can be done without interest Within Six Month,Payment Can be done in Installment,Bank loan facilities";
        
    }
    else if(name == "button3")
    {
		document.getElementById("land").src = "../images/land31.jpg";
        document.getElementById("Head1").innerHTML = "Land details";
		document.getElementById("Text1").innerHTML = "Matale,is a main city area which is a city full of developed facilities and residencies. The project is located in a place where all these facilities are just few steps away and the Kandy road is as close as 20m to the land. It is surrounded by a well residential area and is a treasure for those who seek comfort of a village in a city.";
		document.getElementById("Head2").innerHTML = "Contact number";
		document.getElementById("Text2").innerHTML = "Mahela - 0710700983";

    }
    else if(name == "button4")
    {
		document.getElementById("land").src = "../images/land4.jpg";
        document.getElementById("Head1").innerHTML = "Special offers";
		document.getElementById("Text1").innerHTML = "Pay Rs.100,000/- for reservation & pay Rs.400,000/- within 14 days from the date of reservation to settle the down payment. If you made the balance payment within 01 month you will be getting the discount of Rs.2,500/- per perch. Or you could settle the balance within 06 months without interest.";
		document.getElementById("Head2").innerHTML = "Facilities";
		document.getElementById("Text2").innerHTML = "Pay Rs.100,000/- for reservation & pay Rs.400,000/- within 14 days from the date of reservation to settle the down payment. Balance can be pay through a bank loan. (Monthly Installment Rs.9000.00 onwards)"

    }
    else if(name == "button5")
    {
		document.getElementById("land").src = "../images/land5.jpg";
        document.getElementById("Head1").innerHTML = "Facilities";
		document.getElementById("Text1").innerHTML = "Three Phase Electricity.<br>Water board line.<br>20-30 ft road, Tarred roads.<br>";
		document.getElementById("Head2").innerHTML = "Contact Details";
		document.getElementById("Text2").innerHTML = "Vishwa - 0772590045<br>Chamod - 0712098376";

    }
    else
    {
        alert("invalid");
    }
}

/*sell your lands*/

function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("sub").disabled=false;
	}
	else{
		document.getElementById("sub").disabled=true;
	}
}


