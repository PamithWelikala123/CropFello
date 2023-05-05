<!DOCTYPE html>
<html>
    <head>
        
        <title>
           Buyer Register Page
        </title>
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyersignup.css">
        
    </head>
    <body>

        <div class="logo">
               <img class="img1"  src="<?=ROOT?>/assets/images/buyersignup page/logo.png">
               
        </div>
        <img  class="img4" src="<?=ROOT?>/assets/images/editprofile/arrow-left-circle.svg" onclick="document.location='login'">
        
        <div class="Register">
              <p class="letter">Register to CropFello</p>
        </div> 

        <div style="display : grid; grid-template-columns: 60% 40%">
              <div>

                     <div style="display : grid; grid-template-columns: 50% 50%"> 

                              <div>
                                <input class="firstname" type="textbox" placeholder="  First Name"> 
                              </div>
                              <div>
                                <input class="lastname" type="textbox" placeholder="  Last Name"> 
                              </div>

                     </div>
                    
                     <div>
                        <label class="Address-name">Address</Address></label>
                        <label class="Address-name1">*</label>
                        <br>
                           <input class="Address" type="textbox"> 
                     </div>
                     
                     <div style="display : grid; grid-template-columns: 50% 50%">
                      
                            <div> 
                              <label class="Postal-code-name">Postal code</Address></label>
                              <label class="Postal-code-name1">*</label>
                              <br>
                              <input class="Postal-code" type="textbox"> 
                            </div>

                            <div>
                              <label class="City-name">City</Address></label>
                              <label class="City-name1">*</label>
                              <br>
                              <input class="City" type="textbox">
                            </div>
                     </div>

                     <div>
                           <label class="ContactNo-name">Contact No</Address></label>
                            <label class="ContactNo-name1">*</label>
                             <br>
                             <img class="srilanka"  src="<?=ROOT?>/assets/images/buyersignup page/Sri Lanka.png">
                             <label class="ContactNo-name2">|</label>
                             <label class="ContactNo-name3">+94</label>
                            <input class="ContactNo" type="textbox">
                     </div>


              </div>
              <div>
              
                      <div>
                        <label class="Email-name">Email</label>
                        <label class="Email-name1">*</label>
                        <br>
                        <input class="Email" type="textbox">
                      </div>

                      <div>
                        <label class="Password-name">Passsword</label>
                        <label class="Password-name1">*</label>
                        <br>
                        <input class="Password" type="password">
                      </div>

                      <div>
                        <label class="Confirm-Password-name">Confirm Passsword</label>
                        <label class="Confirm-Password-name1">*</label>
                        <br>
                        <input class="Confirm-Password" type="password">
                      </div>

                      <div>
                          <button class="Register-but">Register</button>
                      </div>


            </div>
        </div>

        <div>
          <img class="img2" src="<?=ROOT?>/assets/images/buyersignup page/register-corner2.png">
          <img class="img3" src="<?=ROOT?>/assets/images/buyersignup page/register-corner.png">
        </div>


    </body>

</html>
