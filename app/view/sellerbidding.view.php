
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
                
                        <div class="bid2">
                                    <div class="carr">
                                          <img class="img3"  src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                                    </div>

                                     <div style="font-size:30px">
                                          <?=$row->item_name?>
                                      </div>

                                      <div style="font-size:35px;color:#4DEA25">
                                          <?=$row->amount?><?=$row->amount_type?>
                                      </div>


                                        <div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">Rs. <?=$row->initial_price?></div>

                                         <div style="margin-left:225px">
                                             <?=$row->city?>
                                        </div>


                                        <div>

                                        </div>
                                        
                                        <div style="font-size:35px">Rs. <?=$row->current_value?></div>

                            
                                        <div style="color:#E43D3D">Exp: <?=$row->exp?></div><div></div><div style="color:#4DEA25"><?=$row->remaning?> days remaining</div>

                           
                           
                                        <div></div>
                                        
                                        <div></div>
                                        
                                        <div style="color:rgba(0, 0, 0, 0.4);margin-left:225px;width:225px;margin-top:25px ">Bid Ends:<?=$row->bid_end_date?></div>

                                      <!-- <div><button class="btn2" id="btn2">Delete Bid</button></div> -->
                        </div>
                      
              <?php endforeach; ?>


            <?php endif; ?>


            </div>
                
                   

                </div>
             
            
  </body>
</html>

