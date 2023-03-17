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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/searchbarbuyer2.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/notification.css">
</head>
<body>
   
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
                        <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt=""> 
                    <!-- </a> -->
                </div>
                
                <div class="search-container">
                  <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
        </div>

        <div class="notification-box">
                    <div class="notification-header">
                    <h3>Notifications</h3>
                    <button class="close-btn"><img src="<?=ROOT?>/assets/images/notification/close.svg" alt=""></button>
                    </div>
                    <div class="notification-list"></div>
        </div>
        

<script src="<?=ROOT?>/assets/js/notification.js"></script> 
</body>
</html>