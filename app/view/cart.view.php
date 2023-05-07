
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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/cart.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="topnav">
            <div class="logo">
                <img src="<?=ROOT?>/assets/images/cart/logo.png" altba="">
            </div>
            <div class="topnav-options">
                <!-- <a class="active" href="#home">Home</a> -->
                <a href="#orders" id="my-orders">My Orders</a>
                <a href="#cart"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
                <a href="#notifi"><i class="fa fa-bell" style="font-size:18px"></i></a>
                <!-- <a href="#profile"> -->
                    <img src="<?=ROOT?>/assets/images/cart/user.jpg" alt=""> 
                <!-- </a> -->
            </div>
                <div class="search-container">
                  <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
          </div>
        <div class="content">
            <div class="leftbar">
                <!-- <a href="#home"><i class="fa fa-rss"></i> Feed</a>
                <a href="#services"><i class="fa fa-dollar"></i> Bidding</a>
                <a href="#clients"><i class="fa fa-bookmark-o"></i> Wishlist</a>
                <a href="#contact"><i class="fa fa-flag-o"></i> Requests</a> -->

                <div class="menu">
                  <!-- <hr><label >Menu</label><br> -->
                  <hr><p>Menu</p><br>
                  <button><img class="Feed1"  src="<?=ROOT?>/assets/images/cart/feed1.png"><span> Feed</span></button><br>
                  <button><img class="Bidding1"  src="<?=ROOT?>/assets/images/cart/Bidding1.png"><span> Bidding</span></button><br>
                  <button><img class="Bidding1"  src="<?=ROOT?>/assets/images/cart/wishlist1.png"><span> Wishlist</span></button><br>
                  <button><img class="Requests1"  src="<?=ROOT?>/assets/images/cart/flag.png"><span> Requests</span></button><br>
              </div>
              <div class="message">
                  <!-- <hr><label>Message</label> -->
                  <hr><p>Message</p><br>
                  <!-- <img class="message-bar" src="images/message-bar.png"> -->
                  <div class="message-box">

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/cart/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>

                    </div>

                    <div class="message-footer">
                      <button>All Messages</button>
                    </div>

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
                            <!--button class="checkout-btn" name="checkout">Checkout</button-->
                            <?php echo '<button class="checkout-btn" name="btn['.$dat2->order_code.']/">Checkout</button>' ?>
                            <?php echo '<button name="del['.$dat2->order_code.']/"><i class="fas fa-trash-alt"></i></button>' ?>
                            <!--button name="del"><i class="fas fa-trash-alt"></i></button-->
                            </form>
                          </td>
                        </tr>
                        
                      </tbody>
                      <?php }
                        ?>
                    </table>
                    <?php foreach($data['b'] as $dat){ ?>
                    <div class="total-price">
                      <span>Rs. <?php echo($dat->total);  ?></span>
                    </div>
                    <?php }
                        ?>
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
