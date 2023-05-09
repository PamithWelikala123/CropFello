<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/waiting.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>


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



    <div class="container">
        <div class="topnav">
            <div class="logo">
                <img src="<?=ROOT?>/assets/images/cart/logo.png" altba="">
            </div>
            <div class="topnav-options">
                <!-- <a class="active" href="#home">Home</a> -->
                <a href="#orders" id="my-orders">My Orders</a>
                <a href="#cart"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
                <a href="#notifi"><i class="fa fa-bell" style="font-size:18px"></i></a>
                <!-- <a href="#profile"> -->
                    <img src="<?=ROOT?>/assets/images/cart/user.jpg" alt=""> 
                <!-- </a> -->
            </div>
                <div class="search-container">
                  <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
          </div>
        <div class="content">
            <div class="leftbar">
                <!-- <a href="#home"><i class="fa fa-rss"></i> Feed</a>
                <a href="#services"><i class="fa fa-dollar"></i> Bidding</a>
                <a href="#clients"><i class="fa fa-bookmark-o"></i> Wishlist</a>
                <a href="#contact"><i class="fa fa-flag-o"></i> Requests</a> -->

                <div class="menu">
                  <!-- <hr><label >Menu</label><br> -->
                  <hr><p>Menu</p><br>
                  <button><img class="Feed1"  src="images/feed1.png"><span> Feed</span></button><br>
                  <button><img class="Bidding1"  src="images/Bidding1.png"><span> Bidding</span></button><br>
                  <button><img class="Bidding1"  src="images/wishlist1.png"><span> Wishlist</span></button><br>
                  <button><img class="Requests1"  src="images/flag.png"><span> Requests</span></button><br>
              </div>
              <div class="message">
                  <!-- <hr><label>Message</label> -->
                  <hr><p>Message</p><br>
                  <!-- <img class="message-bar" src="images/message-bar.png"> -->
                  <div class="message-box">

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>

                    </div>

                    <div class="message-footer">
                      <button>All Messages</button>
                    </div>

                  </div>
              </div>

            </div>
            <div class="main">
                <!-- <div class="page-selector">
                    <button class="active" onclick="window.location.href = 'index.html';">All</button>
                    <button onclick="window.location.href = 'index2.html';">My Bids</button>
                </div> -->
                
                <div class="main-content">
                <?php if(isset($data['a']) && !empty($data['a'])) {?>
                    <?php foreach($data['a'] as $dat){ ?>
                    <div class="post">
                        <div class="left">
                          <div class="upper-left">
                          
                            <img src="<?=ROOT?>/assets/images/Post-images/<?php echo($dat->image);  ?>" alt="Product Image">
                          </div>
                          
                          <div class="upper-right">
                            <h2><?php echo($dat->item_name);  ?><span class="green">&nbsp; <?php echo($dat->qua);  ?> <?php echo($dat->unit);  ?></span></h2>
                            <p>RS. <?php echo($dat->price);  ?></p>
                          </div>
                          <div class="lower">
                            <p>Placed On: <?php echo($dat->placed_on);  ?></p>
                            <p class="exp">EXP: <?php echo($dat->exp);  ?></p>
                          </div>
                          
                        </div>
                        <div class="right">
                          <h2>Delivery status: <span class="green">Pending</span></h2>
                          <div class="buttons">
                            <button class="request-deliverer" id="openModalBtn">Request Deliverer</button>
                            <button class="proceed-to-checkout" disabled>Proceed to checkout</button>
                          </div>
                          
                        </div>
                      </div>
                      <?php }
                        ?>

<?php } else {?>
  <div class="total-price">
                      <span></span>
                    </div>
                  <?php } ?>
                </div>
                
            </div>
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