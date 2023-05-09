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
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/searchbarbuyer2.css"> -->
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/notification.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/profile.css">

</head>
<body>
<?php
//$filename = $_SESSION['filename'];
echo "<script>console.log('Filename: ".$filename."');</script>";
?> 
        <div class="topnav">

                <div class="logo">
                    <img src="<?=ROOT?>/assets/images/Topnavbar/logo.png" altba="">
                </div>

                <?php require APPROOT."/controller/Notification.php";
                              $userNotification = new Notification();
                              $notifications = $userNotification->notifications();
                              $jsonArray = json_encode($notifications);
                              

                   ?>

                <div class="topnav-options">
                    <!-- <a class="active" href="#home">Home</a> -->
                    <a href="<?=ROOT?>/feed/waiting" id="my-orders">My Orders</a>
                    <a href="<?=ROOT?>/feed/cart"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
                    <a class="notification-icon"><i class="fa fa-bell" style="font-size:18px"></i></a>
                    <span class="notification-count">7</span>
                    <a id="profmyBtn"><img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt=""> </a>
                    <!-- </a> -->
                </div>
                


                <!-- <div class="search-container"> -->
                  <!-- <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form> -->
                  <div class="search-bar">

                  <form action="../<?=$filename?>/search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>

                  </div>
                <!-- </div> -->
        </div>


        <div class="notification-box">
                    <div class="notification-header" >
                    <h3>Notifications</h3>
                    <button class="close-btn"><img src="<?=ROOT?>/assets/images/notification/close.svg" alt=""></button>
                    </div>
                    <div class="notification-list"></div>
        </div>




          <!-- The Modal -->
          <div id="profmyModal" class="profmodal">

            <!-- Modal content -->
            <div class="profmodal-content">
              <span class="profclose">&times;</span>
              <div class="profmodal-upper">
                <img class="profprofile-picture" src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>">
                <div class="profname">Vimukthi Dulnath</div>
              </div>
              <div class="profmodal-lower">
                <button id="sellBtn" onclick="document.location='../selling/selling'">Sell</button>
                <div class="profvertical-line"></div>
                <button id="profileBtn" onclick="document.location='../Profile'">Profile</button>
                <div class="profvertical-line"></div>
                <button id="logoutBtn"  onclick="document.location='../login'">Logout</button>
              </div>
            </div>

          </div>
        



<script src="<?=ROOT?>/assets/js/notification.js"></script> 
<script src="<?=ROOT?>/assets/js/profile.js"></script> 
<script type="text/javascript" src="<?=ROOT?>/assets/js/search.js"></script> 

</body>
</html>