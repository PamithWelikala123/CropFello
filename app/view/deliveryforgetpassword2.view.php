<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Forget-Password2
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/deliveryforgetpassword2.css">
    </head>
    <body>
  <div class="grid">

        <div class="back">
                <div class="mainletter">
                          <p class="letters">Don't have an account? <a class="para" href="<?=ROOT?>/deliverysignup">Register as a Deliverer</a></p>
                          <!-- <a href="<?=ROOT?>/buyersignup">
                          <button class="button-buyer">Buyer</button>
                          </a>
                          <button class="button-seller">Seller</button>
                          <button class="button-deliverer">Deliverer</button> -->
                          
               </div>
            
                <div class="corner">
              
                          <img class="img" src="<?=ROOT?>/assets/images/forgetpassword/Vector.png">
                          <img class="img1" src="<?=ROOT?>/assets/images/forgetpassword/Vector-1.png">
                 </div>  
          </div>  

        <div>
                  <div>
                         <img class="logo"  src="<?=ROOT?>/assets/images/forgetpassword/logo.png">
                  </div>
                  <img  class="img4" src="<?=ROOT?>/assets/images/editprofile/arrow-left-circle.svg" onclick="document.location='deliveryforgetpassword1'">


                  <div>
                  <form method="post">

                      <img class="forgetpassword"  src="<?=ROOT?>/assets/images/forgetpassword/Forgot Password.svg">
                      <label class="tag1">Enter verification code</label>
                      <input class="search1" type="text" name="token">
                      <button class="button">Send</button>

                  </form>
                        


                  </div>
        </div>



   </div>



    </body>

</html>
