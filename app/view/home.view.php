<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/home.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="<?=ROOT?>/assets/images/home/logo.png" alt="cropfello logo">
            </div>
            <div class="search">
                <!-- <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form> -->
            </div>
            <div class="account">
              <a href="login">
              <button href="login" style="font: size 12px;">Account <img src="<?=ROOT?>/assets/images/home/user.png" alt="user"></button>
              </a>
               
            </div>
        </div>
        <div class="stats">
            <div class="left">
                <div class="buyer">
                    <h6>Buyers</h6>
                    <h1><?=$data['buyercount']?> <img src="<?=ROOT?>/assets/images/home/buyer.png" alt="user"></h1>
                </div>
                <div class="seller">
                    <h6>Sellers</h6>
                    <h1><?=$data['sellercount']?> <img src="<?=ROOT?>/assets/images/home/shop.png" alt="user"></h1>
                </div>
                <div class="deliverer">
                    <h6>Deliverers</h6>
                    <h1><?=$data['deliverycount']?> <img src="<?=ROOT?>/assets/images/home/delivery.png" alt="user"></h1>
                </div>
                <div class="this-month">
                    <h3>This Month</h3>
                    <h5>Most Searched: <span class="green">Banana</span>  &emsp;&emsp;&emsp;&emsp; Most Selling: <span class="green">Beans</span> </h5>
                </div>
            </div>
            <div class="right">
                <div class="season">
                    <img src="<?=ROOT?>/assets/images/home/SEASON.png" alt="SEASON">
                    <h3>Mangoseteen</h3>
                </div>
                <div class="details">
                    <div class="price">
                        <br><br>
                        <p>Average price: <span style="color: #4DEA25;">RS 620.00</span><span style="color: #CFE9C9">(1KG)</span></p>
                    </div>
                    <div class="crop-img">
                        <!-- <img src="images/mangosteen.png" alt="seasonal crop"> -->
                    </div>
                </div>
            </div>
            

        </div>

        <div class="offers">
            <div class="heading">
                <h2>Best Offers</h2>
            </div>
            <?php while ($data['count'] > 0) :?>
            <div class="responsive<?php $data['count']?>">
                <div class="gallery">
                  <a target="_blank" href="login">
                    <img src="<?=ROOT?>/assets/images/Post-images/<?=$data['image'.$data['count']]?>" alt="img1" width="600" height="400">
                  </a>
                  <div class="desc">
                    <p style="font-weight: bold;"> <?php echo $data['item_name'.$data['count']] ?><span style="float: right; opacity: 80%;">RS. <?php echo $data['price'.$data['count']] ?></span></p>
                    <p style="color: #0EBC1F;"><?php echo $data['size'.$data['count']]?> KG <span style="float: right; color: #FB7A7A;"><?php echo $data['discount'.$data['count']]?>% OFF</span></p>
                </div>
                </div>
            </div>
            <?php $data['count']=$data['count']-1;?>
            <?php endwhile;?>
              
              
        </div>

    </div>
</body>
</html>