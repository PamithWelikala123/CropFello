<!DOCTYPE html>
<html>
    <head>
        
        <title>
           Editprofile_changepassword
        </title>
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/editprofile_changepassword.css">
        
    </head>
    <body>

        <div class="logo">
               <img class="img1"  src="<?=ROOT?>/assets/images/editprofile/logo.png">
               <img  class="img4" src="<?=ROOT?>/assets/images/editprofile/arrow-left-circle.svg" onclick="document.location='editprofile'">
               
              
        </div>



        <div class="Register">
              <p class="letter">Change Password</p>
        </div>

        <form class="" action="changepassword" method="post" enctype="multipart/form-data">
        <div>
                      <div>
                        <label class="Current-Password-name">Current Password</label>
                        <label class="Current-Password-name1">*</label>
                        <br>
                        <input class="Current-Password" type="password" name="Current-Password">
                      </div>

                      <div>
                        <label class="Password-name">New Passsword</label>
                        <label class="Password-name1">*</label>
                        <br>
                        <input class="Password" type="password" name="Password">
                      </div>

                      <div>
                        <label class="Confirm-Password-name">Confirm Passsword</label>
                        <label class="Confirm-Password-name1">*</label>
                        <br>
                        <input class="Confirm-Password" type="password" name="Confirm-Password">
                      </div>

                      <div>
                          <button class="Register-but" type="submit">Change Password</button>
                      </div>


        </div>
        </form>

        </div>

        <div>
          <img class="img2" src="<?=ROOT?>/assets/images/editprofile/register-corner2.png">
          <img class="img3" src="<?=ROOT?>/assets/images/editprofile/register-corner.png">
        </div>


    </body>

</html>
