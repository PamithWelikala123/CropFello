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
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliveryfee1.css">
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
                  <button onclick="document.location='deliverytodo'"><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span> Todo</span></button><br>
                  <button onclick="document.location='deliverydoing'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Doing</span></button><br>
                  <button onclick="document.location='deliverydone'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/heart1.png"><span> Done</span></button><br>
                  <button onclick="document.location='deliveryfee'"><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Fee</span></button><br>
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
            <div class="item item3">
            <div class="To">
                <label for="to">To <span style="color:red">&#9913 </span></label><br>
                <!-- <input type="text" id="name" name="to" placeholder="Pick up location" class="tb1"> -->
                <select name="plan" id="plan" class="tb1" style="color:#4DEA25; overflow-y:scroll; overflow:hidden">
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                </select>
            </div>
            <div class="From">
                <label for="from">From <span style="color:red">&#9913 </span></label><br>
                <!-- <input type="text" id="name" name="from" placeholder="Drof off location" class="tb1"> -->
                <select name="plan" id="plan" class="tb1" style="color:#4DEA25" >
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                </select>
            </div>
            <div class="Vtype">
                <label for="vtype">Vehicle Type <span style="color:red">&#9913 </span></label><br>
                <input type="email" id="email" name="email" class="tb1">

                <button type="button" class="tb2">Calculate Fee</button>
            </div>

        </div>
            </div>
        </div>
        
    </div>


    <script>
          // Get the modal
      var modal = document.getElementById("modal");
      
      // Get the button that opens the modal
      var btn = document.getElementById("openModalBtn");
      
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("closeBtn")[0];
      
      // When the user clicks the button, open the modal 
      btn.onclick = function() {
        modal.style.display = "block";
      }
      
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
      
    </script>
</body>

</html>