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
    <section class="chat-area">
      <header>
        <a href="../chat/chat_search" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$data['image']?>" alt="">
        <div class="details">
          <span><?php echo $data['first_name']. " " . $data['last_name'] ?></span>
          <p><?php echo $data['status']; ?></p>
        </div>
        <img style="width:33%; border-radius: 0%; margin-left=2%" src="<?=ROOT?>/assets/images/login page/logo.png">
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $data['user_id']; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>


  <script src="<?=ROOT?>/assets/js/chat.js"></script> 
    </body>
</html>
