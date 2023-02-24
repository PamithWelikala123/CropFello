
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
    <div style="display : grid; grid-template-columns: 21% 79%;">

          <div class="left-line"> 
                    <img class="Menu"  src="<?=ROOT?>/assets/images/selling/left.png">
                    <img class="logo"  src="<?=ROOT?>/assets/images/selling/logo.png">
                    <img class="line"  src="<?=ROOT?>/assets/images/selling/line.png">
                    <img class="message-bar" src="<?=ROOT?>/assets/images/selling/message-bar.png">
                    <label class="Menu1">Menu</label>

                    <div> 
                      <button class="Feed" onclick="document.location='../selling'">Selling</button>
                      <img class="Feed1"  src="<?=ROOT?>/assets/images/selling/feed1.png">
                      <button class="Bidding" onclick="document.location='sellerbidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/selling/Bidding1.png">
                      <button class="Requests" onclick="document.location='Seller_allrequest'">Requests</button>
                      <img class="Requests1"  src="<?=ROOT?>/assets/images/selling/flag.png">
                    </div>

                    <img class="line1"  src="pics\feed\line.png">
                    <label class="Message">Message</label>
                  

          </div>


          <div style="display : grid; grid-template-rows: 10% 90%; ;">
                  <div class="top-line">
                  <?php require APPROOT."/view/searchbarseller.php"?>
                  </div>


                  
                  <div class="Scroll-bar">
                  <a href="<?=ROOT?>/Bidding/createbid"><img class="plus"  src="<?=ROOT?>/assets/images/selling/plus.png" onclick></a>


          <?php if($data) :    ?>   
            <div class="bid">      
            <div class="bid1">

              <?php foreach ($data as $row) : ?>
                        <div class="bid2"><div class="carr"><img class="img3"  src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                      </div><div style="font-size:30px"><?=$row->item_name?></div><div style="font-size:35px;color:#4DEA25"><?=$row->amount?><?=$row->amount_type?></div>
                      <div style="font-size:25px;color: rgba(0, 0, 0, 0.4)">Rs. <?=$row->initial_price?></div>
                            <div style="margin-left:225px"><?=$row->city?></div><div></div><div style="font-size:35px">Rs. <?=$row->current_value?></div>
                            <div style="color:#E43D3D"><?=$row->exp?></div><div></div><div style="color:#4DEA25"><?=$row->remaning?> days remaining</div>
                            <div></div><div></div><div style="color:rgba(0, 0, 0, 0.4);margin-left:225px"><?=$row->bid_end_date?></div>
                            <div></div><div></div><div><button class="btn2" id="btn2">Close Bid</button></div>
                        </div>
              <?php endforeach; ?>
              </div>
            </div>

            <?php endif; ?>
</div>



                  </div>
                  
    


          </div>
         
                   

    </div>
 


  </body>
</html>

