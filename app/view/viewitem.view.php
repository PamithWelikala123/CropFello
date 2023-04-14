<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/viewpost.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?=ROOT?>/assets/js/view.js"></script>
    <title>View Post</title>
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
                  <div class="main-content">
                  <?php if ($data) : ?> 
                                    <div class="main-viewitems">
                                        <div class="user-viewitems">
                                            <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$data['image1']?>" alt="user">
                                            <label for=""><sup><sup><?=$data['first_name']?><?=$data['last_name']?></sup></sup></label>
                                            <a href="#"><img class="back-viewitems" src="<?=ROOT?>/assets/images/images/back_btn.png" alt="back button"></a>
                                        </div>
                                        <div class="image-viewitems">
                                            <img src="<?=ROOT?>/assets/images/Post-images/<?=$data['image']?>" alt="post view" width = 500px height= 300px margin-top=20%; >
                                        </div>
                                        <div class="info-viewitems">
                                            <div class="name-viewitems"> 
                                                <h2><?=$data['item_name']?></h2><hr>
                                            </div>
                                            <div class="exp-viewitems">
                                                <label for="" style="font-size: small; color: #E43D3D;"><strong><?=$data['exp']?></strong> </label>
                                            </div>
                                            <div class="price-viewitems">
                                                <p style="float: right;"><span style="font-size: smaller; color: #FB7A7A; float: right;"><strong> <?=$data['discount']?><?=$data['discount1']?> OFF</strong></span><br>
                                                    <span style="font-size:larger; color: #0EBC1F;"><strong>1 <?=$data['stock_size1']?></strong></span><span  style="font-size: 50%; color: #B3B3B3; ">/<?=$data['size']?> KG &emsp;</span><span ><strong><?=$data['stock_size1']?> <?=$data['price']?></strong><br></span>
                                                    <span style="float: right; font-size: 85%; color: #0EBC1F;"><?=$data['city']?></span>
                                                </p>
                                            </div>
                                            <div class="delivery-viewitems">
                                                <p>Delivery Method *</p>
                                                <form>
                                                    <label class="radio-inline-viewitems">
                                                    <input type="radio" name="optradio" checked>&ensp;On my own&emsp;
                                                    </label>
                                                    <label class="radio-inline-viewitems">
                                                    <input type="radio" name="optradio">&ensp;Delivery person</label>
                                        
                                                </form>
                                                
                                            </div>
                                            <div class="wish-viewitems">
                                            <?php if ($data['flag'] == 0): ?>
                                                    <label for=""><sup> Add to wishlist &nbsp;</sup><img id=<?= $data['post_id']?> onclick="wishlist1()" src="<?=ROOT?>/assets/images/images/bookmark.svg" alt=""></label>
                                            <?php else: ?>
                                                    <label for=""><sup> Add to wishlist &nbsp;</sup><img id=<?= $data['post_id']?> onclick="wishlist2()"  src="<?=ROOT?>/assets/images/images/bookmark-active.svg" alt=""></label>
                                            <?php endif; ?>
                                                </div>
                                            <div class="quantity buttons_added">

                                                    <input type="button" value="-" class="minus-viewitems"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text-viewitems" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus-viewitems">

                                            </div>
                                            <div class="buy-now-viewitems">
                                                <button>Buy Now</button>
                                            </div>
                                            <div class="add-to-cart-viewitems">
                                                <button>Add to cart</button>
                                            </div>
                                            <div class="negotiate-viewitems">
                                                <p>Negotiations allowed when buying more than 50% of the stock </p>
                                            </div>
                                            <div class="neg-btn-viewitems">
                                                <button>Negotiate</button>
                                            </div>
                                        </div>
                                        <div class="description-viewitems">
                                            <h4>description</h4><hr>
                                            
                                        </div>

                <?php endif; ?>
                </div>
                    </div>
              </div>
        
    </div>
    
    

<!-- Modal Section -->

  </body>
<script>
function wishlist1(){
const images = document.querySelectorAll('.wish-viewitems img');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../wishlists/wishlistbutton?id='+id;
    });
  });
}

function wishlist2(){
const images = document.querySelectorAll('.wish-viewitems img');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../wishlists/wishlistdeleteitem?id='+id;
    });
  });
}

</script>
</html>