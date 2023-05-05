<!DOCTYPE html>
<html>
<head>
    <title>Location Picker</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
    <script src="<?=ROOT?>/assets/js/map.js"></script> 


    <style>
     #map {
            width: 100%;
            height: 180px;
            border-radius: 10px;
        }
        .map-container{
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }





        body {
    font-family: poppins;
    font-size: 17px;
    padding: 8px;
  }
  
  * {
    box-sizing: border-box;
  }
  
  .row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
  }
  
  .col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
  }
  
  .col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
  }
  
  .col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
  }
  
  .col-25,
  .col-50,
  .col-75 {
    padding: 0 16px;
  }
  
  .container {
    padding: 5%;
  }
  
  input[type=text] ,  input[type=email] {
    width: 100%;
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 10px;
  }
  
  label {
    margin-bottom: 10px;
    display: block;
    font-size: medium;
    font-weight: 500;
  }
  

  /* .btn {
    background-color: white;
    color: #4DEA25;
    padding: 12px;
    margin: 10px 0;
    border: none;
    border-radius: 10px;
    width: 25%;
font-weight: 550;
    cursor: pointer;
    font-size: 17px;
   
    float: right;
  }
  
  .btn:hover {
    background-color: #4DEA25;
    color: black;
  } */
  

  .btn {
  border-radius: 4px;
  background-color: #ffffff;
  border: none;
  color: #000000;
  text-align: center;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  padding: 12px;
    margin: 10px 0;
    border: none;
    width: 25%;
font-weight: 550;
    cursor: pointer;
    font-size: 17px;
   
    float: right;
}

.btn span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.btn span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.btn:hover span {
  padding-right: 25px;
}

.btn:hover span:after {
  opacity: 1;
  right: 0;
} 


 img{
    width: 200px;
    display: inline-block;
 }
.login{
    float:right ;
    margin-top: 1%;
    margin-right: 10%;
    font-weight: 600;
    cursor: pointer;
 }

/* .img2{
 position: absolute;
 width: 100%;
 height: 80px; 
 bottom: 0px;
 left: 0px;
}

.img3{
position: absolute;
height: 80px;
bottom: 0px;
width: 100%;
left: 0px;
} */

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;

 }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
  @media (max-width: 800px) {
    .row {
      flex-direction: column;
    }
    .col-25 {
      margin-bottom: 20px;
    }
    .img2{
        display: none;
       }
       
       .img3{
        display: none;
       }
       
  }

  @media (min-width: 800px) {

    .img2{
        position: absolute;
        width: 100%;
        height: 80px; 
        bottom: 0px;
        left: 0px;
       }
       
       .img3{
       position: absolute;
       height: 80px;
       bottom: 0px;
       width: 100%;
       left: 0px;
       }
       
  }

 
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
