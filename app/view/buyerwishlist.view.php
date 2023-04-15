<html>
    <head><title>Feed</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerwishlist.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
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
                
                                <div class="pro">Product</div>
                          <div class="pro" style="left:621px;width:120px">Added on</div>
                          <div class="pro" style="left:821px">Price</div>
                          <div class="pro" style="left:1021px"></div>
                          <div><img class="Line5" src="<?=ROOT?>/assets/images/pics/Line5.png"></div>
                          <?php if (!empty($data))  : ?>               
                          
                          <div class="bid">
                              <div class="bid1">
                              <?php foreach ($data as $row) : ?> 
                                  <div class="bid2">
                                      <div class="carr"><img class="img3" id=<?=$row->post_id?> src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>" onclick="viewitem()"></div><div><?=$row->item_name?></div><div><?=$row->added_on?>
                                                  </div><div><?=$row->price?></div><div style="color:#4DEA25"><?=$row->size?>
                                                  </div><div style="color:#4DEA25"><?=$row->stock_size1?></div><div><img id=<?=$row->post_id?> class="img1" src="<?=ROOT?>/assets/images/pics/delete.png" onclick="wishlist1()"></div>
                                      <div style="color:#4DEA25">By <?=$row->first_name?></div>
                                  </div>
                              <?php endforeach; ?>
                              </div>
                              
                          </div>
                          
                          <?php endif; ?> 
                          <div><img class="Line5" style="top:670px" src="<?=ROOT?>/assets/images/pics/Line5.png"></div>
                 
              </div>
        </div>
    
</div>



<!-- Modal Section -->

</body>



 <script>


function wishlist1(){
const images = document.querySelectorAll('.img1');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../wishlists/wishlistdeleteitem1?id='+id;
    });
  });
}



function viewitem(){
const images = document.querySelectorAll('.img3');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../feed/viewitems?id='+id;
    });
  });
}




</script>
</html>