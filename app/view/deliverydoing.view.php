<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deliverydoing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydoing1.css">
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">

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
                  <button onclick="document.location='deliverytodo/view1'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/todo.png"><span> To Do</span></button><br>
                  <button onclick="document.location='deliverydoing/index'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/doing.png"><span> Doing</span></button><br>
                  <button onclick="document.location='deliverydone'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/done.png"><span> Done</span></button><br>
                  <button onclick="document.location='deliveryfee'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/fee.png"><span> Fee</span></button><br>
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









 
        </div>
        
    </div>


</body>

</html>