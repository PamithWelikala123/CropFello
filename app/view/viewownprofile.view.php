<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View profile</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/viewownprofile.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
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
                                  <div class="main-viewprofile">
                                      <div class="dp-viewprofile">
                                        <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt="dp">
                                      </div>
                                      <div class="account-details-viewprofile">
                                        <div class="name-viewprofile">
                                          <h2><?=$data['first_name']?> <?=$data['last_name']?></h2>
                                        </div>
                                  
                                        <div class="empty-viewprofile"></div>
                                        
                                        <div class="contact-viewprofile">
                                          <label for=""><img src="<?=ROOT?>/assets/images/images/call.svg" alt="">&nbsp;+94 <?=$data['contact_number']?> &emsp;&emsp;</label><label for=""><img src="<?=ROOT?>/assets/images/images/mail.svg" alt="">&nbsp;<?=$data['email']?></label>
                                        </div>
                                        <div class="messages-viewprofile">
                                          <button onclick="document.location='Profile/Editprofile_details'">Edit</button>
                                        </div>
                                      </div>
                                      <div class="about-viewprofile">
                                        <h1>About</h1>
                                        <p><?=$data['description']?></p>
                                      </div>
                                    </div>
                              
                    </div>
              </div>
        
    </div>
    
    

<!-- Modal Section -->

  </body>
</html>