<!DOCTYPE html>
<html>
    <head>
        
        <title>
            login page
        </title>
        <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        
    </head>
    <body>
  <div class="grid">

        <div class="back">
                <div class="mainletter">
                          <p class="letters">Don't have an account? <a class="para">Register as a</a></p>

                         
                          <a href="<?=ROOT?>/sellersignup">
                          <button class="button-seller">Seller/Buyer</button>
                          </a>
                          <a href="<?=ROOT?>/deliverysignup3/register">
                          <button class="button-deliverer">Deliverer</button>
                          </a>
                          
               </div>
            
                <div class="corner">
              
                          <img class="img" src="<?=ROOT?>/assets/images/login page/Vector.png">
                          <img class="img1" src="<?=ROOT?>/assets/images/login page/Vector-1.png">
                 </div>  
        </div>  

    <div>
                  <div>
                         <img class="logo"  src="<?=ROOT?>/assets/images/login page/logo.png">
                  </div>

                  <div>
                  <form method="post" autocomplete="off">

                        <input class="search1" type="textbox" id="email" placeholder="  Enter your email address" name="email">
                        <label class="tag1">Email</label>
                        <input class="search2" type="password" placeholder="  Enter your password" name="password" required>
                        <label class="tag2">Password</label>
                        <i class="fas fa-eye" id="i"></i>
                        <input class="search3" type="checkbox">
                        <label class="tag3">Remember me</label>
                        <button class="button">Login</button>

                        <a class="link" href="login/forgetpassword1">Forgot password</a>

                  </form>
                        


                  </div>
        </div>



   </div>



    </body>
    <script src="<?=ROOT?>/assets/js/pass-show-hide.js"></script>
</html>
