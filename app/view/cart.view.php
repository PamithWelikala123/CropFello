<!DOCTYPE html>
<html>
  <head>
    <title>
      Cart
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/cart.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
     
      </style>
  </head>
  <body>
    <div style="display : grid; grid-template-columns: 21% 79%;">

          <div class="left-line"> 
                    <img class="Menu"  src="<?=ROOT?>/assets/images/feed/left.png">
                    <img class="logo"  src="<?=ROOT?>/assets/images/feed/logo.png">
                    <img class="line"  src="<?=ROOT?>/assets/images/feed/line.png">
                    <img class="message-bar" src="<?=ROOT?>/assets/images/feed/message-bar.png">
                    <label class="Menu1">Menu</label>
                    

                    <div> 
                      <button class="Feed" onclick="document.location='feed'">Feed</button>
                      <img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png">
                      <button class="Bidding" onclick="document.location='buyerbidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png">
                      <button class="Wishlist" onclick="document.location='buyerwishlist'" >Wishlist</button>
                      <img class="Wishlist1"  src="<?=ROOT?>/assets/images/feed/heart1.png">
                      <button class="Requests" id="Requests" onclick="document.location='buyerrequest'">Requests</button>
                      <img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png">
                    </div>

                    <img class="line1"  src="<?=ROOT?>/assets/images/feed/line.png">
                    <label class="Message">Message</label>
                  

          </div>


          <div style="display : grid; grid-template-rows: 10% 10% 80%; ;">
                  <div class="top-line">
                  <?php require APPROOT."/view/searchbarbuyer.php"?>
          </div>
          
        <div class="pro">Product</div>
        <div class="pro" style="left:621px">Quantity</div>
        <div class="pro" style="left:821px">Units</div>
        <div class="pro" style="left:1021px">Total</div>
        <div><img class="Line5" src="<?=ROOT?>/assets/images/pics/Line5.png"></div>
        <div class="bid">
            <div class="bid1">
                <div class="bid2">
                    <div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div>Carrot</div><div>10</div><div>KG</div><div class="box20" style="text-align:center;font-size:20px">- 2 +</div><div>Rs.600</div><div><button class="btn2" onclick="document.location='checkout'">Check out</button></div><div><img class="img1" src="<?=ROOT?>/assets/images/pics/delete.png"></div>
                    <div style="color:#4DEA25">By Anura</div><div></div><div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Rs.350</div>
                </div>
                <div class="bid2">
                    <div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div>Carrot</div><div>10</div><div>KG</div><div class="box20" style="text-align:center;font-size:20px">- 2 +</div><div>Rs.600</div><div><button class="btn2" onclick="document.location='checkout'">Check out</button></div><div><img class="img1" src="<?=ROOT?>/assets/images/pics/delete.png"></div>
                    <div style="color:#4DEA25">By Mahinda</div><div></div><div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Rs.350</div>
                </div>
                <div class="bid2">
                    <div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div>Carrot</div><div>10</div><div>KG</div><div class="box20" style="text-align:center;font-size:20px">- 2 +</div><div>Rs.600</div><div><button class="btn2" onclick="document.location='checkout'">Check out</button></div><div><img class="img1" src="<?=ROOT?>/assets/images/pics/delete.png"></div>
                    <div style="color:#4DEA25">By Sajith</div><div></div><div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Rs.350</div>
                </div>
                <div class="bid2">
                    <div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div>Carrot</div><div>10</div><div>KG</div><div class="box20" style="text-align:center;font-size:20px">- 2 +</div><div>Rs.600</div><div><button class="btn2" onclick="document.location='checkout'">Check out</button></div><div><img class="img1" src="<?=ROOT?>/assets/images/pics/delete.png"></div>
                    <div style="color:#4DEA25">By Namal</div><div></div><div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Rs.350</div>
                </div>
            </div>
        </div>
        <div><img class="Line5" style="top:670px" src="<?=ROOT?>/assets/images/pics/Line5.png"></div>
        <div class="tot">Rs.1850</div>


          </div>
         
                   

    </div>

    


<!-- Modal Section -->

  </body>
</html>
