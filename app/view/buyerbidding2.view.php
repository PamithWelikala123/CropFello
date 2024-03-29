

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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerbidding2.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>

</head>
<body>


<?php
$_SESSION['filename'] = 'Bidding';
?>
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
                    <button class="active" onclick="window.location.href = '../bidding/BuyerBidding';">All</button>
                    <button onclick="window.location.href = '../bidding/BuyerBiddingmybid';">My Bids</button>
                </div>
                <?php if($data) :    ?>   
                <div class="main-content">

                <?php foreach ($data as $row) : ?>
                  <?php if(($row->remaning)>0) :    ?>   
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
                                                                            <h5 class="initial-price">RS <?=$row->initial_price?>.00</h5>
                                                                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS <?=$row->current_value?>.00</h3>
                                                                          </div>

                                                                          <div class="exp">
                                                                                <p><span style="font-weight: 600;">EXP :</span>&nbsp;<?=$row->exp?></p>
                                                                              
                                                                                <!-- <div class="your-bid-mybid">
                                                                                            <p>Your Bid:&nbsp; <span>RS <?=$row->youramount?>.00</span></p>
                                                                                </div> -->
                                                                          </div>
                                                                          
                                                                          <div class="days">
                                                                            <p class="remain"><?=$row->remaning?> days remaining</p>
                                                                            <!-- <p class="time1" id="post-<?=$row->post_id?>">And <span id="time-<?=$row->post_id?>"></span> minutes</p> -->
                                                                            

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
                                                        <p>Current bid value: RS <?=$row->current_value?>.00</p>
                                                        <p>Minimum bid value: RS <?=$row->bid_range?>.00</p>
                                                        <div class="output" id="output"></div>
                                                        <div class="output2" id="output2"></div>
                                                      </div>
                                                      
                                                      <div class="modal-body" id='modal-body-<?=$row->post_id?>'>
                                                    
                                                                  <form method="post" autocomplete="off" action='biddingbuyer2'>
                                                                      <label> RS: &nbsp;</label>
                                                                    
                                                                    <input type="text" placeholder="Enter your bid" name="bidvalue"><label>&nbsp;.00</label>
                                                                    <input type="hidden" value='<?=$row->post_id?>' name='abc'>
                                                                    <button type="submit" name="submit" id='myButton'>Bid Now</button>


                                                                  </form>
                                                      
                                                      </div>
                                            </div>
                                  </div>
                          
                                  <?php endif; ?>
                      
                <?php endforeach; ?>  
                </div>
                
               
               
            </div>
            <?php else : ?>
                                  <div class="no-search">
                                    <p>No search Result <img src="<?=ROOT?>/assets/images/feed/no-search.svg" alt=""> </p>
                                  </div>
                                  
          <?php endif; ?>
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
              console.log(image['id']);      
              modal = document.getElementById('modal-' + image['id']);
              modal.style.display = "block";
              let id = image['id'];



                                    const searchBar = modal.querySelector(".modal-body input");
                                    const outputDiv = document.getElementById("output");
                                    const outputDiv2 = document.getElementById("output2");
                                    
                                  
                                    const currentBidText = modal.querySelector(".modal-header p:first-of-type").textContent;
                                    const currentBidValue = currentBidText.match(/\d+(\.\d+)?/)[0];
                                    let currentBidValueInt = parseInt(currentBidValue);

                                    const currentBidRangeText = modal.querySelector(".modal-header p:nth-of-type(2)").textContent;
                                    const currentBidRangeValue = currentBidRangeText.match(/\d+(\.\d+)?/)[0];
                                    const currentBidRangeValueInt = parseInt(currentBidRangeValue);

                                    currentBidValueInt=currentBidValueInt+currentBidRangeValueInt-1;


                                    //const bidbutton = document.querySelector(".js-bid-now-btn");
                                    searchBar.focus();
                                      searchBar.addEventListener("keyup", () => {
                                        let searchTerm = searchBar.value;

                                        console.log(currentBidValueInt);
                                        console.log(currentBidValue);
                                        console.log(currentBidRangeValue);

                                        if(searchTerm == ""){
                                          const result = " ";
                                        outputDiv.textContent = result;
                                        outputDiv2.textContent = result;
                                        }



                                        else if(isNaN(searchTerm)){
                                        const result = " ";
                                        outputDiv.textContent = result;
                                        outputDiv2.textContent = result;
                                        }


                                        else if(searchTerm<=currentBidValueInt){
                                        const result = searchTerm;
                                        outputDiv.textContent = "Try higher amount Than  " + result+" .00";
                                        outputDiv2.textContent = " ";
                                        }
                                        else{
                                          const result = searchTerm;
                                        outputDiv.textContent = " ";
                                        outputDiv2.textContent =  result+" .00 Is Acceptable";
                                        }
                                        
                                      });
                                        

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

        
            




  






    </script> 

    <script type="text/javascript">var name = "<?= $name ?>";</script> 


    <script>




  // searchBar.addEventListener("keyup", () => {
  //   let searchTerm = searchBar.value;
  //   console.log("Pamith");
  // });
</script>

</body>

</html>