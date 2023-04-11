
<html>
    <head><title>Buyerbiddingmybid</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerbiddingmybid.css">

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
        <?php echo '<a href="buyerbidding"> <input type="submit" class="all" value="All"/></a>';?>
        <div><button class="all1">My Bids</button></div>
        <div class="bid">
            <div class="bid1">
            <div class="bidding-post">
                <div class="image">
                  <img src="<?=ROOT?>/assets/images/vimukthibidding/carrot1.jpg">
                </div>
                <div class="info">
                  <div class="name-size-place">
                    <label><span style="color: #000000;">Carrot&nbsp; </span>1 KG</label><br>
                    <p><img src="<?=ROOT?>/assets/images/vimukthibidding/map-pin.svg" alt="">&nbsp; Nuwara Eliya</p>
                  </div>
                  <div class="price">
                    <h5 class="initial-price">RS 430</h5>
                    <h3 class="current-price"><img src="<?=ROOT?>/assets/images/vimukthibidding/green-circle.svg" alt=""> RS 530</h3>
                  </div>
                  <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;16 September 2022</p></div>
                  <div class="days">
                    <p class="remain">8 days remaining</p>
                    <p class="ends-on">Ends on 15 September 2022</p>
                    </div>
                    <div class="your-bid">
                        <p>Your Bid:&nbsp; <span>RS 530.00</span></p>
                    </div>
                  <div class="bid-now">
                    <!-- <button class="cancel">cancel</button> -->
                    <button  class="update" id="openModalBtn">Update</button>
                    
                  </div>
                </div>
              </div>   
            </div>
        </div>

  
