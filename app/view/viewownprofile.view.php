<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View profile</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/viewownprofile.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    <a target="_blank" href="https://icons8.com/icon/3mVlaWDZV99c/rss-a-type-of-web-feed-allows-users-and-applications-to-access-updates"></a>
     <div class="container">
        <!-- <div class="topnav"></div>
        <div class="sidenav">
            <img class="logo"  src="images/logo.png">
            <hr><label class="Menu1">Menu</label>
        </div>
        <div class="main"></div> -->



        <div class="topnav">
        <?php require APPROOT."/view/searchbarseller.php"?> 
        </div>
        <div class="logo">
            <img class="logo1"  src="<?=ROOT?>/assets/images/images/logo.png">
        </div>
        <div class="menu">
            <hr><label class="Menu1">Menu</label>
            <div> 
                <button class="Feed" onclick="document.location='feed'">Feed</button>
                <img class="Feed1"  src="<?=ROOT?>/assets/images/images/feed1.png">
                <button class="Bidding" onclick="document.location='buyerbidding'">Bidding</button>
                <img class="Bidding1"  src="<?=ROOT?>/assets/images/images/Bidding1.png">
                <button class="Wishlist" onclick="document.location='buyerwishlist'" >Wishlist</button>
                <img class="Wishlist1"  src="<?=ROOT?>/assets/images/images/heart1.png">
                <button class="Requests" id="Requests" onclick="document.location='buyerrequest.php'">Requests</button>
                <img class="Requests1"  src="<?=ROOT?>/assets/images/images/flag.png">
              </div>
        </div>
        <div class="message">
            <hr><label class="Message1">Message</label>
            <img class="message-bar" src="<?=ROOT?>/assets/images/images/message-bar.png">
        </div>
        <div class="main">
              <div class="dp">
                <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt="dp">
              </div>
              <div class="account-details">
                <div class="name">
                  <h2><?=$data['first_name']?> <?=$data['last_name']?></h2>
                </div>
          
                <div class="empty"></div>
                
                <div class="contact">
                  <label for=""><img src="<?=ROOT?>/assets/images/images/call.svg" alt="">&nbsp;+94 <?=$data['contact_number']?> &emsp;&emsp;</label><label for=""><img src="<?=ROOT?>/assets/images/images/mail.svg" alt="">&nbsp;<?=$data['email']?></label>
                </div>
                <div class="messages">
                  <button onclick="document.location='Profile/Editprofile_details'">Edit</button>
                </div>
              </div>
              <div class="about">
                <h1>About</h1>
                <p><?=$data['description']?></p>
              </div>
            </div>
        </div>
</body>
</html>