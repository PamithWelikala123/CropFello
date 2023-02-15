<!DOCTYPE html>
<html>
    <head>
        
        <title>
           Seller Register Page
        </title>
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyersignup.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        
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
         <form method="post">

        <div style="display : grid; grid-template-columns: 50% 50%"> 
         <div>
         <?php if(!empty($errors['first_name'])):?>
          <input class="firstname1" type="text" placeholder="  First Name" name="first_name">
         <?php else:?>
          <input class="firstname" type="text" placeholder="  First Name" name="first_name">
         <?php endif;?>
            
         </div>
         <div>
         <?php if(!empty($errors['last_name'])):?>
          <input class="lastname1" type="text" placeholder="  Last Name" name="last_name"> 
         <?php else:?>
          <input class="lastname" type="text" placeholder="  Last Name" name="last_name"> 
         <?php endif;?>
           
         </div>

</div>

<div>
   <label class="Address-name">Address</Address></label>

   <?php if(!empty($errors['address'])):?>
         <label class="Address-name1-1">*</label>
         <?php else:?>
         <label class="Address-name1">*</label>
         <?php endif;?>
   <br>
      <input class="Address" type="text" name="address"> 
</div>

<div style="display : grid; grid-template-columns: 50% 50%">
 
       <div> 
         <label class="Postal-code-name">Postal code</Address></label>
         
         <?php if(!empty($errors['postal_code'])):?>
         <label class="Postal-code-name1-1">*</label>
         <?php else:?>
         <label class="Postal-code-name1">*</label>
         <?php endif;?>
         
         <br>
         <input class="Postal-code" type="text" name="postal_code"> 
       </div>

       <div>
         <label class="City-name">City</Address></label>
         <?php if(!empty($errors['city'])):?>
         <label class="City-name1-1">*</label>
         <?php else:?>
         <label class="City-name1">*</label>
         <?php endif;?>
         <br>
         <input class="City" type="text" name="city">
       </div>
</div>

<div>
      <label class="ContactNo-name">Contact No</Address></label>
    <?php if(!empty($errors['contact_number'])):?>
        <label class="ContactNo-name1-1">*</label>
    <?php else:?>
      <label class="ContactNo-name1">*</label>
    <?php endif;?>
        <br>
        <img class="srilanka"  src="<?=ROOT?>/assets/images/buyersignup page/Sri Lanka.png">
        <label class="ContactNo-name2">|</label>
        <label class="ContactNo-name3">+94</label>
       <input class="ContactNo" type="text" name="contact_number">
</div>


</div>
<div>
 <div>
 
   <label class="Email-name">Email</label>
   <?php if(!empty($errors['email'])):?>
   <label class="Email-name1-1">*</label>
   <?php else:?>
    <label class="Email-name1">*</label>
    <?php endif;?>
   <br>
   <input class="Email" type="email" name="email">
 </div>

 <div>
   <label class="Password-name">Passsword</label>
   <?php if(!empty($errors['password'])):?>
   <label class="Password-name1-1">*</label>
   <?php else:?>
    <label class="Password-name1">*</label>
    <?php endif;?>
   <br>
   <input class="Password" type="password" name="password">
   <i class="fas fa-eye"></i>
 </div>

 <div>
   <label class="Confirm-Password-name">Confirm Passsword</label>
   <?php if(!empty($errors['password'])):?>
   <label class="Confirm-Password-name1-1">*</label>
   <?php else:?>
    <label class="Confirm-Password-name1">*</label>
    <?php endif;?>
   <br>
   <input class="Confirm-Password" type="password" name="confirm_password">
 </div>

 <div>
     <input id="button" class="Register-but" type="submit" value="Register">
     
 </div>
</form>

            </div>
        </div>

        <div>
          <img class="img2" src="<?=ROOT?>/assets/images/buyersignup page/register-corner2.png">
          <img class="img3" src="<?=ROOT?>/assets/images/buyersignup page/register-corner.png">
        </div>


    </body>
    <script src="<?=ROOT?>/assets/js/pass-show-hide.js"></script>
</html>
