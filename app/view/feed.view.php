<!DOCTYPE html>
<html>
  <head>
    <title>
     Feed-View
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/feed.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
     
      </style>
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
                      <button class="Bidding" onclick="document.location='bidding/BuyerBidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png">
                      <button class="Wishlist" onclick="document.location='wishlists/buyerwishlist'" >Wishlist</button>
                      <img class="Wishlist1"  src="<?=ROOT?>/assets/images/feed/heart1.png">
                      <button class="Requests" id="Requests" onclick="document.location='requests/view1'">Requests</button>
                      <img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png">
                    </div>

                    <img class="line1"  src="<?=ROOT?>/assets/images/feed/line.png">
                    <label class="Message">Message</label>
                  

          </div>


          <div style="display : grid; grid-template-rows: 10% 10% 80%; ;">
                  <div class="top-line">
                  <?php require APPROOT."/view/searchbarbuyer.php"?>
                  </div>


        
                  <div class="Scroll-bar">
                  <?php if ($data) : ?>      
                       <?php foreach ($data as $row) : ?>   
                        <?php if ($row->user_id!=$_SESSION['USER']->user_id) : ?>       
                           <div class="posts">
                                <div class="post">
                                        <div class="post-preview">
                                         
                                        <img class="img"  id="<?=$row->post_id?>" src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>" width = 200px height= 200px; title="<//?php //echo $row['image']; ?>">
                                          
                                      </div>
                                        
                                        <div class="post-info">
                                          <div class="post-type">
                              
                                             <?php echo $row->item_name ?> 
                                             
                                          </div>
                                          <div class="post-price">
                                                Rs.
                                                <?php echo $row->price; ?>
                                          </div>

                                      </div>
                                        <div class="post-info">
                                          <div class="post-size">
                                               1
                                                <?php echo $row->unit; ?>

                                          </div>
                                          <div class="post-discount">

                                          <?php echo $row->discount; ?>
                                          <?php echo $row->discount1; ?>
                                          OFF
                                          </div>

                                        </div>

                                </div>

                           </div> 
                           <?php endif; ?>
                          <?php endforeach; ?>
                          <?php endif; ?>
 
                  </diV>
                  
    


          </div>
         
                   

    </div>

    


<!-- Modal Section -->

  </body>
  <script>
const images = document.querySelectorAll('.img');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = 'feed/viewitems?id='+id;
    });
  });

</script>
</html>
