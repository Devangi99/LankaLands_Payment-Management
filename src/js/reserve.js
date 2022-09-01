function loaddata(){
	document.getElementById("line").innerHTML=("submit success");
}
function myFunction() {
  document.getElementById("form").reset();
}
function getOptions() {
  var x = document.getElementById("text");
  var txt = "";
  var i;
  for (i = 0; i < x.length; i++) {
    txt = txt + " " + x.options[i].text;
  }
  document.getElementById("demo").innerHTML = txt;
}