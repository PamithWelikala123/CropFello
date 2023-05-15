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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/waiting.css">
</head>
<body>




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
                <div class="page-selector">
                    <button class="active">Waiting Orders</button>
                    <button onclick="window.location.href = '<?=ROOT?>/feed/waiting1';">Ended Orders</button>
                </div>
                
                <div class="main-content">
                <?php if(isset($data) && !empty($data)) {?>
                    <?php foreach($data as $dat){ ?>
                    <div class="post">
                        <div class="left">
                          <div class="upper-left">
                          
                            <img src="<?=ROOT?>/assets/images/Post-images/<?php echo($dat->image);  ?>" alt="Product Image">
                          </div>
                          
                          <div class="upper-right">
                            <h2><?php echo($dat->item_name);  ?><span class="green">&nbsp; <?php echo($dat->qua);  ?> <?php echo($dat->unit);  ?></span></h2>
                            <p class="para">Price : RS. <?php echo($dat->price);  ?></p>
                            <p class="para">Delivery Cost : RS. <?php echo($dat->del_price);  ?></p>
                            <p class="para">Full Amount : RS. <?php echo($dat->tot);  ?></p>
                          </div>
                          <div class="lower">
                            <p class="para">Placed On: <?php echo($dat->placed_on);  ?></p>
                            <p class="para exp">EXP: <?php echo($dat->exp);  ?></p>
                          </div>
                          
                        </div>


                        <div class="right">
                        <?php if(($dat->approved)==0) {?>
                          <h2>Delivery status: <span class="green">Pending</span></h2>
                          <?php } else {?>
                            <h2>Delivery status: <span class="green">Approved</span></h2>
                          <?php } ?>
                          <div class="buttons">
                          <?php if(($dat->approved)==0) {?>
                              <button class="request-deliverer" id="<?=$dat->id?>">Request Deliverer</button>
                              <button class="proceed-to-checkout" disabled>Proceed to checkout</button>
                            <?php } else {?>
                                    <button class="request-deliverer-x" id="openModalBtn"disabled>Request Deliverer</button>
                                    <!--button class="proceed-to-checkout-x" name="">Proceed to checkout</button-->
                                    <form method="post">
                                    <?php echo '<button class="proceed-to-checkout-x" name="procheck['.$dat->order_code.']/">Proceed to checkout</button>' ?>
                                    </form>
                              <?php } ?>
                          </div>
                          
                        </div>
                      </div>


                      <div id="modal-<?=$dat->id?>" class="modal">
                                  <div class="modal-content">

                                        <div class="modal-header">
                                          <span class="closeBtn">&times;</span>
                                          <h2>Enter your Requesting Value</h2>
                                          <p>Current Delivery Fee: RS <?php echo($dat->del_price);  ?>.00</p>
                                          <div class="output" id="output"></div>
                                          <div class="output2" id="output2"></div>
                                        </div>  


                                        <div class="modal-body" id='modal-body-<?=$dat->id?>'>
                                                        
                                                  <form method="post" autocomplete="off" action='newdelprice'>
                                                    <label> RS: &nbsp;</label>
                                                                    
                                                    <input type="text" placeholder="Enter your request value" name="delvalue"><label>&nbsp;.00</label>
                                                      <input type="hidden" value='<?=$dat->id?>' name='abc'>
                                                      <button type="submit" name="submit" id='myButton'>Request Now</button>


                                                  </form>
                                        </div>

                                   </div>
                      </div>


                      <?php }
                        ?>


                            <?php }?>
  
                </div>
                
            </div>
        </div>
        
    </div>


    <script>   



var modal;

const images = document.querySelectorAll('.request-deliverer');
      images.forEach(function(image) {
        image.addEventListener('click', function() {
          // console.log(image['id']);      
          modal = document.getElementById('modal-' + image['id']);
          modal.style.display = "block";
          let id = image['id'];



                                const searchBar = modal.querySelector(".modal-body input");
                                const outputDiv = document.getElementById("output");
                                const outputDiv2 = document.getElementById("output2");
                                
                              
                                const currentBidText = modal.querySelector(".modal-header p").textContent;
                                const currentBidValue = currentBidText.match(/\d+(\.\d+)?/)[0];
                                let currentBidValueInt = parseInt(currentBidValue);
                                console.log(currentBidValueInt);

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
</body>
</html>