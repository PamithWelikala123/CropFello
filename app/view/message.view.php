<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Message page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/message.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>

    
    <body>
                    
      <?php if ($data) : ?>   
      <?php foreach ($data as $row) : ?>  
        <button onclick="document.location='../chat/chat1?user_id=<?=$row->outgoing_msg_id?>'">
                      <div class="message0">
                      
                      <div class="message1">
                        <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$row->image?>" alt="">
                      </div>
                      <div class="message2">
                        <label for=""><?=$row->first_name?> <?=$row->last_name?><br><?=$row->msg?></label>
                      </div>
                     
                    </div>
          </button>


            <?php endforeach; ?>
            <?php endif; ?>

      <div class="message-footer">
               <button onclick="document.location='../chat/chat_search'">Message</button>
      </div>           
    </body>
</html>
