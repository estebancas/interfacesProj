//get the modal
var modal = document.getElementById('myModal');

// get the button that opens the modal
var btn = document.getElementById("modalOC");

//get the span that close the modal
var span = document.getElementsByClassName("close")[0];

//when clicks open
btn.onclick = function() {
	modal.style.display = "block";
}

//when clicks <span> x
span.onclick = function() {
	modal.style.display = "none";
}

//when clicks outside
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}