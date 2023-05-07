
<!DOCTYPE html>
<html>
  <head>
    <title>
     Requests
    </title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
    <script src="<?=ROOT?>/assets/js/map.js"></script> 
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerrequest.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/requestcrop.css">
    <style>
     
      </style>
  </head>
  <body onload="initMap()">



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
                                                                <img class="plus"  id="plus" src="<?=ROOT?>/assets/images/buyerrequest/plus.png">
                                                                      <?php if($data) :    ?>
                                                                              <?php foreach ($data as $row) :
                                                                                ?>



<div class="post">
                                  
                                            <div class="post-header">
                                              <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt="Profile Picture" class="post-profile-pic">
                                                  <div class="post-header-info">
                                                    <div class="post-header-name">
                                                      <?php echo $row->first_name ?>
                                                       <?php echo $row->last_name ?>
                                                      </div>
                                                    <div class="post-header-date">Posted on May 5, 2023</div>
                                                  </div>
                                            </div>


                                            <div class="post-content">
                                              <div class="post-description">
                                                
                                                <table class="info-table">
                                                  <tr>
                                                    <td class="left-column">Item:</td>
                                                    <td class="right-column"><?php echo $row->item_name ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">Amount:</td>
                                                    <td class="right-column"><?php  echo $row->amount ?><?php  echo $row->unit; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">Before:</td>
                                                    <td class="right-column"><?php  echo $row->date ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">To:</td>
                                                    <td class="right-column"><?php  echo $row->city; ?></td>
                                                  </tr>
                                                </table>
                                                
                                              </div>


                                              <div class="post-button post-buttons">
                                                <button class="approved-button" id="<?=$row->post_id?>" >Update</button>

                                                <button class="delete-button" id="<?=$row->post_id?>" onclick="delete1()" >Delete&nbsp;
                                                  <i class='fa fa-trash'></i></button>
                                              </div>


                                            </div>
                                </div>

                                                                                    
                                                                            <?php endforeach; ?>
                                                                            
                                                                          <?php endif;?>
                                                                            
                                                  
                                                                    </div>


                                                            
                                                                    
                                                      


                                                            </div>
                                                          
                                                                    

                                                      </div>
                                                  
                                                      <?php
                                                      $crop_list='';
                                                      $item = new item;
                                                      $rows3 = $item->findAll();
                                                      foreach($rows3 as $result){
                                                        $crop_list .="<option value=\"{$result->item_id}\">{$result->name}</option>";

                                                      }
                                                      ?>
<!-- 
                                                    <div class="bg-modal-4">
                                                                      <div class="modal-contents1">
                                                                      <form class="" action='addRequestItem' method="post" enctype="multipart/form-data">
                                                                      <label class="tag1">Request a Crop</label>
                                                                        <div class="close">+</div>
                                                                        <img src="https://richardmiddleton.me/comic-100.png" alt="">


                                                                        <label class="tag2">item name</label>
                                                                        <label class="tag3">*</label>
                                                                        <form action="">
                                                                        <select  name="item_id" id="item_id" type="text" onkeyup="GetDetail(this.value)" value="" class="item_id" onchange="fetchemp()">
                                                                                                                                                    <?php echo $crop_list?> 
                                                                                                                                          </select>
                                                                          
                                                                        <label class="tag4">Amount</label>
                                                                        <label class="tag5">*</label>
                                                                        <input class="Amount" type="text" name="amount" >
                                                                          <select class="unit" name="unit" id="unit" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                                                                                              <option value="KG">KG</option>
                                                                                                                                                              <option value="G">G</option>
                                                                                                                                                              <option value="TREES">TREES</option>
                                                                                                                                                              <option value="ACRES">ACRES</option>
                                                                                                                                                            </select> 
                                                                          
                                                                          <label class="tag6">Before</label>
                                                                          <label class="tag7">*</label>
                                                                          <input  class="date" type="date" name="date" >
                                                                          <label class="tag8">Address</label>
                                                                          <label class="tag9">*</label>
                                                                          <input  class="Address" type="text" name="address" >
                                                                          <label class="tag10">Postal Code</label>
                                                                          <label class="tag11">*</label>
                                                                          <input class="postal-code" type="text" name="postal_code" >
                                                                          <label class="tag12">City</label>
                                                                          <label class="tag13">*</label>
                                                                          <input class="city" type="text" name="city" >
                                                                          <label class="tag14">Contact Number</label>
                                                                          <label class="tag15">*</label>
                                                                          <input class="contact" type="type" name="contact" >
                                                                          <button class="button" type="sumbit" name="submit">Send</button>
                                                                      </form>

                                                                      </div>
                                                  </div>        -->














