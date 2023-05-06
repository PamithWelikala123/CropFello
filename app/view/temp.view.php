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

    <div id="modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="closeBtn">&times;</span>
            <h2>Request Crop</h2>
          </div>
          <div class="modal-body">
        


            <div class="row">
                <div class="col-75">
                  <div class="container">
                    <form action="/action_page.php">
                    
                      <div class="row">
                        <div class="col-50">
                          <div class="row">
                            <label for="email">Item Name</label>
                            <input type="text" id="password" name="password" >
                            </div>
                      
                          
              
                          <div class="row">
                            <div class="col-75">
                              <label for="city">Quantity</label>
                              <input type="text" id="city" name="city">
                            </div>
                            <div class="col-25">
                                <label for="city">&nbsp;</label>
                                <select name="cars" id="cars">
                                    <option value="volvo">Kg</option>
                                    <option value="saab">g</option>
                                    <option value="mercedes">Tree(s)</option>
                                    <option value="audi">Acre(s)</option>
                                </select>
                            </div>

                          </div>

                          <div class="row">
                            <label for="email">Before</label>
                            <input type="text" id="password" name="password" >
                            </div>
                      
                          
              
                          <div class="row">
                            <div class="col-50">
                              <label for="city">City</label>
                              <input type="text" id="city" name="city">
                            </div>
                            <div class="col-50">
                              <label for="postalcode">Contact No</label>
                              <input type="text" id="postalcode" name="postalcode" >
                            </div>

                          </div>
                          
                        </div>
                        
              
                        <div class="col-50">
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
                
                            <div class="map-container">
                                <div id="map"></div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <!-- <input type="submit" value="Next" class="btn" > -->
                                    <button type="submit" class="btn"><span>Next </span></i></button>
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
      <!-- <div class="container">
        <img src="images/pinaple1.jpg" alt="Avatar" class="image">
        <div class="overlay">
          <div class="text">
              <label>Edit</label><br> -->
              <label   id="openModalBtn" >button</label>
          <!-- </div>
        </div>
      </div>
       -->
      <script>
        // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("openModalBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("closeBtn")[0];
      
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