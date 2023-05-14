
          // Get the modal
      var modalbank = document.getElementById("bank-modal");
      
      // Get the button that opens the modal
      var btnbank = document.getElementById("bankOpenModalBtn");
      
      // Get the <span> element that closes the modal
      var spanbank = document.getElementsByClassName("bankCloseBtn");
      
      // When the user clicks the button, open the modal 
      btnbank.onclick = function() {
        modalbank.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
    //   spanbank.onclick = function() {
    //     modalbank.style.display = "none";
    //   }
      
      // When the user clicks anywhere outside of the modal, close it
    //   window.onclick = function(event) {
    //     if (event.target == modalbank) {
    //       modalbank.style.display = "none";
    //     }
    //   }
