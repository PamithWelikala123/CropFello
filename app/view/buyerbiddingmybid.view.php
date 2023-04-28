

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width"/>
    <title>buyerbidding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerbidding2.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>

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
                  
                  <hr><p>Menu</p><br>
                  <button onclick="document.location='../feed/feed'"><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span> Feed</span></button><br>
                  <button onclick="document.location='../bidding/BuyerBidding'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Bidding</span></button><br>
                  <button onclick="document.location='../wishlists/buyerwishlist'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/heart1.png"><span> Wishlist</span></button><br>
                  <button onclick="document.location='../requests/view1'"><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Requests</span></button><br>
              </div>
              <div class="message">
                  
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
                    <button  onclick="window.location.href = '../bidding/BuyerBidding';">All</button>
                    <button class="active" onclick="window.location.href = '../bidding/BuyerBiddingmybid';">My Bids</button>
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
                                                                            <label><span style="color: #000000;">Carrot&nbsp; </span><?=$row->amount?> <?=$row->amount_type?></label><br>
                                                                            <p><img src="images/map-pin.svg" alt="">&nbsp; <?=$row->city?></p>
                                                                          </div>
 

                                                                          <div class="price">
                                                                            <h5 class="initial-price">RS <?=$row->initial_price?>.00</h5>
                                                                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS <?=$row->current_value?>.00</h3>
                                                                          </div>

                                                                          <div class="exp">
                                                                                <p><span style="font-weight: 600;">EXP :</span>&nbsp;<?=$row->exp?></p>
                                                                              
                                                                                <div class="your-bid-mybid">
                                                                                            <p>Your Bid:&nbsp; <span>RS <?=$row->youramount?>.00</span></p>
                                                                                </div>
                                                                          </div>
                                                                          
                                                                          <div class="days">
                                                                            <p class="remain"><?=$row->remaning?> days remaining</p>
                                                                            <p class="time1" id="post-<?=$row->post_id?>">And <span id="time-<?=$row->post_id?>"></span> minutes</p>
                                                                          

                                                                          
                                                                            <p class="ends-on">Ends on <?=$row->bid_end_date?></p>
                                                                          </div>



                                                                          <div class="bid-now">
                                                                          
                                                                          <button id="<?=$row->post_id?>" class="js-bid-now-btn">Update</button>
                                                                          </div>
                                                              </div>
                                    </div>

                                <div id="modal-<?=$row->post_id?>" class="modal">
                                            <div class="modal-content">
                                                      <div class="modal-header">
                                                  
                                                        <span class="closeBtn">&times;</span>
                                                        <h2>Enter your bid value</h2>
                                                        <p>Current bid value: RS <?=$row->current_value?>.00</p>
                                                        <p>Minimum bid value: RS <?=$row->bid_range?>.00</p>
                                                      </div>
                                                      
                                                      <div class="modal-body" id='modal-body-<?=$row->post_id?>'>
                                                    
                                                                  <form method="post" autocomplete="off" action='biddingbuyer2'>
                                                                      <label> RS: &nbsp;</label>
                                                                    
                                                                    <input type="text" placeholder="Enter your bid" name="bidvalue"><label>&nbsp;.00</label>
                                                                    <input type="hidden" value='<?=$row->post_id?>' name='abc'>
                                                                    <button type="submit" name="submit" id='myButton'>Bid Now</button>


                                                                  </form>
                                                      
                                                      </div>
                                            </div>
                                  </div>
                          

                      
                <?php endforeach; ?>  
                </div>
                
               
               
            </div>
            <?php endif; ?>
        </div>
        
    </div>
    
    
    <?php
      $name = "Bidding"; 
    ?>




<script>   


var modal = null;

const images = document.querySelectorAll('.js-bid-now-btn');
images.forEach(function(image) {
  image.addEventListener('click', function() {
        
    modal = document.getElementById('modal-' + image.id);
    modal.style.display = "block";
    let id = image.id;
    //console.log(image.id);

  });
});

var closeBtns = document.querySelectorAll('.closeBtn');
closeBtns.forEach(function(span) {
  span.onclick = function() {
    var modal = span.closest('.modal');
    modal.style.display = 'none';
  }
});

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

        

    </script> 



    <script type="text/javascript">var name = "<?= $name ?>";</script> 
    <!-- <script type="text/javascript" src="<?=ROOT?>/assets/js/buyerbidding.js"></script> -->



</body>

</html>