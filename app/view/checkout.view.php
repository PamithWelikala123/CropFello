<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout 1</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/checkout.css"> 
</head>
<body>
    <!-- <img src="assets/sideLogo.svg" alt="cropfello side logo">
    <img src="assets/Vector.svg" alt="vector">
    <img src="assets/Vector-1.svg" alt="Vector-1"> -->
    <div class="container">
        <div class="header">
            <img class="logo" src="<?=ROOT?>/assets/images/images/sideLogo.svg" alt="cropfello side logo">
        </div>
        <div class="heading">
            <h1>Checkout</h1>
            <a href="feed"><img class="back" src="<?=ROOT?>/assets/images/images/back_btn.png" alt="back button"></a>
        </div>
        <div class="sidebar"> 
            <div class="inner_sidebar">
            <!-- <p>Item:       Carrot</p>
            <p>Quantity:   1 KG</p>
            <p>Price:      RS. 530.00</p>
            <p>Delivery:   RS. 350.00</p>
            <div> -->
                
                <table>
                    <tr><td>Item</td><td>:</td><td>Carrot</td></tr>
                    <tr><td>Quantity</td><td>:</td><td>1 KG</td></tr>
                    <tr><td>Price</td><td>:</td><td>RS.530.00</td></tr>
                    <tr><td>Delivery</td><td>:</td><td>RS.350.00</td></tr>
                    <tr></tr><tr></tr><tr></tr>
                    <tr><td><h3>Total</h3></td><td></td><td><h3>RS.880.00</h3></td></tr>
                </table>
                
            </div>
        </div>
        
        <div class="main-content">
            <h3>Deliver To</h3>
            <div class="inner_main">
               <p>Lasal Jayasinghe</p>
                <p>234, Samagi Mawatha,  Malabe, 10123</p><br>
                <p>+94712323145</p><br>
            </div>
                <a href="">Edit</a><br><br><br>
                <p>Pay *</p><br>
            <form>
                <label class="radio-inline">
                <input type="radio" name="optradio" checked>&ensp;Cash on delivery&emsp;
                </label>
                <label class="radio-inline">
                <input type="radio" name="optradio">&ensp;On my own</label>
    
            </form><br><br>
            <button class="mainBtn" onclick="document.location='checkout1'"><strong>Place Order</strong></button>
            
        </div>
        <div class="footer">

            <img class="img2" src="<?=ROOT?>/assets/images/images/bottom2.png">
            <img class="img3" src="<?=ROOT?>/assets/images/images/bottom1.png">
    </div>
    </div>
</body>
</html>