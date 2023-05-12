<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout 2</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/styles_checkout1.css"> 
</head>
<body>
    <!-- <img src="assets/sideLogo.svg" alt="cropfello side logo">
    <img src="assets/Vector.svg" alt="vector">
    <img src="assets/Vector-1.svg" alt="Vector-1"> -->
    <div class="container">
        <div class="header">
            <img class="logo" src="<?=ROOT?>/assets/images/checkout/sideLogo.svg" alt="cropfello side logo">
        </div>
        <div class="heading">
            <h1>Transaction Info</h1>
            <!--a href="http://localhost/Cropfello/public/feed/checkout1"><img class="back" src="<?=ROOT?>/assets/images/checkout/back_btn.png" alt="back button"></a-->
            <img class="back" onclick="myFunction(document.getElementById('abc').value);" src="http://localhost/cropfello/public/assets/images/checkout/back_btn.png">

            <Script>
              function myFunction(order_code) {
			          window.location.href = "http://localhost/Cropfello/public/feed/checkout4?order_code="+order_code;
		          }
            </Script>
        </div>
        <div class="sidebar"> 
            <div class="inner_sidebar">
            <!-- <p>Item:       Carrot</p>
            <p>Quantity:   1 KG</p>
            <p>Price:      RS. 530.00</p>
            <p>Delivery:   RS. 350.00</p>
            <div> -->
                
                <table>
                    <?php foreach($data['a'] as $dat){ ?>

                    <tr><td>Item</td><td>:</td><td> <?php echo($dat->item_name);  ?></td></tr>
                    <tr><td>Quantity</td><td>:</td><td> <?php echo($dat->qua);  ?> <?php echo($dat->unit);  ?></td></tr>
                    <tr><td>Price</td><td>:</td><td> Rs. <?php echo($dat->price);  ?></td></tr>
                    <tr><td>Delivery</td><td>:</td><td> Rs. <?php echo($dat->del_price);  ?></td></tr>
                    <tr></tr><tr></tr><tr></tr>
                    <tr><td><h3>Total</h3></td><td></td><td><h3> Rs. <?php echo($dat->tot);  ?></h3></td></tr>
                    <input type="hidden" value='<?=$dat->order_code?>' name='abc' id='abc'>
                    <?php }
                    ?>
                </table>
                
            </div>
        </div>
        
        <div class="main-content">
            <h3>Deliver To</h3>
            
            <div class="inner_main">
            <?php foreach($data['b'] as $dat1){ ?>
               <p><?php echo($dat1->first_name);  ?> <?php echo($dat1->last_name);  ?></p>
                <p><?php echo($dat1->address);  ?></p><br>
                <p><?php echo($dat1->contact_number);  ?></p><br>
                <?php }
            ?>
                <p><strong>Seller Info :</strong></p><br>
            <?php foreach($data['c'] as $dat2){ ?>
                <p><?php echo($dat2->first_name);  ?> <?php echo($dat2->last_name);  ?></p>
                <p><?php echo($dat2->address);  ?></p><br>
                <p><?php echo($dat2->contact_number);  ?></p><br>
                <?php }
            ?>
            </div>
            
            
            
            <form method="post">
                <label class="radio-inline">
                <input type="radio" name="op1" value="cash" checked>&ensp;Cash on delivery&emsp;
                </label>
                <label class="radio-inline">
                <input type="radio" name="op1" value="online">&ensp;Online</label>
            </form>
           
            <!--form method="post"-->
            <br><br>
            <button class="mainBtn" onclick="pg(document.getElementById('abc').value);"><strong>Confirm Transaction</strong></button>
            <script src="<?=ROOT?>/assets/js/script.js"></script>
            <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
            <!--/form-->
        </div>
        <div class="footer">

            <img class="img2" src="<?=ROOT?>/assets/images/checkout/bottom2.png">
            <img class="img3" src="<?=ROOT?>/assets/images/checkout/bottom1.png">
    </div>
    </div>
</body>
</html>