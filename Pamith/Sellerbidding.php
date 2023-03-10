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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="topnav">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="topnav-options">
                <!-- <a class="active" href="#home">Home</a> -->
                <a href="#orders" id="my-orders">My Orders</a>
                <a href="#cart"><i class="fa fa-shopping-cart" style="font-size:18px"></i></a>
                <a href="#notifi"><i class="fa fa-bell" style="font-size:18px"></i></a>
                <!-- <a href="#profile"> -->
                    <img src="images/user.jpg" alt=""> 
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
                  <button><img class="Feed1"  src="images/feed1.png"><span> Feed</span></button><br>
                  <button><img class="Bidding1"  src="images/Bidding1.png"><span> Bidding</span></button><br>
                  <button><img class="Bidding1"  src="images/wishlist1.png"><span> Wishlist</span></button><br>
                  <button><img class="Requests1"  src="images/flag.png"><span> Requests</span></button><br>
              </div>
              <div class="message">
                  <!-- <hr><label>Message</label> -->
                  <hr><p>Message</p><br>
                  <!-- <img class="message-bar" src="images/message-bar.png"> -->
                  <div class="message-box">

                    <div class="message0">
                      <div class="message1">
                        <img src="images/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="images/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="images/vimukthi.jpg" alt="">
                      </div>
                      <div class="message2">
                        <label for="">Vimukthi Dulnath</label>
                      </div>
                    </div>

                    <div class="message0">
                      <div class="message1">
                        <img src="images/vimukthi.jpg" alt="">
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
                <div class="page-selector">
                    <button class="active" onclick="window.location.href = 'index.html';">All</button>
                    <button onclick="window.location.href = 'index2.html';">My Bids</button>
                </div>
                <div class="main-content">
                    <div class="bidding-post">
                        <div class="image">
                          <img src="images/carrot1.jpg">
                        </div>
                        <div class="info">
                          <div class="name-size-place">
                            <label><span style="color: #000000;">Carrot&nbsp; </span>1 KG</label><br>
                            <p><img src="images/map-pin.svg" alt="">&nbsp; Nuwara Eliya</p>
                          </div>
                          <div class="price">
                            <h5 class="initial-price">RS 430</h5>
                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS 530</h3>
                          </div>
                          <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;16 September 2022</p></div>
                          <div class="days">
                            <p class="remain">8 days remaining</p>
                            <p class="ends-on">Ends on 15 September 2022</p>
                            </div>
                          <div class="bid-now">
                            <button id="openModalBtn">Bid Now</button>
                          </div>
                        </div>
                      </div>
                      <div class="bidding-post">
                        <div class="image">
                          <img src="images/carrot1.jpg">
                        </div>
                        <div class="info">
                          <div class="name-size-place">
                            <label><span style="color: #000000;">Carrot&nbsp; </span>1 KG</label><br>
                            <p><img src="images/map-pin.svg" alt="">&nbsp; Nuwara Eliya</p>
                          </div>
                          <div class="price">
                            <h5 class="initial-price">RS 430</h5>
                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS 530</h3>
                          </div>
                          <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;16 September 2022</p></div>
                          <div class="days">
                            <p class="remain">8 days remaining</p>
                            <p class="ends-on">Ends on 15 September 2022</p>
                            </div>
                          <div class="bid-now">
                            <button id="openModalBtn">Bid Now</button>
                          </div>
                        </div>
                      </div>
                      <div class="bidding-post">
                        <div class="image">
                          <img src="images/carrot1.jpg">
                        </div>
                        <div class="info">
                          <div class="name-size-place">
                            <label><span style="color: #000000;">Carrot&nbsp; </span>1 KG</label><br>
                            <p><img src="images/map-pin.svg" alt="">&nbsp; Nuwara Eliya</p>
                          </div>
                          <div class="price">
                            <h5 class="initial-price">RS 430</h5>
                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS 530</h3>
                          </div>
                          <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;16 September 2022</p></div>
                          <div class="days">
                            <p class="remain">8 days remaining</p>
                            <p class="ends-on">Ends on 15 September 2022</p>
                            </div>
                          <div class="bid-now">
                            <button id="openModalBtn">Bid Now</button>
                          </div>
                        </div>
                      </div>
                      <div class="bidding-post">
                        <div class="image">
                          <img src="images/carrot1.jpg">
                        </div>
                        <div class="info">
                          <div class="name-size-place">
                            <label><span style="color: #000000;">Carrot&nbsp; </span>1 KG</label><br>
                            <p><img src="images/map-pin.svg" alt="">&nbsp; Nuwara Eliya</p>
                          </div>
                          <div class="price">
                            <h5 class="initial-price">RS 430</h5>
                            <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS 530</h3>
                          </div>
                          <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;16 September 2022</p></div>
                          <div class="days">
                            <p class="remain">8 days remaining</p>
                            <p class="ends-on">Ends on 15 September 2022</p>
                            </div>
                          <div class="bid-now">
                            <button id="openModalBtn">Bid Now</button>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>