// Get the modal
var profmodal = document.getElementById("profmyModal");
profmodal.style.display = "none";
// Get the button that opens the modal
var profbtn = document.getElementById("profmyBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("profclose")[0];

// When the user clicks the button, open the modal 
profbtn.onclick = function() {
  profmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  profmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    profmodal.style.display = "none";
  }
}