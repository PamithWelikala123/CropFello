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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerbidding2.css">
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
                  <button><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span> Feed</span></button><br>
                  <button><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Bidding</span></button><br>
                  <button><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/heart1.png"><span> Wishlist</span></button><br>
                  <button><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Requests</span></button><br>
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
                <div class="page-selector">
                    <button class="active" onclick="window.location.href = '../bidding/BuyerBidding';">All</button>
                    <button onclick="window.location.href = 'index2.html';">My Bids</button>
                </div>
                <?php if($data) :    ?>   
                <div class="main-content">

                <?php foreach ($data as $row) : ?>
                    <div class="bidding-post">
                        <div class="image">
                          <img src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>">
                        </div>
                        <div class="info">
                          <div class="name-size-place">
                            <label><span style="color: #000000;"><?=$row->item_name?>&nbsp; </span><?=$row->amount?> <?=$row->amount_type?></label><br>
                            <p><img src="images/map-pin.svg" alt="">&nbsp; <?=$row->city?></p>
                          </div>
                          <div class="price">
                            <h5 class="initial-price">RS <?=$row->initial_price?></h5>
                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS <?=$row->current_value?></h3>
                          </div>
                          <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;<?=$row->exp?></p></div>
                          <div class="days">
                            <p class="remain"><?=$row->remaning?> days remaining</p>
                            <p class="time1" id="post-<?=$row->post_id?>">And <span id="time-<?=$row->post_id?>"></span> minutes</p>
                            
                            
                            <?php
                                  $hours= $row->hours; 
                                   $minutes=$row->minutes;
                                   $day=$row->day;
                            ?>


                            <p class="ends-on">Ends on <?=$row->bid_end_date?></p>
                          </div>

                          <div class="bid-now">
                          <button id="<?=$row->post_id?>" class="js-bid-now-btn">Bid Now</button>
                          </div>
                        </div>
                      </div>

                      <div id="modal-<?=$row->post_id?>" class="modal">
                            <div class="modal-content">
                              <div class="modal-header">
                          
                                <span class="closeBtn">&times;</span>
                                <h2>Enter your bid value</h2>
                                <p>Current bid value: RS <?=$row->current_value?></p>
                                <p>Minimum bid value: RS <?=$row->bid_range?></p>
                              </div>
                              <div class="modal-body">
                              <form method="post" autocomplete="off" action='biddingbuyer?id='+<?=$row->post_id?>>
                                  <label> RS: &nbsp;</label>
                                
                                <input type="text" placeholder="Enter your bid" name="bidvalue"><label>&nbsp;.00</label>
                                
                                <button>Bid Now</button>
                                </form>
                              </div>
                            </div>
                          </div>
                

                      
                <?php endforeach; ?>  
                    </div>
                <?php endif; ?>
            </div>
        </div>
        
    </div>
    
    
    <?php
      $name = "Nathan"; 
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
              

              var xhr = new XMLHttpRequest();
                    xhr.open('POST', 'http://localhost/Cropfello/public/Bidding/biddingbuyer');
                    xhr.onload = function() {
                      if (xhr.status === 200) {
                        console.log('Request sent successfully.');
                        let data = xhr.response;
                        console.log(data);
                      } else {
                        console.log('Error: ' + xhr.status);
                      }
                    };
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.send("id=" + image['id']);

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
    <!-- <script type="text/javascript" src="<?=ROOT?>/assets/js/search1.js"></script>  -->

</body>

</html>