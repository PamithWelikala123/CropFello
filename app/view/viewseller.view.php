<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View profile</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/viewseller.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
    <a target="_blank" href="https://icons8.com/icon/3mVlaWDZV99c/rss-a-type-of-web-feed-allows-users-and-applications-to-access-updates"></a>
     
    
    <div id="modal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <span class="closeBtn">&times;</span>
            
          </div>
          <div class="modal-body">
          <h2>Mention your reason to strike</h2><br>
            <input type="text" placeholder="Enter a valid reason">
            <button>Strike</button>
          </div>
        </div>
      </div>
    
    
    
    <div class="container">
        <!-- <div class="topnav"></div>
        <div class="sidenav">
            <img class="logo"  src="images/logo.png">
            <hr><label class="Menu1">Menu</label>
        </div>
        <div class="main"></div> -->



        <div class="topnav">
            <input class="Search" type="textbox" placeholder="Search">
            <img class="Search1"  src="images/search.png">
            <img class="bell" src="images/bell.png">
            <img class="active" src="images/active.png"> 
            <img class="profile" src="images/profilepic.png"> 
        </div>
        <div class="logo">
            <img class="logo1"  src="images/logo.png">
        </div>
        <div class="menu">
            <hr><label class="Menu1">Menu</label>
            <div> 
                <button class="Feed" onclick="document.location='feed.php'">Feed</button>
                <img class="Feed1"  src="images/feed1.png">
                <button class="Bidding" onclick="document.location='bidding.php'">Bidding</button>
                <img class="Bidding1"  src="images/Bidding1.png">
                <button class="Wishlist" >Wishlist</button>
                <img class="Wishlist1"  src="images/heart1.png">
                <button class="Requests" id="Requests" onclick="document.location='Wishlist.php'">Requests</button>
                <img class="Requests1"  src="images/flag.png">
              </div>
        </div>
        <div class="message">
            <hr><label class="Message1">Message</label>
            <img class="message-bar" src="images/message-bar.png">
        </div>
        
        <div class="main">
           <div class="dp">
           <?php foreach($data as $dat){ ?>
            <img src="<?=ROOT?>/assets/images/Profile_pic/<?php echo($dat->image);  ?>" alt="">
           </div>
           <div class="account-details">
            <div class="name">
              <h2><?php echo($dat->first_name);  ?> <?php echo($dat->last_name);  ?></h2>
            </div>
            <div class="likes">
             <label><sup><strong>837</strong></sup> <img src="<?=ROOT?>/assets/images/viewprofile/heart.svg" alt=""></span></label>
            </div>
            <div class="empty"></div>
            <div class="strike">
              <button id="openModalBtn"><sup>Strike</sup>&nbsp;&nbsp;<img src="<?=ROOT?>/assets/images/viewprofile/strike.svg" alt=""></button>
            </div>
            <div class="contact">
              <label for=""><img src="<?=ROOT?>/assets/images/viewprofile/call.svg" alt="">&nbsp;<?php echo($dat->contact_number);  ?> &emsp;&emsp;</label><label for=""><img src="<?=ROOT?>/assets/images/viewprofile/mail.svg" alt="">&nbsp;<?php echo($dat->email);  ?></label>
            </div>
            <div class="messages">
              <button>Message</button>
            </div>
           </div>
           <div class="about">
            <h1>About</h1>
            <p><?php echo($dat->description);  ?></p>
           </div>
           <?php } ?>
           <!--div class="shop">
            <h1>hello</h1>
           </div-->
        </div>
    </div>
     

    <script>
          // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("openModalBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("closeBtn")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      
      </script>

</body>
</html>