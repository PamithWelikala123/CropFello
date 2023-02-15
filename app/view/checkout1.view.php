<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout 2</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/checkout1.css"> 
</head>
<body>
    <div class="container">
        <div class="header">
            <img class="logo" src="<?=ROOT?>/assets/images/images/sideLogo.svg" alt="cropfello side logo">
        </div>
        <div class="heading">
            <a href="checkout"><img class="back" src="<?=ROOT?>/assets/images/images/back_btn.png" alt="back button"></a>
        </div>
        <div class="main-content">   
            <div class="center">
                <div>
                    <h3>Credit or Debit card</h3>
                    <div class="cards">
                        <img src="<?=ROOT?>/assets/images/images/master.png" alt="master card logo">
                        <img src="<?=ROOT?>/assets/images/images/visa.png" alt="visa card logo">
                    </div>
                </div>
                <br><br>
                <div class="center-content">
                    <label for="">Name on card *</label><br>
                    <input type="text" class="big-box"><br>
                    <div class="exp-cvv">
                        <div class="exp">
                            <label for="">Expire Date *</label><br>
                            <input type="text" class="small-box" placeholder="MM">
                            <label for="">/</label>
                            <input type="text" class="small-box" placeholder="YY"><br>
                        </div>
                        <div  align="right" class="cvv">
                            <label for="">CVV*</label><br>
                            <input type="text" class="small-box"><br>
                        </div>

                    </div>
                    
                   <label for="" class="check"><br><br>
                    <input type="checkbox" name="remember"> Remember me</label></label><br><br>
                    <button class="mainBtn" onclick="document.location='checkout2'"><strong>Purchase Now</strong></button>
                </div>             
            </div>
            <div class="footer">

                <img class="img2" src="<?=ROOT?>/assets/images/images/bottom2.png">
                <img class="img3" src="<?=ROOT?>/assets/images/images/bottom1.png">
        </div>
    </div>
</body>
</html>