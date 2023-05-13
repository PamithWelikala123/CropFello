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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydone.css">
</head>
<body>
    <div class="container">
        <div class="topnav">
            <div class="logo">
                <img src="images/logo.png" altba="">
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


            </div>
            <div class="main">
                <div class="page-selector">
                    <button class="active" onclick="window.location.href = 'index.html';">General</button>
                    <button onclick="window.location.href = 'index2.html';">Requests</button>
                </div>
                <div class="main-content">
                    <?php if ($data) : ?>
                        <?php foreach ($data as $row) : ?> 
                  
                  <div class="post">

                    <div class="post-header">
                      <img src="images/vimukthi.jpg" alt="Profile Picture" class="post-profile-pic">
                      <div class="post-header-info">
                        <div class="post-header-name">John Doe</div>
                        <div class="post-header-date">Posted on May 5, 2023</div>
                      </div>
                    </div>
                    <div class="post-content">
                      <div class="post-description">
                        
                        <table class="info-table">
                          <tr>
                            <td class="left-column">Item:</td>
                            <td class="right-column">Papaya</td>
                          </tr>
                          <tr>
                            <td class="left-column">Amount:</td>
                            <td class="right-column">2KG</td>
                          </tr>
                          <tr>
                            <td class="left-column">From:</td>
                            <td class="right-column">101, 1st Lane, Rathmaldeniya, Godagama, Colombo</td>
                          </tr>
                          <tr>
                            <td class="left-column">To:</td>
                            <td class="right-column">53/A, Samagi Mawatha, Thalawathugoda, Colombo</td>
                          </tr>
                          <tr>
                            <td class="left-column">Fee:</td>
                            <td class="right-column">RS. 350.00</td>
                          </tr>
                          <tr>
                            <td class="left-column">Delivered On:</td>
                            <td class="right-column">May 10, 2023</td>
                          </tr>
                        </table>
                        
                      </div>
                      <div class="post-buttons">
                        <button class="post-button approved-button">Delete&nbsp;<i class='fa fa-trash'></i></button>
                        <!-- <button class="post-button discard-button">Discard</button>
                        <button class="post-button map-button">View On Map&nbsp;
                          <i class='fa fa-map-marker'></i></button> -->
                      </div>
                      <!-- <p><span id="dots">.</span><span id="more">
                       
                            Item:   Papaya <br>
                            Amount: 2KG <br>
                            From:   101, 1st Lane, Rathmaldeniya, Godagama, Colombo <br>
                            To:     53/A, Samagi Mawatha, Thalawathugoda, Colombo <br>
                            Fee:    RS. 350.00 <br>

                      </span></p>
                      <button onclick="myFunction()" id="myBtn">More Info<br>&#8964;</button> -->

                    </div>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  
                </div>
            </div>
        </div>
        
    </div>

    <!-- <script>
      function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
      
        if (dots.style.display === "none") {
          dots.style.display = "inline";
          btnText.innerHTML = "More Info<br>&#8964;"; 
          moreText.style.display = "none";
        } else {
          dots.style.display = "none";
          btnText.innerHTML = "&#94;<br>Less Info"; 
          moreText.style.display = "inline";
        }
      }
      </script> -->
</body>
</html>