<html>
    <head><title>buyerbidding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerbidding.css">

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
          
          <div><button class="all">All</button></div>
        <?php echo '<a href="buyerbiddingmybid"> <input type="submit" class="all1" value="My Bids"/></a>';?>
        <div class="bid">
            <div class="bid1">
                <div class="bid2"><div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div style="font-size:30px">carrot</div><div style="font-size:35px;color:#4DEA25">1KG</div><div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">Rs.430</div>
                    <div>Nuwara Eliya</div><div></div><div style="font-size:35px">Rs.530</div>
                    <div style="color:#E43D3D">Exp: 16/10/2022</div><div></div><div style="color:#4DEA25">8 days remaining</div>
                    <div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Ends on: 15/10/2022</div>
                    <div></div><div></div><div><button class="btn2" id="btn2">Bid now</button></div>
                </div>
                <div class="bid2"><div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div style="font-size:30px">carrot</div><div style="font-size:35px;color:#4DEA25">1KG</div><div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">Rs.430</div>
                    <div>Nuwara Eliya</div><div></div><div style="font-size:35px">Rs.530</div>
                    <div style="color:#E43D3D">Exp: 16/10/2022</div><div></div><div style="color:#4DEA25">8 days remaining</div>
                    <div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Ends on: 15/10/2022</div>
                    <div></div><div></div><div><button class="btn2" id="btn2">Bid now</button></div>
                </div>
                <div class="bid2"><div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div style="font-size:30px">carrot</div><div style="font-size:35px;color:#4DEA25">1KG</div><div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">Rs.430</div>
                    <div>Nuwara Eliya</div><div></div><div style="font-size:35px">Rs.530</div>
                    <div style="color:#E43D3D">Exp: 16/10/2022</div><div></div><div style="color:#4DEA25">8 days remaining</div>
                    <div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Ends on: 15/10/2022</div>
                    <div></div><div></div><div><button class="btn2" id="btn2">Bid now</button></div>
                </div>
                <div class="bid2"><div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/pics/carrot.jpg"></div><div style="font-size:30px">carrot</div><div style="font-size:35px;color:#4DEA25">1KG</div><div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">Rs.430</div>
                    <div>Nuwara Eliya</div><div></div><div style="font-size:35px">Rs.530</div>
                    <div style="color:#E43D3D">Exp: 16/10/2022</div><div></div><div style="color:#4DEA25">8 days remaining</div>
                    <div></div><div></div><div style="color:rgba(0, 0, 0, 0.4)">Ends on: 15/10/2022</div>
                    <div></div><div></div><div><button class="btn2" id="btn2">Bid now</button></div>
                </div>
            </div>


        </div>

 <div class="form-popup" id="myForm">
 <form class="" action="" method="post" enctype="multipart/form-data">
    <h5 style="text-align: center;">Enter your bid value</h5>

    <div class="ru">Rs.</div>
    <div class="ru" style="left:285px">.00</div>
    <input class="box5" type="text" placeholder="Bid value" name="email" required>

    <h5><div><button type="submit" class="btn3">Bid now</button></div></h5>
    <button type="button" style="top:140px;width:90px;height:40px;left:420px;background:#E43D3D" class="btn3" onclick="closeForm()">Close</button>
  </form>
</div>

<script src="<?=ROOT?>/assets/js/bidnow.js"></script>
<!-- <script>
    function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script> -->