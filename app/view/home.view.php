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
                    <h4>460</h4>
                </div>
                <div class="seller">
                    <h6>Sellers</h6>
                    <h4>345</h4>
                </div>
                <div class="deliverer">
                    <h6>Delivers</h6>
                    <h4>118</h4>
                </div>
                <div class="this-month"></div>
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
            <div class="responsive1">
                <div class="gallery">
                  <a target="_blank" href="img_5terre.jpg">
                    <img src="<?=ROOT?>/assets/images/home/carrot1.jpg" alt="img1" width="600" height="400">
                  </a>
                  <div class="desc">
                    <p style="font-weight: bold;">Carrot <span style="float: right; opacity: 80%;">RS. 130.00</span></p>
                    <p style="color: #0EBC1F;">1 KG <span style="float: right; color: #FB7A7A;">70% OFF</span></p>
                </div>
                </div>
              </div>
              
              
              <div class="responsive2">
                <div class="gallery">
                  <a target="_blank" href="img_forest.jpg">
                    <img src="<?=ROOT?>/assets/images/home/pinaple1.jpg" alt="img2" width="600" height="400">
                  </a>
                  <div class="desc">
                    <p style="font-weight: bold;">Pineapple <span style="float: right; opacity: 80%;">RS. 350.00</span></p>
                    <p style="color: #0EBC1F;">1 KG <span style="float: right; color: #FB7A7A;">60% OFF</span></p>
                  </div>
                </div>
              </div>
              
              <div class="responsive3">
                <div class="gallery">
                  <a target="_blank" href="img_lights.jpg">
                    <img src="<?=ROOT?>/assets/images/home/green-beans-bonchi.jpg" alt="img3" width="600" height="400">
                  </a>
                  <div class="desc">
                    <p style="font-weight: bold;">Beens <span style="float: right; opacity: 80%;">RS. 460.00</span></p>
                    <p style="color: #0EBC1F;">1 KG <span style="float: right; color: #FB7A7A;">50% OFF</span></p>
                  </div>
                </div>
              </div>
              
              <div class="responsive4">
                <div class="gallery">
                  <a target="_blank" href="img_mountains.jpg">
                    <img src="<?=ROOT?>/assets/images/home/tomato.jpeg" alt="img4" width="600" height="400">
                  </a>
                  <div class="desc">
                    <p style="font-weight: bold;">Tomato <span style="float: right; opacity: 80%;">RS. 399.00</span></p>
                    <p style="color: #0EBC1F;">1 KG <span style="float: right; color: #FB7A7A;">50% OFF</span></p>
                  </div>
                </div>
              </div>
        </div>
        <!-- <div class="featured">
            <div class="heading">
                <h2>Featured</h2>
            </div>
            <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_5terre.jpg">
                    <img src="img_5terre.jpg" alt="Cinque Terre" width="600" height="400">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>
              
              
              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_forest.jpg">
                    <img src="img_forest.jpg" alt="Forest" width="600" height="400">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>
              
              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_lights.jpg">
                    <img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>
              
              <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="img_mountains.jpg">
                    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
                  </a>
                  <div class="desc">Add a description of the image here</div>
                </div>
              </div>          
        </div> -->
        
    </div>
</body>
</html>