<div id="modal" class="requestcrop-modal">
        <div class="requestcrop-modal-content">
          <div class="requestcrop-modal-header">
            <span class="requestcrop-closeBtn">&times;</span>
            <h2>Request Crop</h2>
          </div>
          <div class="requestcrop-modal-body">
        


            <div class="requestcrop-row">
                <div class="requestcrop-col-75">
                  <div class="requestcrop-container">
                    <form action="/action_page.php">
                    
                      <div class="requestcrop-row">
                        <div class="requestcrop-col-50">
                          <div class="requestcrop-row">
                            <label for="email">Item Name</label>
                            <input type="text" id="password" name="password" >
                            </div>
                      
                          
              
                          <div class="requestcrop-row">
                            <div class="requestcrop-col-75">
                              <label for="city">Quantity</label>
                              <input type="text" id="city" name="city">
                            </div>
                            <div class="requestcrop-col-25">
                                <label for="city">&nbsp;</label>
                                <select name="cars" id="cars">
                                    <option value="volvo">Kg</option>
                                    <option value="saab">g</option>
                                    <option value="mercedes">Tree(s)</option>
                                    <option value="audi">Acre(s)</option>
                                </select>
                            </div>

                          </div>

                          <div class="requestcrop-row">
                            <label for="email">Before</label>
                            <input type="text" id="password" name="password" >
                            </div>
                      
                          
              
                          <div class="requestcrop-row">
                            
                            <div class="requestcrop-col-50">
                              <label for="postalcode">Contact No</label>
                              <input type="text" id="postalcode" name="postalcode" >
                            </div>

                            <div class="requestcrop-col-50">
                              <!-- <label for="city">City</label>
                              <input type="text" id="city" name="city"> -->
                            </div>

                          </div>
                          
                        </div>
                        
              
                        <div class="requestcrop-col-50">
                            <label for="">Location</label>
                            <input type="text" id="pickuplocation" name="pickuplocation" placeholder="Select and fetch your location" >
                
                            <input type="hidden" name="p-latitude" id="p-latitude" value="">
                            <input type="hidden" name="p-longitude" id="p-longitude" value="">
                            <input type="hidden" id="city1" name="city" value="">
                <!-- 
                            <input type="text" id="destination" name="destination" placeholder="From Where journey End...?"  value=""> -->
                <!-- 
                            <input type="hidden" name="d-latitude" id="d-latitude" value="">
                            <input type="hidden" name="d-longitude" id="d-longitude" value="">
                
                
                
                            <input type="hidden" name="distance" id="distance" value="">
                            <input type="hidden" name="duration" id="duration" value=""> -->
                
                            <div class="requestcrop-map-container">
                                <div id="map"></div>
                            </div>
                            <div class="requestcrop-row">
                                <div class="requestcrop-col-25">
                                    <!-- <input type="submit" value="Next" class="requestcrop-btn" > -->
                                    <button type="submit" class="requestcrop-btn"><span>Next </span></i></button>
                                  </div>
                                
                            </div>
                          </div>
                        </div>
                        
                      </div>
              
                      
                    </form>
                  </div>
                </div>
              
              </div>



          </div>
        </div>

   

      





              </div>
          </div>
    
</div>



<!-- Modal Section -->

</body>


<script>
        // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("plus");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("requestcrop-closeBtn")[0];
      
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
  <!-- <script src="<?=ROOT?>/assets/js/wishlist.js"></script> -->
<script>

function delete1(){

const images = document.querySelectorAll('.delete-button');
images.forEach(function(image) {
  image.addEventListener('click', function() {
    const id = this.id;
    window.location.href = 'delete?id='+id;
  });
});

}
</script>
</html>

