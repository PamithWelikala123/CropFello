<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deliverytodo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverytodo1.css">
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/notification.css">
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
                  <button onclick="document.location='view1'"><img class="Feed1"  src="<?=ROOT?>/assets/images/feed/feed1.png"><span>To Do</span></button><br>
                  <button onclick="document.location='../deliverydoing'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/Bidding1.png"><span> Doing</span></button><br>
                  <button onclick="document.location='../deliverydone'"><img class="Bidding1"  src="<?=ROOT?>/assets/images/feed/heart1.png"><span> Done</span></button><br>
                  <button onclick="document.location='../deliveryfee'"><img class="Requests1"  src="<?=ROOT?>/assets/images/feed/flag.png"><span> Fee</span></button><br>
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
            <div class="containerx">
                    <div class="item item-1">
                      <img class="profile-pic" src="<?=ROOT?>/assets/images/rushinpics/pics/man1.png">
                      <?php if($data) :    ?>
                            <?php foreach ($data as $row) :
                               ?>
                      <p class="nam"><?php echo $row->first_name ?>
                                     <?php echo $row->last_name ?></p><br>
                      <p class="date">3 September 2022</p>

                    </div>
                    <div class="item item-2">
                    <h2 class="head"> <?php echo $row->first_name ?><?php echo $row->last_name  ?>&nbsp wants to deliver&nbsp <?php echo $row->item_name ?> &nbsp <?php  echo $row->amount; ?> &nbsp<?php  echo $row->unit; ?> &nbsp<br>from <?php  echo $row->fro; ?> &nbsp to <?php  echo $row->too; ?> &nbsp</h2>

                      <table class="table">

                        <tr>
                          <td>Item:</td>
                          <td><font color="#0C7417"><?php echo $row->item_name ?></td>
                        </tr>

                        <tr>
                          <td>Amount:</td>
                          <td><font color="#0C7417"><?php  echo $row->amount ?><?php  echo $row->unit; ?></td> 
                        </tr>

                        
                        <tr>
                          <td>From:</td>
                          <td><font color="#0C7417"><?php  echo $row->fro; ?></td> 
                        </tr>

                        
                        <tr>
                          <td>To:</td>
                          <td><font color="#0C7417"><?php  echo $row->too; ?> </td> 
                        </tr>                        
                        <tr>
                          <td>Fee:</td>
                          <td><font color="#0C7417">Rs.350.00</td> 
                        </tr>

                        
                        <tr>
                          <td>Vehicle Type:</td>
                          <td><font color="#0C7417"><?php  echo $row->vname; ?> </td> 
                        </tr>
                      </table>

                      <button class="Approve btn1">Approve &nbsp  &#10004</button>
                      <button class="Discard btn2">Discard &nbsp &#xf00d </button>
                    </div>
              
                  </div> 
                  <?php endforeach; ?>
                          
                        <?php endif;?>               
            </div>
        </div>
        
    </div>

    <?php
    $crop_list='';
    $item = new item;
    $rows3 = $item->findAll();
    foreach($rows3 as $result){
      $crop_list .="<option value=\"{$result->item_id}\">{$result->name}</option>";

    }
    ?>


<script>
  document.getElementById('plus').addEventListener("click", function() {
	document.querySelector('.bg-modal-4').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal-4').style.display = "none";

});


// function delete1(){

// const images = document.querySelectorAll('.delete');
// images.forEach(function(image) {
//   image.addEventListener('click', function() {
//     const id = this.id;
//     window.location.href = 'delete?id='+id;
//   });
// });

// }
</script>
    <script src="<?=ROOT?>/assets/js/notification.js"></script> 
    
</body>

</html>