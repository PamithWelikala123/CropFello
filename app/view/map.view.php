<!DOCTYPE html>
<html>
<head>
    <title>Location Picker</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
    <script src="<?=ROOT?>/assets/js/map.js"></script> 


    <style>
 
    </style>
</head>


<body onload="initMap()">






<img src="http://localhost/Cropfello/vimukthi/register form/images/logo.png" alt="">
<p class="login">Login</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post">
      
        <div class="row">
          <div class="col-50">
            <div class="row">
                <div class="col-50">
                  <label for="name">Name</label>
                  <input type="text" id="firstname"  placeholder="First Name" name="first_name">
                </div>
                <div class="col-50">
                  <label for="lastname">&nbsp;</label>
                  <input type="text" id="lastname" name="last_name" placeholder="Last Name">
                </div>
              </div>
        
            <label for="adr">Address</label>
            <input type="text" id="adress" name="address">

            <div class="row">
              <div class="col-25">
                <label for="city">City</label>
                <input type="text" id="city" name="city">
              </div>
              <div class="col-25">
                <label for="contact">Contact No</label>
                <input type="text" id="contact" name="contact_number">
              </div>
              
            </div>
            
          </div>
          

          <div class="col-50">
            <label for="">Location</label>

            <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location" value="" >

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

        
      </form>
    </div>
  </div>

</div>
<div class="footer">
    <img class="img2" src="http://localhost/Cropfello/vimukthi/register form/images/register-corner2.png" alt="">
    <img class="img3" src="http://localhost/Cropfello/vimukthi/register form/images/register-corner.png" alt="">
</div>





</body>

</html>
