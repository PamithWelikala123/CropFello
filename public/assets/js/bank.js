const bankModal = document.getElementById("bank-modal");
const bankModalBtn = document.getElementById("bankOpenModalBtn");
const bankCloseBtn = document.getElementsByClassName("bankCloseBtn")[0];

bankModalBtn.onclick = function() {
  bankModal.style.display = "block";
}

bankCloseBtn.onclick = function() {
  bankModal.style.display = "none";
}

// Add this event listener to prevent the default behavior of the 'a' tag
bankModalBtn.addEventListener("click", function(event) {
  event.preventDefault();
});
