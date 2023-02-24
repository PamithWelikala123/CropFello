<html>
    <head><title>buyerbidding</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerbidding.css">

</head>
    <body>

    <div id="modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="closeBtn">&times;</span>
            <h2>Enter your bid value</h2>
            <p>Minimum bid value: RS 630,00</p>
          </div>
          <div class="modal-body">
              <label> RS: &nbsp;</label>
            <input type="text" placeholder="Enter your bid"><label>&nbsp;.00</label>
            <button>Bid Now</button>
          </div>
        </div>
      </div>



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

                        <!-- <div class="bid2" id="<?=$row->post_id?>" >
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

                        </div> -->

                        <!-- <div class="bidding-post"  id="<?=$row->post_id?>">
                          <div class="image">
                            <img src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                          </div>
                          <div class="info">
                            <div class="name-size">
                              <h4><?=$row->item_name?><span><?=$row->amount?><?=$row->amount_type?></span></h4>
                            </div>
                            <div class="price"></div>
                            <div class="exp"></div>
                            <div class="days"></div>
                            <div class="bid-now"></div>
                          </div>
                        </div>
                         -->
                <div class="bidding-post" id="<?=$row->post_id?>" >
                <div class="image">
                  <img src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                </div>
                <div class="info">
                  <div class="name-size-place">
                    <label><span style="color: #000000;"><?=$row->item_name?>&nbsp; </span><?=$row->amount?> <?=$row->amount_type?></label><br>
                    <p><img src="images/map-pin.svg" alt="">&nbsp; <?=$row->city?></p>
                  </div>
                  <div class="price">
                    <h5 class="initial-price">RS <?=$row->initial_price?></h5>
                    <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS <?=$row->current_value?></h3>
                  </div>
                  <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;<?=$row->exp?></p></div>
                  <div class="days">
                    <p class="remain"><?=$row->remaning?> days remaining</p>
                    <p class="ends-on">Ends on <?=$row->bid_end_date?></p>
                    </div>
                  <div class="bid-now">
                    <button id="openModalBtn">Bid Now</button>
                  </div>
                </div>
              </div>



                    
                        
<?php endif; ?>
<?php endforeach; ?>
              </>
            </div>

<?php endif; ?>







<!-- <form  method="post">
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
</form> -->



  </body>
  
<!-- <script src="<?=ROOT?>/assets/js/bidnow.js"></script> -->



<!-- <script>

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

</script> -->

<script>
          // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("openModalBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("closeBtn")[0];
      
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





</html>