<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/waiting1.css">
</head>
<body>




<div class="container">

<?php

require APPROOT."/view/searchbarbuyer2.php";

?>
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
                <div class="page-selector">
                    <button onclick="window.location.href = '<?=ROOT?>/feed/waiting';">Waiting Orders</button>
                    <button class="active">Ended Orders</button>
                </div>
                
                <div class="main-content">
                
                <?php if(isset($data) && !empty($data)) {?>
                    <?php foreach($data as $dat){ ?>
                    <div class="post">
                        <div class="left">
                          <div class="upper-left">
                          
                            <img src="<?=ROOT?>/assets/images/Post-images/<?php echo($dat->image1);  ?>" alt="Product Image">
                          </div>
                          
                          <div class="upper-right">
                            <h2><?php echo($dat->item_name);  ?><span class="green">&nbsp; <?php echo($dat->qua);  ?> <?php echo($dat->unit);  ?></span></h2>
                            <p class="para">Price : RS. <?php echo($dat->tot);  ?></p>
                            <p class="para">Delivery Cost : RS. <?php echo($dat->del_price);  ?></p>
                            <p class="para">Full Amount : RS. <?php echo($dat->tot);  ?></p>
                          </div>
                          <div class="lower">
                            <p class="para">Placed On: <?php echo($dat->placed_on);  ?></p>
                            <p class="para exp">EXP: <?php echo($dat->exp);  ?></p>
                          </div>
                          
                        </div>
                        </div>
                        <?php }
                        ?>


                            <?php }?>