<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/seller_mytransaction.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>My Transactions</title>
</head>
<body>
    <div class="container">
    <?php
        
        require APPROOT."/view/searchbarseller2.php";
      
      ?>
            <div class="main">
                <div class="page-selector">
                    <button  onclick="window.location.href = '<?=ROOT?>/selling/mytransaction';">On Going</button>
                    <button class="active">Past Orders</button>
                </div>
                <div class="main-content">


                    <?php if($data['a']):?>
                    <?php foreach($data['a'] as $row):?>


                    <div class="post">
                        <div class="left">
                          <div class="upper-left">
                            <img src="<?=ROOT?>/assets/images/Post-images/<?php echo $row->image1;?>" alt="Square Image">
                          </div>
                          <div class="upper-right">
                            <div class="details">
                              <h2><?php echo $row->item_name;?></h2>
                              <p>RS. <?php echo $row->tot;?>.00<span class="green">&nbsp; <?php echo $row->qua;?><?php echo $row->unit;?></span></p>

                              <div class="lower">
                                <label for=""><img src="<?=ROOT?>/assets/images/box.svg" alt=""> <?php echo $row->first_name;?>,<span class="buyer-location">&nbsp;<?php echo $row->city;?></span> </label><br>
                                <!--label for=""><img src="<?=ROOT?>/assets/images/truck.svg" alt=""> kamal,<span class="buyer-location">&nbsp;ratnapura</span> </label-->
                              </div>
                              
                            </div>
                            
                          </div>
                          
                        </div>
                        <div class="right">
                            <p>Placed On: <?php echo $row->placed_on;?></p>
                            <p class="exp">EXP: <?php echo $row->exp;?></p>
                          <!-- <h4>Delivery status: <span class="green">Pending</span></h4> -->
                          <!-- <div class="buttons">
                            <button class="request-deliverer">Request Deliverer</button>
                            <button class="proceed-to-checkout" disabled>Proceed to checkout</button>
                          </div> -->
                        </div>
                      </div>
                      <?php endforeach;?> 
                      <?php endif;?> 

                      
                      
                  
                  

                </div>
            </div>
    </div>
</body>
</html>