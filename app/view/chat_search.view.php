<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Message page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/chat.css">
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/notification.css">
        <link rel="stylesheet" href="<?=ROOT?>/assets/css/profile.css">

   
    </head>

    
    <body>
    <div class="container">
            <?php //require APPROOT."/view/searchbarbuyer2.php"?>
            <div class="topnav">
                  <div class="logo">
                            <img src="<?=ROOT?>/assets/images/Topnavbar/logo.png" altba="">
                  </div>  

                  <div class="topnav-options">
                    <!-- <a class="active" href="#home">Home</a> -->
                    <a href="#orders" id="my-orders">My Orders</a>
                    <a href="#cart"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
                    <a class="notification-icon" ><i class="fa fa-bell" style="font-size:18px"></i></a>
                    <span class="notification-count">6</span>
                    <a id="profmyBtn"><img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt=""> </a>
                    <!-- </a> -->
                </div>

            </div>

        <div class="content">
            <div class="leftbar">
  
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
                              <?php require APPROOT."/controller/newchat.php";
                              $userControllerx = new newChat();
                              $userControllerx->viewperson();
                              ?>
                                  
                          

                          

                          </div>
                </div>



</div>




    <div class="main">
                  <div class="main-content">

                  <div class="body-chatsystem">
                                            <div class="wrapper-chatsystem">
                                          
                                          <section class="users-chatsystem">
                                          
                                            <header>
                                              <div class="content-chatsystem">

                                                <!-- getting details from the database and use them -->

                                                <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt="">
                                                <div class="details-chatsystem">
                                                  <span><?php echo $data['first_name']. " " . $data['last_name'] ?></span>
                                                  <p><?php echo $data['status'];  ?></p>
                                                </div>
                                              </div>
                                              <!-- connecting to the logout page -->
                                            
                                          
                                            <img style="width:15%; border-radius: 0%" src="<?=ROOT?>/assets/images/login page/logo.png">
                                          
                                            </header>
                                            <div class="search-chatsystem">
                                              <span class="text-chatsystem">Select an user to start chat</span>
                                              <input type="text" placeholder="Enter name to search...">
                                              <button><i class="fas fa-search"></i></button>
                                            </div>
                                            <div class="users-list-chatsystem">

                                            </div>
                                          </section>
                                        </div>

                  </div>
                 </div>
      </div>
</div>









  <script src="<?=ROOT?>/assets/js/chat_users.js"></script> 
  <script src="<?=ROOT?>/assets/js/notification.js"></script> 
  <script src="<?=ROOT?>/assets/js/profile.js"></script> 
  <script type="text/javascript" src="<?=ROOT?>/assets/js/search.js"></script> 

    </body>
</html>
