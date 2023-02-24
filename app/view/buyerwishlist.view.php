<html>
    <head><title>Feed</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerwishlist.css">
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
            <button class="Feed" onclick="document.location='../feed'">Feed</button>
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
        <div class="pro" style="left:621px;width:120px">Added on</div>
        <div class="pro" style="left:821px">Price</div>
        <div class="pro" style="left:1021px"></div>
        <div><img class="Line5" src="<?=ROOT?>/assets/images/pics/Line5.png"></div>
        <?php if ($data) : ?>               
        
        <div class="bid">
            <div class="bid1">
            <?php foreach ($data as $row) : ?> 
                <div class="bid2">
                    <div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>"></div><div><?=$row->item_name?></div><div><?=$row->added_on?>
                                </div><div><?=$row->price?></div><div style="color:#4DEA25"><?=$row->size?>
                                </div><div style="color:#4DEA25"><?=$row->stock_size1?></div><div><img id=<?=$row->post_id?> class="img1" src="<?=ROOT?>/assets/images/pics/delete.png" onclick="wishlist1()"></div>
                    <div style="color:#4DEA25">By <?=$row->first_name?></div>
                </div>
            <?php endforeach; ?>
            </div>
            
        </div>
        
        <?php endif; ?> 
        <div><img class="Line5" style="top:670px" src="<?=ROOT?>/assets/images/pics/Line5.png"></div>
        
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

</script>
</html>