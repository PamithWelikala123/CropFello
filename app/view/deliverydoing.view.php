<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buyerbidding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverytodo1.css">
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/notification.css">
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">

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
                  <!-- <hr><label >Menu</label><br> -->
                  <hr><p>Menu</p><br>
                  <button onclick="document.location='deliverytodo/view1'"><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span> Todo</span></button><br>
                  <button onclick="document.location='../deliverydoing/'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Doing</span></button><br>
                  <button onclick="document.location='deliverydone'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/heart1.png"><span> Done</span></button><br>
                  <button onclick="document.location='deliveryfee'"><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Fee</span></button><br>
              </div>
              <div class="message">
                  <!-- <hr><label>Message</label> -->
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
            <div class="containerx">
                    <div class="item item-1">
                      <img class="profile-pic" src="<?=ROOT?>/assets/images/rushinpics/pics/man1.png">
                      <p class="nam">Pamith Welikala</p><br>
                      <p class="date">3 September 2022</p>

                    </div>
                    <div class="item item-2">
                    <h2 class="head">Pamith Welikala&nbsp wants to deliver&nbsp Papaya &nbsp 2 &nbspKgs &nbsp<br>from Godagama &nbsp to Thalawathugoda &nbsp</h2>

                      <table class="table">

                        <tr>
                          <td>Item:</td>
                          <td><font color="#0C7417">Papaya</td>
                        </tr>

                        <tr>
                          <td>Amount:</td>
                          <td><font color="#0C7417">2KG</td> 
                        </tr>

                        
                        <tr>
                          <td>From:</td>
                          <td><font color="#0C7417">101, 1st Lane, Rathmaldeniya, Godagama, Colombo</td> 
                        </tr>

                        
                        <tr>
                          <td>To:</td>
                          <td><font color="#0C7417">53/A, Samagi Mawatha, Thalawathugoda, Colombo</td> 
                        </tr>                        
                        <tr>
                          <td>Fee:</td>
                          <td><font color="#0C7417">Rs.350.00</td> 
                        </tr>

                        
                        <tr>
                          <td>Vehicle Type:</td>
                          <td><font color="#0C7417">Motocycle</td> 
                        </tr>
                      </table>

                      <button class="Approve btn1">Approve &nbsp  &#10004</button>
                      <button class="Discard btn2">Discard &nbsp &#xf014 </button>
                    </div>
              
                  </div>                
            </div>
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