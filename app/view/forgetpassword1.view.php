<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Forget-Password1
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/forgetpassword1.css">
    </head>
    <body>
  <div class="grid">

        <div class="back">
                <div class="mainletter">
                          <p class="letters">Don't have an account? <a class="para">Register as a</a></p>
                          <a href="<?=ROOT?>/buyersignup">
                          <button class="button-buyer">Buyer</button>
                          </a>
                          <button class="button-seller">Seller</button>
                          <button class="button-deliverer">Deliverer</button>
                          
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
                  <img  class="img4" src="<?=ROOT?>/assets/images/editprofile/arrow-left-circle.svg" onclick="document.location='../login'">

                  <div>
                  <!-- <form action="password-reset-code.php" method="post"> -->
                  <form  method="post">
                      <img class="forgetpassword"  src="<?=ROOT?>/assets/images/forgetpassword/Forgot Password.svg">
                      <label class="tag1">Enter your email address to reset password</label>
                      <input class="search1" type="email" placeholder="  Enter your email address" name="email">
                      <button class="button">Send</button>
                      <label class="tag2">You will receive a verification code your email.Enter your verification code to reset password.</label> 

                  </form>
                        


                  </div>
        </div>



   </div>



    </body>

</html>
