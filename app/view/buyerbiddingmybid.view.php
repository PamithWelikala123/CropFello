

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width"/>
    <title>buyerbidding</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerbiddingmybid.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>

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
                <div class="page-selector">
                    <button  onclick="window.location.href = '../bidding/BuyerBidding';">All</button>
                    <button class="active" onclick="window.location.href = '../bidding/mybid';">My Bids</button>
                </div>


                <div class="bidding-post-mybid">
                      <div class="image-mybid">
                              <img src="images/carrot1.jpg">
                      </div>

                      <div class="info-mybid">

                            <div class="name-size-place-mybid">
                              <label><span style="color: #000000;">Carrot&nbsp; </span>1 KG</label><br>
                              <p><img src="images/map-pin.svg" alt="">&nbsp; Nuwara Eliya</p>
                      </div>

                        <div class="price-mybid">
                              <h5 class="initial-price-mybid">RS 430</h5>
                              <h3 class="current-price-mybid"><img src="images/green-circle.svg" alt=""> RS 530</h3>
                        </div>
                        <div class="exp-mybid"><p><span style="font-weight: 600;">EXP:</span>&nbsp;16 September 2022</p></div>
                        <div class="days-mybid">
                              <p class="remain-mybid">8 days remaining</p>
                              <p class="ends-on-mybid">Ends on 15 September 2022</p>
                        </div>
                        <div class="your-bid-mybid">
                              <p>Your Bid:&nbsp; <span>RS 530.00</span></p>
                        </div>
                        <div class="bid-now-mybid">
                          <!-- <button class="cancel">cancel</button> -->
                          <button  class="update-mybid" id="openModalBtn">Update</button>
                          
                        </div>
            </div>
                
           </div>
        
    </div>
    
    
    <?php
      $name = "Bidding"; 
    ?>




<script>   



    var modal;

    const images = document.querySelectorAll('.js-bid-now-btn');
          images.forEach(function(image) {
            image.addEventListener('click', function() {
              modal = document.getElementById('modal-' + image['id']);
              modal.style.display = "block";
              let id = image['id'];
              //console.log(image['id']);

            });
          });
        




            
            //var span = document.getElementsByClassName('closeBtn')[1];
            var closeBtns = document.querySelectorAll('.closeBtn');
              closeBtns.forEach(function(span) {
                span.onclick = function() {
                  var modal = span.closest('.modal');
                  modal.style.display = 'none';
                }
              });
 
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }

        


          //   window.onload = function () {
                
          //       const images = document.querySelectorAll('.time1');
          //       images.forEach(function(image) {
          //         var display = document.querySelector('#time-'+image.id.split('-')[1]);
                 
          //        var Minutes = 60 * <?php echo $minutes?>;
          //         startTimer(Minutes, display);
          //       });
          //     };



              

          // function startTimer(duration, display) {
          //   var start = Date.now();
            
          //   function updateDisplay() {
          //     var diff = getDiffInSeconds();
          //     var minutes = padNumber(Math.floor(diff / 60));
          //     var seconds = padNumber(diff % 60);
          //     display.textContent = minutes + ":" + seconds;
          //   }
            
          //   function getDiffInSeconds() {
          //     return duration - Math.floor((Date.now() - start) / 1000);
          //   }
            
          //   function padNumber(num) {
          //     return num < 10 ? "0" + num : num;
          //   }
            
          //   function restartTimer() {
          //     start = Date.now() + 1000;
          //   }
            
          //   updateDisplay();
          //   setInterval(updateDisplay, 1000);
          // }






    </script> 



    <script type="text/javascript">var name = "<?= $name ?>";</script> 
    <!-- <script type="text/javascript" src="<?=ROOT?>/assets/js/buyerbidding.js"></script> -->



</body>

</html>