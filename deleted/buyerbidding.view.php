<html>
    <head><title>buyerbidding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerbidding.css">

</head>
    <body>
    <a target="_blank" href="https://icons8.com/icon/3mVlaWDZV99c/rss-a-type-of-web-feed-allows-users-and-applications-to-access-updates"></a>
    
    <div id="modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="closeBtn">&times;</span>
            <h2>Enter your bid value</h2>
            <p>Minimum bid value: RS 630,00</p>
          </div>
          <div class="modal-body">
              <label> RS: &nbsp;</label>
            <input type="text" placeholder="Enter your bid"><label>&nbsp;.00</label>
            <button>Bid Now</button>
          </div>
        </div>
      </div>

    <div class="container">
        <div class="topnav">
          <?php require APPROOT."/view/searchbarbuyer.php"?>
        </div>
        <div class="logo">
            <img class="logo1"  src="<?=ROOT?>/assets/images/vimukthibidding/logo.png">
        </div>
        <div class="menu">
            <hr><label class="Menu1">Menu</label>
            <div> 
                <button class="Feed" onclick="document.location='../feed'">Feed</button>
                <img class="Feed1"  src="<?=ROOT?>/assets/images/vimukthibidding/feed1.png">
                <button class="Bidding" onclick="document.location='bidding.php'">Bidding</button>
                <img class="Bidding1"  src="<?=ROOT?>/assets/images/vimukthibidding//Bidding1.png">
                <button class="Wishlist" id="Wishlist" onclick="document.location='../Wishlists/buyerwishlist'">Wishlist</button>
                <img class="Wishlist1"  src="<?=ROOT?>/assets/images/vimukthibidding/heart1.png">
                <button class="Requests" id="Requests" onclick="document.location='../Requests/view1'">Requests</button>
                <img class="Requests1"  src="<?=ROOT?>/assets/images/vimukthibidding/flag.png">
              </div>
        </div>
        <div class="message">
            <hr><label class="Message1">Message</label>
            <img class="message-bar" src="<?=ROOT?>/assets/images/vimukthibidding/message-bar.png">
        </div>
        <div class="tabs">
          <button class="active" onclick="window.location.href = 'BuyerBidding';">All</button>
          <button onclick="window.location.href = 'BuyerBiddingmybid'">My Bids</button>
      </div>
        <div class="main">
          <?php if ($data) : ?>      
          <?php foreach ($data as $row) : ?>   
          <?php if ($row->seller_id!=$_SESSION['USER']->user_id) : ?> 
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
                  <div class="bid-now">
                    <button id="openModalBtn">Bid Now</button>
                  </div>
                </div>
              </div>
              <?php endif; ?>
              <?php endforeach; ?>
              <?php endif; ?>
        </div>
    </div>
    

      <script>
          // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("openModalBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("closeBtn")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      
      </script>
</body>
</html>