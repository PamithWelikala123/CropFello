<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Message page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/chat.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>

    
    <body>

    <div class="wrapper">
  
  <section class="users">
  
    <header>
      <div class="content">

        <!-- getting details from the database and use them -->

        <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt="">
        <div class="details">
          <span><?php echo $data['first_name']. " " . $data['last_name'] ?></span>
          <p><?php echo $data['status'];  ?></p>
        </div>
      </div>
      <!-- connecting to the logout page -->
     
   <!-- <a href="php/logout.php?logout_id=<?php// echo $data['user_id']; ?>" class="logout">Logout</a> -->
    <img style="width:35%; border-radius: 0%" src="<?=ROOT?>/assets/images/login page/logo.png">
   
    </header>
    <div class="search">
      <span class="text">Select an user to start chat</span>
      <input type="text" placeholder="Enter name to search...">
      <button><i class="fas fa-search"></i></button>
    </div>
    <div class="users-list">

    </div>
  </section>
</div>

  <script src="<?=ROOT?>/assets/js/chat_users.js"></script> 
    </body>
</html>
