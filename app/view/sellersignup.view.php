<!DOCTYPE html>
<html>
    <head>
        
        <title>
           Seller Register Page
        </title>
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyersignup.css">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
        <script src="<?=ROOT?>/assets/js/map.js"></script> 
        <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        
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
                  <?php if(empty($errors['first_name'])):?>
                  <input type="text" id="firstname"  placeholder="First Name" name="first_name">
                  <?php else:?>
                    <input style="border: 1px solid #FB7A7A;" type="text" id="firstname" name="first_name">
                  <?php endif;?>
                </div>

                <div class="col-50">
                
                  <label for="lastname">&nbsp;</label>
                  <?php if(empty($errors['last_name'])):?>
                    <input type="text" id="lastname" name="last_name" placeholder="Last Name">
                  <?php else:?>
                  <input style="border: 1px solid #FB7A7A;" type="text" id="lastname" name="last_name" placeholder="Last Name">
                  <?php endif;?>
                </div>
              </div>
        
            <label for="adr">Address</label>
                  <?php if(empty($errors['address'])):?>
                          <input type="text" id="adress" name="address">
                  <?php else:?>
                        <input style="border: 1px solid #FB7A7A;" type="text" id="adress" name="address">
                  <?php endif;?>
            

            <div class="row">
              <div class="col-25">
                
                <label for="city">District</label>
                      <?php if(empty($errors['city'])):?>
                      <input type="text" id="city" name="district">
                      <?php else:?>
                        <input style="border: 1px solid #FB7A7A;" type="text" id="city" name="city">
                      <?php endif;?>
                
                    </div>

                    <div class="col-25">
                    <label for="contact">Contact No</label>
                    <?php if(empty($errors['contact_number'])):?>

                      <input type="text" id="contact" name="contact_number">
                      <?php else:?>
                        <input style="border: 1px solid #FB7A7A;" type="text" id="contact" name="contact_number">
                        <?php endif;?>
                    </div>
              
            </div>

            <div class="row">
                      <div class="col-25">
                      <?php if(!empty($errors['city'])):?>
                        <P><?php echo $errors['city'] ?></P>
                      <?php endif;?>
                      </div>

                      <div class="col-25">
                      <?php if(!empty($errors['contact_number'])):?>
                        <P><?php echo $errors['contact_number'] ?></P>
                      <?php endif;?>
                      </div>
          </div>  
          </div>
          

          <div class="col-50">

            <label for="">Location</label>
            <?php if(empty($errors['location'])):?>
            <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location" >
            <?php else:?>
              <input style="border: 1px solid #FB7A7A;" type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location">
            <?php endif;?>
            
            

            <input type="hidden" name="p-latitude" id="p-latitude" value="">
            <input type="hidden" name="p-longitude" id="p-longitude" value="">
            <input type="hidden" id="city1" name="city" value="">
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
                    <button type="submit" class="btn"><span>Next</span></i></button>
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
    <script src="<?=ROOT?>/assets/js/pass-show-hide.js"></script>
</html>
