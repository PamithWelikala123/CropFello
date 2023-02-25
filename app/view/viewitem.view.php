<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/viewpost.css">
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?=ROOT?>/assets/js/view.js"></script>
    <title>View Post</title>
</head>
<body>
    <div class="container">
        <!-- <div class="topnav"></div>
        <div class="sidenav">
            <img class="logo"  src="images/logo.png">
            <hr><label class="Menu1">Menu</label>
        </div>
        <div class="main"></div> -->



        <div class="topnav">
                  <?php require APPROOT."/view/searchbarbuyer.php"?>
                  
        </div>
        <div class="logo">
            <img class="logo1"  src="<?=ROOT?>/assets/images/images/logo.png">
        </div>
        <div class="menu">
            <hr><label class="Menu1">Menu</label>
            <div> 
            <button class="Feed" onclick="document.location='../feed'">Feed</button>
                <img class="Feed1"  src="<?=ROOT?>/assets/images/images/feed1.png">
                <button class="Bidding" onclick="document.location='buyerbidding'">Bidding</button>
                <img class="Bidding1"  src="<?=ROOT?>/assets/images/images/Bidding1.png">
                <button class="Wishlist" onclick="document.location='buyerwishlist'" >Wishlist</button>
                <img class="Wishlist1"  src="<?=ROOT?>/assets/images/images/heart1.png">
                <button class="Requests" id="Requests" onclick="document.location='buyerrequest.php'">Requests</button>
                <img class="Requests1"  src="<?=ROOT?>/assets/images/images/flag.png">
</div>
        </div>
        <div class="message">
            <hr><label class="Message1">Message</label>
            <img class="message-bar" src="<?=ROOT?>/assets/images/images/message-bar.png">
        </div>


        <?php if ($data) : ?> 
        <div class="main">
            <div class="user">
                <img src="<?=ROOT?>/assets/images/images/user.jpg" alt="user">
                <label for=""><sup><sup><?=$data['first_name']?><?=$data['last_name']?></sup></sup></label>
                <a href="#"><img class="back" src="<?=ROOT?>/assets/images/images/back_btn.png" alt="back button"></a>
            </div>
            <div class="image">
                <img src="<?=ROOT?>/assets/images/Post-images/<?=$data['image']?>" alt="post view" width = 500px height= 300px margin-top=20%; >
            </div>
            <div class="info">
                <div class="name"> 
                    <h2><?=$data['item_name']?></h2><hr>
                </div>
                <div class="exp">
                    <label for="" style="font-size: small; color: #E43D3D;"><strong><?=$data['exp']?></strong> </label>
                </div>
                <div class="price">
                    <p style="float: right;"><span style="font-size: smaller; color: #FB7A7A; float: right;"><strong> <?=$data['discount']?><?=$data['discount1']?> OFF</strong></span><br>
                        <span style="font-size:larger; color: #0EBC1F;"><strong>1 <?=$data['stock_size1']?></strong></span><span  style="font-size: 50%; color: #B3B3B3; ">/55KG &emsp;</span><span ><strong><?=$data['stock_size1']?> <?=$data['price']?></strong><br></span>
                        <span style="float: right; font-size: 85%; color: #0EBC1F;"><?=$data['city']?></span>
                    </p>
                </div>
                <div class="delivery">
                    <p>Delivery Method *</p>
                    <form>
                        <label class="radio-inline">
                        <input type="radio" name="optradio" checked>&ensp;On my own&emsp;
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="optradio">&ensp;Delivery person</label>
            
                    </form>
                    
                </div>
                <div class="wish">
                <?php if ($data['flag'] == 0): ?>
                          <label for=""><sup> Add to wishlist &nbsp;</sup><img id=<?= $data['post_id']?> onclick="wishlist1()" src="<?=ROOT?>/assets/images/images/bookmark.svg" alt=""></label>
                <?php else: ?>
                         <label for=""><sup> Add to wishlist &nbsp;</sup><img id=<?= $data['post_id']?> onclick="wishlist2()"  src="<?=ROOT?>/assets/images/images/bookmark-active.svg" alt=""></label>
                <?php endif; ?>
                    </div>
                <div class="quantity buttons_added">

                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">

                </div>
                <div class="buy-now">
                    <button>Buy Now</button>
                </div>
                <div class="add-to-cart">
                    <button>Add to cart</button>
                </div>
                <div class="negotiate">
                    <p>Negotiations allowed when buying more than 50% of the stock </p>
                </div>
                <div class="neg-btn">
                    <button>Negotiate</button>
                </div>
            </div>
            <div class="description">
                <h4>description</h4><hr>
                
            </div>

            <?php endif; ?>


        </div>
    </div>
</body>

<script>
function wishlist1(){
const images = document.querySelectorAll('.wish img');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../wishlists/wishlistbutton?id='+id;
    });
  });
}

function wishlist2(){
const images = document.querySelectorAll('.wish img');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../wishlists/wishlistdeleteitem?id='+id;
    });
  });
}

</script>
</html>