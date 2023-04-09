<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buyerbidding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerbidding2.css">
</head>
<body>



    <div class="container">
            <?php require APPROOT."/view/searchbarbuyer2.php"?>

        <div class="content">
            <div class="leftbar">
                <!-- <a href="#home"><i class="fa fa-rss"></i> Feed</a>
                <a href="#services"><i class="fa fa-dollar"></i> Bidding</a>
                <a href="#clients"><i class="fa fa-bookmark-o"></i> Wishlist</a>
                <a href="#contact"><i class="fa fa-flag-o"></i> Requests</a> -->

                <div class="menu">
                  <!-- <hr><label >Menu</label><br> -->
                  <hr><p>Menu</p><br>
                  <button><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span> Feed</span></button><br>
                  <button><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Bidding</span></button><br>
                  <button><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/heart1.png"><span> Wishlist</span></button><br>
                  <button><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Requests</span></button><br>
              </div>
              <div class="message">
                  <!-- <hr><label>Message</label> -->
                  <hr><p>Message</p><br>
                  <!-- <img class="message-bar" src="images/message-bar.png"> -->
                  <div class="message-box">
                       <?php require APPROOT."/controller/Chat.php";
                       $userController = new Chat();
                       $userController->viewperson();
                       
                       ?>
                          
                  

                  

                  </div>
              </div>

            </div>
            <div class="main">
                <div class="page-selector">
                    <button class="active" onclick="window.location.href = 'index.html';">All</button>
                    <button onclick="window.location.href = 'index2.html';">My Bids</button>
                </div>
                <?php if($data) :    ?>   
                <div class="main-content">

                <?php foreach ($data as $row) : ?>
                    <div class="bidding-post">
                        <div class="image">
                          <img src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                        </div>
                        <div class="info">
                          <div class="name-size-place">
                            <label><span style="color: #000000;"><?=$row->item_name?>&nbsp; </span><?=$row->amount?> <?=$row->amount_type?></label><br>
                            <p><img src="images/map-pin.svg" alt="">&nbsp; <?=$row->city?></p>
                          </div>
                          <div class="price">
                            <h5 class="initial-price">RS <?=$row->initial_price?></h5>
                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS <?=$row->current_value?></h3>
                          </div>
                          <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;<?=$row->exp?></p></div>
                          <div class="days">
                            <p class="remain"><?=$row->remaning?> days remaining</p>
                            <p class="ends-on">Ends on <?=$row->bid_end_date?></p>
                          </div>

                          <div class="bid-now">
                            <button id="openModalBtn">Bid Now</button>
                          </div>
                        </div>
                      </div>

                      <div id="modal" class="modal">
                            <div class="modal-content">
                              <div class="modal-header">
                                <span class="closeBtn">&times;</span>
                                <h2>Enter your bid value</h2>
                                <p>Current bid value: RS <?=$row->current_value?></p>
                                <p>Minimum bid value: RS <?=$row->bid_range?></p>
                              </div>
                              <div class="modal-body">
                                  <label> RS: &nbsp;</label>
                                <input type="text" placeholder="Enter your bid"><label>&nbsp;.00</label>
                                <button>Bid Now</button>
                              </div>
                            </div>
                          </div>

                      
                    <?php endforeach; ?>  
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
    </div>

    <?php
      $myVariable = "Hello World";
      $myVariableJSON = json_encode($myVariable);
    ?>


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
    <script src="<?=ROOT?>/assets/js/chat_users.js"></script> 
</body>

</html>