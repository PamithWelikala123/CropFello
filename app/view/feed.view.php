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
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/filter.css">
    <style>
     
      </style>
 </head>
<body>

<?php
$_SESSION['filename'] = 'feed';
?>

    <div class="container">


              <?php
        
            require APPROOT."/view/searchbarbuyer2.php";
          
          ?>


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

            <div class="filter-container">
              <form method="post" action="filter">
                          <div class="filter-inputs">
                                <label>Price: &nbsp;</label>
                                <input type="number" id="min-price" placeholder="min" name="min">
                                <input type="number" id="max-price" placeholder="max" name="max">
                                <Label>Area:&nbsp;</Label>
                                <select id="district" name="district">
                                                                <option value="">All Districts</option>
                                                                <option value="2">Ampara</option>
                                                                <option value="3">Anuradhapura</option>
                                                                <option value="4">Badulla</option>
                                                                <option value="5">Batticaloa</option>
                                                                <option value="6">Colombo</option>
                                                                <option value="7">Galle</option>
                                                                <option value="8">Gampaha</option>
                                                                <option value="9">Hambantota</option>
                                                                <option value="10">Jaffna</option>
                                                                <option value="11">Kalutara</option>
                                                                <option value="12">Kandy</option>
                                                                <option value="13">Kegalle</option>
                                                                <option value="14">Kilinochchi</option>
                                                                <option value="15">Kurunegala</option>
                                                                <option value="16">Mannar</option>
                                                                <option value="17">Matale</option>
                                                                <option value="18">Matara</option>
                                                                <option value="19">Monaragala</option>
                                                                <option value="20">Mullaitivu</option>
                                                                <option value="21">Nuwara Eliya</option>
                                                                <option value="22">Polonnaruwa</option>
                                                                <option value="23">Puttalam</option>
                                                                <option value="24">Ratnapura</option>
                                                                <option value="25">Trincomalee</option>
                                                                <option value="26">Vavuniya</option>
                                </select>
                                <button id="filter-button" type="sumbit">Filter</button>
                          </div>
                </form>
                          <div class="filtered-products"></div>
             </div>








                  <div class="main-content">
                              <?php if ($data) : ?>      
                                <!-- <label>Your District</label>
                                <?php foreach ($data['a'] as $row) : ?>   
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
                                                                                            <?php echo $row->size; ?>
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
                                              <label>All</label> -->
                                            <?php foreach ($data['b'] as $row) : ?>   
                                                      <?php if ($row->user_id!=$_SESSION['USER']->user_id) : ?>      
                                                         
                                                                    <div class="posts">
                                                                          <div class="post" id="post">
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
                                                                                            <?php echo $row->size; ?>
                                                                                                  <?php echo $row->unit; ?>

                                                                                            </div>

                                                                                            <div class="post-discount">

                                                                                            <?php echo $row->discount; ?>
                                                                                            <?php echo $row->discount1; ?>
                                                                                            OFF
                                                                                            </div>

                                                                                  </div>
                                                                                  <div class="post-info">
                                                                                            <div style="color:red" class="post-discount">
                                                                                                  <label>Exp : <?php echo $row->exp; ?></label>

                                                                                            </div>

                                                                                            <div style="color:gray" class="post-discount">

                                                                                            <label><?php echo $row->city; ?></label>
                                                                                            </div>

                                                                                  </div>

                                                                          </div>

                                                                    </div> 
                                                        <?php endif; ?>
                                              <?php endforeach; ?>
                               
                                <?php else : ?>
                                  <div class="no-search">
                                    <p>No search Result <img src="<?=ROOT?>/assets/images/feed/no-search.svg" alt=""> </p>
                                  </div>
                                  
                                  <?php endif; ?>



                    </div>
              </div>
        
    </div>
    
    

<!-- Modal Section -->

  </body>
  <script src="<?=ROOT?>/assets/js/filter.js"></script>
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
