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
        <div class="topnav">

                <div class="logo">
                    <img src="<?=ROOT?>/assets/images/Topnavbar/logo.png" altba="">
                </div>

            

                  <div class="topnav-options">
                      <a id="profmyBtn"><img src="<?=ROOT?>/assets/images/Profile_pic/<//?=$_SESSION['USER']->image?>" alt=""> </a>
                  </div>

                  <div class="search-bar">

                  <form action="../<?=$filename?>/search">
                  
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>

                  </div>

        </div>








          <div id="profmyModal" class="profmodal">


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