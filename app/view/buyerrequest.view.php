
<!DOCTYPE html>
<html>
  <head>
    <title>
     Requests
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerrequest.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
     
      </style>
  </head>
  <body>
    <div class="main" style="display : grid; grid-template-columns: 21% 79%;">

          <div class="left-line"> 
                    <img class="Menu"  src="<?=ROOT?>/assets/images/buyerrequest/left.png">
                    <img class="logo"  src="<?=ROOT?>/assets/images/buyerrequest/logo.png">
                    <img class="line"  src="<?=ROOT?>/assets/images/buyerrequest/line.png">
                    <img class="message-bar" src="<?=ROOT?>/assets/images/buyerrequest/message-bar.png">
                    <label class="Menu1">Menu</label>

                    <div> 
                      <button class="Feed" onclick="document.location='feed'">Feed</button>
                      <img class="Feed1"  src="<?=ROOT?>/assets/images/buyerrequest/feed1.png">
                      <button class="Bidding" onclick="document.location='buyerbidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/buyerrequest/Bidding1.png">
                      <button class="Wishlist" onclick="document.location='buyerwishlist'" >Wishlist</button>
                      <img class="Wishlist1"  src="<?=ROOT?>/assets/images/buyerrequest/heart1.png">
                      <button class="Requests" onclick="document.location='buyerrequest'">Requests</button>
                      <img class="Requests1"  src="<?=ROOT?>/assets/images/buyerrequest/flag.png">
                    </div>

                    <img class="line1"  src="<?=ROOT?>/assets/images/buyerrequest/line.png">
                    <label class="Message">Message</label>
                  

          </div>

<?php 
//var_dump($_SESSION)?>
          <div style="display : grid; grid-template-rows: 10% 90%; ;">
          <div style="display : grid; grid-template-rows: 10% 10% 80%; ;">
          
                  <div class="top-line">
                  <?php  require APPROOT."/view/searchbarbuyer.php"?>
                  </div>

                  <div class="Scroll-bar">
                    <img class="plus"  id="plus" src="<?=ROOT?>/assets/images/buyerrequest/plus.png">
                            <?php foreach ($data as $row) :
                               ?>

                           <div class="posts">

                                <div class="top-line1">
                                               <img class="profile2" src="<?=ROOT?>/assets/images/buyerrequest/profilepic.png"> 
                                               <div class="profile-name">
                                               <?php echo $row->first_name ?>
                                              <?php echo $row->last_name ?>
                                               </div>
                                                
                                </div>
                                <div class="bottom-line">
                                        <div class="infor">
                                                    <?php echo $row->first_name ?>
                                                    <?php echo $row->last_name  ?>
                                                    wants
                                                    <?php echo $row->item_name ?>
                                                    in
                                                    <?php  echo $row->amount; ?>
                                                    <?php  echo $row->unit; ?>
                                                    (s)

                                        </div>
                                        

                                        <p class="content">
                                              Item   : <br>
                                              Amount : <br>
                                              Before :<br>
                                              To     : <br>
                                        </p>

                                        <p class="content1">
                                        <?php echo $row->item_name ?><br>
                                        <?php  echo $row->amount ?><?php  echo $row->unit; ?> <br>
                                        <?php  echo $row->date ?><br>
                                        <?php  echo $row->city; ?>

                                        </p>


                                      <button class="update">Update</button>
                                      <button class="delete">Delete</button>
                                            
                                  
                                        

                                         
                                </div>

                            </div> 
                                   
                          <?php endforeach; ?>
                          
 
                          
 
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
  <form class="" action="" method="post" enctype="multipart/form-data">
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
      <input  class="Address" type="text" name="Address" >
      <label class="tag10">Postal Code</label>
      <label class="tag11">*</label>
      <input class="postal-code" type="text" name="postal-code" >
      <label class="tag12">City</label>
      <label class="tag13">*</label>
      <input class="city" type="text" name="city" >
      <label class="tag14">Contact Number</label>
      <label class="tag15">*</label>
      <input class="contact" type="type" name="contact" >
			<button class="button" type="sumbit" name="submit"  onclick="document.location='buyerrequest'">Send</button>
		</form>

	</div>
</div>
 


  </body>

  <!-- <script src="<?=ROOT?>/assets/js/wishlist.js"></script> -->
<script>
  document.getElementById('plus').addEventListener("click", function() {
	document.querySelector('.bg-modal-4').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal-4').style.display = "none";
});
</script>
</html>

