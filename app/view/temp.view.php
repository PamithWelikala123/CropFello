<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/requestcrop.css">
    <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
    <script src="<?=ROOT?>/assets/js/map.js"></script> 
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />

    <title>Document</title>

</head>
<body onload="initMap()">

    <div id="modal" class="requestcrop-modal">
        <div class="requestcrop-modal-content">
          <div class="requestcrop-modal-header">
            <span class="requestcrop-closeBtn">&times;</span>
            <h2>Request Crop</h2>
          </div>
          <div class="requestcrop-modal-body">
        


            <div class="requestcrop-row">
                <div class="requestcrop-col-75">
                  <div class="requestcrop-container">
                    <form action="/action_page.php">
                    
                      <div class="requestcrop-row">
                        <div class="requestcrop-col-50">
                          <div class="requestcrop-row">
                            <label for="email">Item Name</label>
                            <input type="text" id="password" name="password" >
                            </div>
                      
                          
              
                          <div class="requestcrop-row">
                            <div class="requestcrop-col-75">
                              <label for="city">Quantity</label>
                              <input type="text" id="city" name="city">
                            </div>
                            <div class="requestcrop-col-25">
                                <label for="city">&nbsp;</label>
                                <select name="cars" id="cars">
                                    <option value="volvo">Kg</option>
                                    <option value="saab">g</option>
                                    <option value="mercedes">Tree(s)</option>
                                    <option value="audi">Acre(s)</option>
                                </select>
                            </div>

                          </div>

                          <div class="requestcrop-row">
                            <label for="email">Before</label>
                            <input type="text" id="password" name="password" >
                            </div>
                      
                          
              
                          <div class="requestcrop-row">
                            <div class="requestcrop-col-50">
                              <label for="city">City</label>
                              <input type="text" id="city" name="city">
                            </div>
                            <div class="requestcrop-col-50">
                              <label for="postalcode">Contact No</label>
                              <input type="text" id="postalcode" name="postalcode" >
                            </div>

                          </div>
                          
                        </div>
                        
              
                        <div class="requestcrop-col-50">
                            <label for="">Location</label>
                            <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location" >
                
                            <input type="hidden" name="p-latitude" id="p-latitude" value="">
                            <input type="hidden" name="p-longitude" id="p-longitude" value="">
                
                <!-- 
                            <input type="text" id="destination" name="destination" placeholder="From Where journey End...?"  value=""> -->
                <!-- 
                            <input type="hidden" name="d-latitude" id="d-latitude" value="">
                            <input type="hidden" name="d-longitude" id="d-longitude" value="">
                
                
                
                            <input type="hidden" name="distance" id="distance" value="">
                            <input type="hidden" name="duration" id="duration" value=""> -->
                
                            <div class="requestcrop-map-container">
                                <div id="map"></div>
                            </div>
                            <div class="requestcrop-row">
                                <div class="requestcrop-col-25">
                                    <!-- <input type="submit" value="Next" class="requestcrop-btn" > -->
                                    <button type="submit" class="requestcrop-btn"><span>Next </span></i></button>
                                  </div>
                                
                            </div>
                          </div>
                        </div>
                        
                      </div>
              
                      
                    </form>
                  </div>
                </div>
              
              </div>



          </div>
        </div>
      </div>
      <!-- <div class="requestcrop-container">
        <img src="images/pinaple1.jpg" alt="Avatar" class="requestcrop-image">
        <div class="requestcrop-overlay">
          <div class="requestcrop-text">
              <label>Edit</label><br> -->
              <label   id="plus" >button</label>
          <!-- </div>
        </div>
      </div>
       -->
      <script>
        // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("plus");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("requestcrop-closeBtn")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
      modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
      modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
      }



     
      
      </script> 
</body>
</html>