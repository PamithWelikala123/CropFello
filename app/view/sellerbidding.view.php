
<!DOCTYPE html>
<html>
  <head>
    <title>
     Selling
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/sellerbidding.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
     
      </style>
  </head>
  <body>
  <div id="modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="closeBtn">&times;</span>
            
          </div>
          <div class="modal-body">
            <h3>Are tou sure you want to delete?</h3>
            <p>WARNING: All the current biddings for this post will be lost. </p><br>
              
            <button>Delete</button>
          </div>
        </div>
      </div>
  <div class="container">

           <?php
        
            require APPROOT."/view/searchbarseller2.php";
          
          ?>
          <div class="main">
                          <div class="main-content">
                          <a href="<?=ROOT?>/Bidding/createbid"><img class="plus"  src="<?=ROOT?>/assets/images/selling/plus.png" onclick></a>
          <?php if($data) :    ?>   
            <!-- <div class="bid">      
            <div class="bid1"> -->

              <?php foreach ($data as $row) : ?>

                
                        <div class="bidding-post">
                <div class="image">
                  <img  src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                </div>
                <div class="info">
                  <div class="name-size-place">
                    <label><span style="color: #000000;"> <?=$row->item_name?>&nbsp; </span> <?=$row->amount?><?=$row->amount_type?></label><br>
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
                    <!-- <div class="your-bid"> -->
                      
                        <!-- <p class="leading"> <span>Saman Kumara</span> &nbsp;is leading. </p>
                        <p class="bid-no">8<sup>th</sup> bid</p> -->
                    <!-- </div> -->
                  <div class="bid-now">
                    <input type="hidden" value='<?=$row->post_id?>' name='abc'>
                    <p> <b>saman kumara</b>  is leading</p>
                    <button type="button" class="update" id="<?=$row->post_id?>" onclick="window.location.href ='deleteBid?id='+id">Delete</button>
                    
                  </div>
                </div>
              </div>

              <?php endforeach; ?>


            <?php endif; ?>


            </div>
                
                   

                </div>
             
            
  </body>
</html>

