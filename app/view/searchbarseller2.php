<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navigation</title>
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/notification.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/profile.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bank.css">

</head>
<body>



<div id="bank-modal" class="bank-modal">
        <div class="bank-modal-content">
          <div class="bank-modal-header">
            <span class="bankCloseBtn">&times;</span>
            
          </div>
          <div class="bank-modal-body">
            <h3>Enter Bank Details</h3><br>
            
              <form action="/action_page.php">
                <label for="accountname">Name</label>
                <input type="text" id="accountname" name="accountname" placeholder="Enter your name in account">
            
                <label for="lname">Account Number</label>
                <input type="text" id="lname" name="lastname" >
            
                <label for="country">Bank</label>
                <select id="country" name="country" placeholder="freferg">
                  <option value="1">Bank of Ceylon (BOC)</option>
                  <option value="2">People's Bank</option>
                  <option value="3">Commercial Bank of Ceylon PLC</option>
                  <option value="4">Hatton National Bank (HNB)</option>
                  <option value="5">Sampath Bank PLC</option>
                  <option value="6">National Savings Bank (NSB)</option>
                  <option value="7">DFCC Bank</option>
                  <option value="8">Nations Trust Bank</option>
                  <option value="9">Union Bank of Colombo PLC</option>
                  <option value="10">Pan Asia Banking Corporation PLC</option>
                  <option value="11">Seylan Bank PLC</option>
                  <option value="12">Cargills Bank Limited</option>
                  <option value="13">Standard Chartered Bank</option>
                  <option value="14">HSBC Sri Lanka</option>
                  <option value="15">Citibank Sri Lanka</option>
                </select>

                <label for="country">Branch</label>
                <select id="country" name="country">
                  <option value="ampara">Ampara</option>
                  <option value="anuradhapura">Anuradhapura</option>
                  <option value="badulla">Badulla</option>
                  <option value="batticaloa">Batticaloa</option>
                  <option value="colombo">Colombo</option>
                  <option value="galle">Galle</option>
                  <option value="gampaha">Gampaha</option>
                  <option value="hambantota">Hambantota</option>
                  <option value="jaffna">Jaffna</option>
                  <option value="kalutara">Kalutara</option>
                  <option value="kegalle">Kegalle</option>
                  <option value="kilinochchi">Kilinochchi</option>
                  <option value="kurunegala">Kurunegala</option>
                  <option value="mannar">Mannar</option>
                  <option value="matale">Matale</option>
                  <option value="matara">Matara</option>
                  <option value="monaragala">Monaragala</option>
                  <option value="mullaitivu">Mullaitivu</option>
                  <option value="nuwaraeliya">Nuwara Eliya</option>
                  <option value="polonnaruwa">Polonnaruwa</option>
                  <option value="puttalam">Puttalam</option>
                  <option value="ratnapura">Ratnapura</option>
                  <option value="trincomalee">Trincomalee</option>
                  <option value="vavuniya">Vavuniya</option>
                </select>
              
                <input type="submit" value="Submit">
              </form>
            
              
            
          </div>
        </div>
      </div>



<?php
$filename = $_SESSION['filename'];
echo "<script>console.log('Filename: ".$filename."');</script>";
?> 
        <div class="topnav">

                <div class="logo">
                    <img src="<?=ROOT?>/assets/images/Topnavbar/logo.png" altba="">
                </div>


                <div class="topnav-options">
                    <!-- <a class="active" href="#home">Home</a> -->
                    
                    <a href=""><i class='fa fa-bank' id="bankOpenModalBtn"></i>
                    <a href="../Selling/mytransaction" id="my-orders">My Transactions</a>
                    <a class="notification-icon"><i class="fa fa-bell" style="font-size:18px"></i></a>
                    <span class="notification-count">7</span>
                    <a id="profmyBtn"><img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt=""> </a>
                    <!-- </a> -->
                </div>
                


                <!-- <div class="search-container"> -->
                  <!-- <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form> -->
                  <div class="search-bar">

                  <form action="../<?=$filename?>/search">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>

                  </div>
                <!-- </div> -->
        </div>


        <div class="notification-box">
                    <div class="notification-header" >
                    <h3>Notifications</h3>
                    <button class="close-btn"><img src="<?=ROOT?>/assets/images/notification/close.svg" alt=""></button>
                    </div>
                    <div class="notification-list"></div>
        </div>




          <!-- The Modal -->
          <div id="profmyModal" class="profmodal">

            <!-- Modal content -->
            <div class="profmodal-content">
              <span class="profclose">&times;</span>
              <div class="profmodal-upper">
                <img class="profprofile-picture" src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>">
                <div class="profname"><?=$_SESSION['USER']->first_name?> <?=$_SESSION['USER']->last_name?></div>
              </div>
              <div class="profmodal-lower">
                <button id="sellBtn" onclick="document.location='../feed/feed'">Buy</button>
                <div class="profvertical-line"></div>
                <button id="profileBtn" onclick="document.location='../Profile'">Profile</button>
                <div class="profvertical-line"></div>
                <button id="logoutBtn"  onclick="document.location='../logout'">Logout</button>
              </div>
            </div>

          </div>


        
<div class="content">
            <div class="leftbar">
                <div class="menu">
                  
                  <hr><p>Menu</p><br>
                  <button onclick="document.location='../selling/selling'"><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span>selling</span></button><br>
                  <button onclick="document.location='../bidding/sellerbidding'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Bidding</span></button><br>
                  <button onclick="document.location='../requests/seller_approvedrequests'"><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Requests</span></button><br>
                  <button style="display: none;" onclick="document.location='../wishlists/buyerwishlist'"><img class="Bidding1"><span></span></button><br>
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

<script>
  
</script>



<script src="<?=ROOT?>/assets/js/notification.js"></script> 
<script src="<?=ROOT?>/assets/js/profile.js"></script> 
<script src="<?=ROOT?>/assets/js/bank.js"></script> 
<script type="text/javascript" src="<?=ROOT?>/assets/js/search.js"></script> 





</body>
</html>