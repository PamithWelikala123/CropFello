<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverylogin.css">
    <title>Login</title>
</head>
<body>
        <div class="container">

            <div class="item section-1">
                <p class="phara">Already haven't an account? <b>Register as a</b></p>
                <div>
                    <button class="bayer bt1">Buyer</button>
                </div>
                <div>
                    <button class="seller bt1">Seller</button>
                </div>
                <div>
                    <a href="register.php">
                    <button class="deliverer bt1">Deliverer</button>
                    </a>
                </div>

                <img style="margin-top: 94px;position: absolute" src="<?=ROOT?>/assets/images/rushinpics/pics/Vector.png">
                <img style="margin-top: 134px;position: relative" src="<?=ROOT?>/assets/images/rushinpics/pics/Vector-1.png">


            </div>

            <div class="item section-2">
                <img class="logo" src="<?=ROOT?>/assets/images/rushinpics/pics/logo.png">
                <form method="POST">
                    <div class="email">
                        <label for="email">Email <span style="color:red">&#9913 </span></label><br>
                        <input type="email" id="email" name="email" placeholder="Enter your email address" class="tb1">
                    </div>

                    <div class="password">
                        <label for="password">Password <span style="color:red">&#9913 </span></label><br>
                        <input type="password" id="password" name="password" placeholder="Enter your password" class="tb1">
                    </div>
                    <div class="check-box btn2">
                        <input type="checkbox">
                        <span><b>Remember me</b></span>
                    </div>
                    <div class="Login">
                        <button class="button btn1" type="submit">Login</button>
                    </div>
                </form>    
                <div class="pass">Forgot Password ?</div>

            </div>
        </div>
</body>
</html>