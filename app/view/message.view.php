<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Message page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/message1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>

    
    <body>
    <?php if ($data) : ?>               
                
                    <div class="wrapper">
                    <section class="users">
                    <header>
                        <div class="content">
                        
                        <!-- ///<img src="php/images/<?php //echo $row['img']; ?>" alt=""> -->
                        <div class="details">
                            <span><?php echo $data['first_name']. " " . $data['last_name'] ?></span>
                            <!-- <p><?php // echo $row['status']; ?></p> -->
                        </div>
                        </div>
                        <!-- <a href="php/logout.php?logout_id=<?php //echo $row['unique_id']; ?>" class="logout">Logout</a> -->
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

 <?php endif; ?>

                <script src="<?=ROOT?>/assets/css/message.js"></script> 
    </body>
</html>
