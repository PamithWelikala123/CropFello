<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Forget-Password3
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/forgetpassword3.css">
        <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />
    </head>
    <body>
  <div class="grid">

        <div class="back">
                <div class="mainletter">

                          
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
                  <form method="post">

                      <img class="resetpassword"  src="<?=ROOT?>/assets/images/forgetpassword/reset Password.svg">
                      <label class="tag1">New Password</label>
                      <label class="New_Password">*</label>
                      <input class="search1" type="password" name="newpassword">

                      <label class="tag2">Confirm Password</label>
                      <label class="confirm_Password">*</label>
                      <input class="search2" type="password" name="oldpassword">

                      <button class="button">Reset</button>

                  </form>
                        


                  </div>
        </div>



   </div>



    </body>

</html>
