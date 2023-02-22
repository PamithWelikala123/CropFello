<html>
    <head><title>buyerbidding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerbidding.css">

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
          
          <div><button class="all">All</button></div>
        <?php echo '<a href="buyerbiddingmybid"> <input type="submit" class="all1" value="My Bids"/></a>';?>

<?php if($data) :    ?>
                    


                    
         
                 
<div class="bid">      
 <div class="bid1">

<?php foreach ($data as $row) : ?>
  <?php if(($row->seller_id)!=$_SESSION['USER']->user_id) :    ?>

                        <div class="bid2" id="<?=$row->post_id?>" >
                          <div class="carr">
                            <img class="img3"  src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                          </div>
                          <div style="font-size:30px">
                            <?=$row->item_name?>
                          </div>
                          <div style="font-size:35px;">
                            <?=$row->amount?><?=$row->amount_type?>
                          </div>
                          <div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">
                            Rs. <?=$row->initial_price?>
                          </div>
                          <div style="margin-left:225px">
                            <?=$row->city?>
                          </div>
                          <div></div>
                          <div style="font-size:35px">
                            Rs. <?=$row->current_value?>
                          </div>
                          <div style="color:#E43D3D">
                            <?=$row->exp?>
                          </div>
                          <div></div>
                          <div style="color:#4DEA25">
                            <?=$row->remaning?> days remaining</div>
                          <div></div>
                          <div></div>
                          <div style="color:rgba(0, 0, 0, 0.4);margin-left:225px"><?=$row->bid_end_date?></div>
                          <div></div><div></div>
                          <div>
                            <button class="btn2" id="<?=$row->post_id?>" onclick="openForm()">Bid Now</button>
                          </div>

                        </div>

                    
                        
<?php endif; ?>
<?php endforeach; ?>
              </>
            </div>

<?php endif; ?>







<form  method="post">
 <div class="form-popup" id="myForm">
            <h5 style="text-align: center;">Enter your bid value</h5>

            <div class="ru">Rs.</div>
            <div class="ru" style="left:285px">.00</div>
            <input class="box5" type="text" placeholder="Bid value"  name="bidvalue" required >
            <input  type="hidden"  name="post_id"  id="hidden" value="">
            
            <div>
              <input type="submit" class="btn3" onclick="document.location='addBiddingValue'" value="Bid now">
            </div>
            
            <button type="button" style="top:140px;width:90px;height:40px;left:420px;background:#E43D3D" class="btn3" onclick="closeForm()">Close</button>

</div>
</form>



  </body>
  
<!-- <script src="<?=ROOT?>/assets/js/bidnow.js"></script> -->



<script>

const fills = document.querySelectorAll('.btn2');
  fills.forEach(function(fill) {
    fill.addEventListener('click', function() {
       const id = this.id;
       document.getElementById("hidden").value=id;
      console.log(id);
      
    });
  });

function openForm() {
  document.getElementById("myForm").style.display = "block";
  }


function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

</script>

</html>