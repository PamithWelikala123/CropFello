<!DOCTYPE html>
<html>
  <head>
    <title>
     Feed-View
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/feed.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <style>
     
      </style>
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
                    </div>
              </div>
        
    </div>
    
    

<!-- Modal Section -->

  </body>
  <script>
const images = document.querySelectorAll('.img');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../feed/viewitems?id='+id;
    });
  });

</script>
</html>
