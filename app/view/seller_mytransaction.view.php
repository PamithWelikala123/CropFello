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
                    <button class="active" >On Going</button>
                    <button onclick="window.location.href = '<?=ROOT?>/selling/mytransaction_past';">Past Orders</button>
                </div>
                <div class="main-content">
                    <?php foreach($data as $dat){ ?>
                    <div class="post">
                        <div class="left">
                        
                          <div class="upper-left">
                            <img src="<?=ROOT?>/assets/images/Post-images/<?php echo($dat->image);  ?>" alt="Square Image">
                          </div>
                          <div class="upper-right">
                            <div class="details">
                              <h2><?php echo($dat->item_name);  ?></h2>
                              <p>RS. <?php echo($dat->price);  ?><span class="green">&nbsp; <?php echo($dat->qua);  ?> <?php echo($dat->unit);  ?></span></p>
                              
                              <div class="lower">
                                <label for=""><img src="<?=ROOT?>/assets/images/box.svg" alt=""> <?php echo($dat->first_name);  ?>,<span class="buyer-location">&nbsp;<?php echo($dat->city);  ?></span> </label><br>
                                <label for=""><img src="<?=ROOT?>/assets/images/truck.svg" alt=""> Pamith,<span class="buyer-location">&nbsp;Malabe</span> </label>
                              </div>
                              
                            </div>
                            
                          </div>
                          
                        </div>
                        <div class="right">
                            <p>Placed On: <?php echo($dat->placed_on);  ?></p>
                            <p class="exp">EXP: <?php echo($dat->exp);  ?></p>
                            <?php } ?>
                          <!--h4>Delivery status: <span class="green">Pending</span></h4-->
                          
                          <!-- <div class="buttons">
                            <button class="request-deliverer">Request Deliverer</button>
                            <button class="proceed-to-checkout" disabled>Proceed to checkout</button>
                          </div> -->
                        </div>
                      </div>
                      
                      <!--div class="post">
                        <div class="left">
                          <div class="upper-left">
                            <img src="<?=ROOT?>/assets/images/Post-images/639baa2f8f9f6.jpg" alt="Square Image">
                          </div>
                          <div class="upper-right">
                            <div class="details">
                              <h2>Beans</h2>
                              <p>RS. 450.00<span class="green">&nbsp; 1KG</span></p>

                              <div class="lower">
                                <label for=""><img src="<?=ROOT?>/assets/images/box.svg" alt=""> Vimukthi,<span class="buyer-location">&nbsp;Kottawa</span> </label>
                              </div>
                              
                            </div>
                            
                          </div>
                          
                        </div>
                        <div class="right">
                            <p>Placed On: 01/01/2023</p>
                            <p class="exp">EXP: 01/31/2023</p>
                          <h4>Delivery status: <span class="green">Pending</span></h4>
                          < <div class="buttons">
                            <button class="request-deliverer">Request Deliverer</button>
                            <button class="proceed-to-checkout" disabled>Proceed to checkout</button>
                          </div> >
                        </div>
                      </div-->
                      
                      
                  
                  

                </div>
            </div>
    </div>
</body>
</html>