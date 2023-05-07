
<!DOCTYPE html>
<html>
  <head>
    <title>
     Requests
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerrequest.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/requestcrop.css">
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
                                                                <img class="plus"  id="plus" src="<?=ROOT?>/assets/images/buyerrequest/plus.png">
                                                                      <?php if($data) :    ?>
                                                                              <?php foreach ($data as $row) :
                                                                                ?>

                                                                            <div class="request-posts">

                                                                                  <div class="request-top-line1">
                                                                                                <img class="request-profile2" src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>"> 
                                                                                                <div class="request-profile-name">
                                                                                                <?php echo $row->first_name ?>
                                                                                                <?php echo $row->last_name ?>
                                                                                                </div>
                                                                                                  
                                                                                  </div>
                                                                                  <div class="request-bottom-line">
                                                                                          <div class="request-infor">
                                                                                                      <?php echo $row->first_name ?>
                                                                                                      <?php echo $row->last_name  ?>
                                                                                                      wants
                                                                                                      <?php echo $row->item_name ?>
                                                                                                      in
                                                                                                      <?php  echo $row->amount; ?>
                                                                                                      <?php  echo $row->unit; ?>
                                                                                                      (s)

                                                                                          </div>
                                                                                          

                                                                                          <p class="request-content">
                                                                                                Item   : <br>
                                                                                                Amount : <br>
                                                                                                Before :<br>
                                                                                                To     : <br>
                                                                                          </p>

                                                                                          <p class="request-content1">
                                                                                          <?php echo $row->item_name ?><br>
                                                                                          <?php  echo $row->amount ?><?php  echo $row->unit; ?> <br>
                                                                                          <?php  echo $row->date ?><br>
                                                                                          <?php  echo $row->city; ?>

                                                                                          </p>


                                                                                        <button class="update" id="<?=$row->post_id?>">Update</button>
                                                                                        <button class="delete" id="<?=$row->post_id?>" onclick="delete1()">Delete</button>
                                                                                              
                                                                                    
                                                                                          

                                                                                          
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
                                                  </div>       
              </div>
          </div>
    
</div>



<!-- Modal Section -->

</body>

  <!-- <script src="<?=ROOT?>/assets/js/wishlist.js"></script> -->
<script>
  document.getElementById('plus').addEventListener("click", function() {
	document.querySelector('.bg-modal-4').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal-4').style.display = "none";

});


function delete1(){

const images = document.querySelectorAll('.delete');
images.forEach(function(image) {
  image.addEventListener('click', function() {
    const id = this.id;
    window.location.href = 'delete?id='+id;
  });
});

}
</script>
</html>

