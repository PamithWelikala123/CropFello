<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverysignup.css">
    <title>Document</title>
    
</head>
<body>
    <div class="container">

        <div class="item item-1">
            <img class="logo" src="<?=ROOT?>/assets/images/rushinpics/pics/logo.png">
            <a href="Deliverylogin">
            <button class="botn">Login</button>
            </a>
        </div>

        <div class="item item-2">
            <h2 class="h2">Register to <b>CropFello</b></h2>
            <form method="post">
                <div class="name">
                    <label for="name">Name <span style="color:red">&#9913 </span></label><br>
                    <input type="text" name="fname" placeholder="First Name" class="tb1">
                    <input type="text" name="lname" placeholder="Last Name" class="tb3">
                </div>
                <div class="email">
                    <label for="email">Email <span style="color:red">&#9913 </span></label><br>
                    <input type="email" id="email" name="email" class="tb1" placeholder="Enter your Email">
                </div>
                <div class="AA">
                    <label for="name">Available Area <span style="color:red">&#9913 </span></label><br>
                    <select name="country" id="country">
            <option value="">Select a country</option>
            <!-- <?php foreach ($countries as $country) { ?>
                <option value="<?php echo $country['id']; ?>"><?php echo $country['name']; ?></option>
            <?php } ?> -->
        </select>
                

                
                </div>
                <div class="password">
                    <label for="password">Password <span style="color:red">&#9913 </span></label><br>
                    <input type="password" id="password" name="password_hash" class="tb1" placeholder="Enter your Password">
                </div>
                <div class="VN">
                    <label for="number" po>Vehicle Number <span style="color:red">&#9913 </span></label><br>
                    <input type="text" id="number" name="vnum" placeholder="XYZ-1234" class="tb10">
                </div>
                <div class="VT">
                    <label for="name">Vehicle Type <span style="color:red">&#9913 </span></label><br>
                    <!-- <input type="text" id="number" name="name" class="tb1"> -->
                    <!-- <select id="vehicle" class="vtype" >
                        
                    </select> -->
                </div>
                <div class="com_password">
                    <label for="password">Confirm Password <span style="color:red">&#9913 </span></label><br>
                    <input type="password" id="password" name="password" class="tb1" placeholder="Confirm Password">
                </div>
                <div class="V_capacity">
                    <label for="name">Vehicle Capacity <span style="color:red">&#9913 </span></label><br>
                    <!-- <input type="text" id="name" name="name" class="tb1"> -->
                    <select id="vehicle" class="vcap">
                    
                    </select>
                </div>
                <div class="Co_number">
                    <label for="name">Contact Number <span style="color:red">&#9913 </span></label><br>
                    <img class="srilanka"  src="<?=ROOT?>/assets/images/rushinpics/pics/Sri Lanka.png">
                    <!-- <label class="ContactNo-name2">|</label> -->
                    <label class="ContactNo-name3">+94</label>
                    <input type="text" id="number" name="cnum" class="tb4">
                </div>
                <div class="register">
                    <button class="button btn1" type="submit">Register</button>
                </div>

            </form>    
        </div>
        <div class="item item-3">
            <img class="register-corner" src="<?=ROOT?>/assets/images/rushinpics/pics/register-corner.png">
            <img class="register-corner2" src="<?=ROOT?>/assets/images/rushinpics/pics/register-corner2.png">
        </div> 

        <script src="<?=ROOT?>/assets/css/country_city.js"></script>
</body>
</html>
