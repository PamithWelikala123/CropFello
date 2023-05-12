
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cart.css">

    <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>




    <title>View Post</title>


<style>
    
    #map {
           width: 100%;
           height: 900px;
           border-radius: 10px;
           display: none;
       }
       .map-container{
           width: 100%;
           height: 80%;
           border-radius: 10px;
           margin-top: 2%;
       }
</style>


  </head>
<body onload="initMap()">



<script>
    


let marker;
function initMap() {


                    var start = new google.maps.LatLng(<?php echo json_encode($data['platitude']); ?>,<?php echo json_encode($data['plongitude']); ?>);
                   var destination=new google.maps.LatLng(<?php echo json_encode($data['sel_lati']); ?>,<?php echo json_encode($data['sel_longi']); ?>);

                    var map = new google.maps.Map(document.getElementById('map'), {
                    center: start,
                    zoom: 15,
                    });


                    var directionsService = new google.maps.DirectionsService();
                    var directionsRenderer = new google.maps.DirectionsRenderer();
                    directionsRenderer.setMap(map);

                    var request = {
                    origin: start, 
                    destination: destination, 
                    travelMode: 'DRIVING' 
            };

            


            directionsService.route(request, function(result, status) {
              if (status === 'OK') {
                directionsRenderer.setDirections(result);
                var distance = result.routes[0].legs[0].distance.text;
                var x=distance[0]+distance[1]+distance[2]+distance[3];
                document.getElementById('distance').value=x;
                console.log('distance= '+x);
              }
            });
          }





</script>

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
                <!-- <div class="page-selector">
                    <button class="active" onclick="window.location.href = 'index.html';">All</button>
                    <button onclick="window.location.href = 'index2.html';">My Bids</button>
                </div> -->
                <div class="main-content">

                  <div class="cart">
                    <table class="cart-table">
                    
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Quantity</th>
                          <th></th>
                          <th>Price</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                      
                        <tr>
                          <?php if ($data['a']) {?>
                        <?php foreach($data['a'] as $dat2){ ?>
                          <td>
                            <div class="product">
                            <img src="<?=ROOT?>/assets/images/Post-images/<?php echo($dat2->image);  ?>" alt="Product Image">
                              <span class="product-name"><br><span class="seller-name"> 
                        <div><?php echo($dat2->item_name)?>  </div></span></span>
                            </div>
                          </td>
                          <td>
                            <span class="quantity-text"><?php echo($dat2->qua);  ?> <?php echo($dat2->unit);  ?></span>
                          </td>
                          <td>
                            <!--div class="quantity">
                              <button class="minus-btn" type="button">-</button>
                              <input type="text" class="quantity-input" value="1">
                              <button class="plus-btn" type="button">+</button>
                            </div-->
                          </td>
                          <td>
                            <span class="price">Rs. <?php echo($dat2->price);  ?></span>
                          </td>
                          <td><form method="post">
                            <input type="hidden" name="distance" id="distance" value="">
                            <!--button class="checkout-btn" name="checkout">Checkout</button-->
                            <?php echo '<button class="checkout-btn" name="btn['.$dat2->order_code.']/">Checkout</button>' ?>
                            <?php echo '<button name="del['.$dat2->order_code.']/"><i class="fas fa-trash-alt"></i></button>' ?>
                            <!--button name="del"><i class="fas fa-trash-alt"></i></button-->
                            </form>
                          </td>
                        </tr>
                        
                      </tbody>
                      <?php } ?>
                      <?php } ?>
                    </table>
                    <?php if(isset($data['b']) && !empty($data['b'])) {?>
                    <?php foreach($data['b'] as $dat){ ?>
                      <div class="total-price">
                        <span>Rs. <?php echo $dat->total; ?></span>
                      </div>
                    <?php }?>
                  <?php } else {?>
                    <div class="total-price">
                      <span>Rs. 0.00</span>
                    </div>
                  <?php } ?>

                  </div>
                  
                  

                </div>
            </div>
        </div>
        
    </div>

    <script>
      // Get all quantity input fields
const quantityInputs = document.querySelectorAll('.quantity-input');

// Loop through all input fields
quantityInputs.forEach(input => {
  // Get the associated plus and minus buttons
  const plusBtn = input.nextElementSibling;
  const minusBtn = input.previousElementSibling;

  // Add click event listener to plus button
  plusBtn.addEventListener('click', () => {
    // Increase the quantity by 1
    input.value = parseInt(input.value) + 1;
  });

  // Add click event listener to minus button
  minusBtn.addEventListener('click', () => {
    // If quantity is already 1, do not decrease it further
    if (parseInt(input.value) > 1) {
      // Decrease the quantity by 1
      input.value = parseInt(input.value) - 1;
    }
  });
});

    </script>
</body>
</html>
