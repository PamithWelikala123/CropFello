<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View profile</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
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
          <form method="post">
            <input type="text" name="reason" placeholder="Enter a valid reason">
            <button name="strike">Strike</button>
          </form>  
          </div>
        </div>
      </div>
    
    
    
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
           <div class="dp">
           <?php foreach($data as $dat){ ?>
            <img src="<?=ROOT?>/assets/images/Profile_pic/<?php echo($dat->image);  ?>" alt="">
           </div>
           <div class="account-details">
            <div class="name">
              <h2><?php echo($dat->first_name);  ?> <?php echo($dat->last_name);  ?></h2>
            </div>
            <!-- <div class="likes">
             <label><sup><strong>837</strong></sup> <img src="<?=ROOT?>/assets/images/viewprofile/heart.svg" alt=""></span></label>
            </div> -->
            <div class="empty"></div>
            <div class="strike">
              <button id="openModalBtn"><sup>Strike</sup>&nbsp;&nbsp;<img src="<?=ROOT?>/assets/images/viewprofile/strike.svg" alt=""></button>
            </div>
            <div class="contact">
              <label for=""><img src="<?=ROOT?>/assets/images/viewprofile/call.svg" alt="">&nbsp;<?php echo($dat->contact_number);  ?> &emsp;&emsp;</label><label for=""><img src="<?=ROOT?>/assets/images/viewprofile/mail.svg" alt="">&nbsp;<?php echo($dat->email);  ?></label>
            </div>
            <div class="messages">
              <button class="btn" type="button" id=<?=$dat->user_id?> >Message</button>
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

const images = document.querySelectorAll('.btn');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = '../chat/chat1?user_id='+id;
    });
  });
</script>
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