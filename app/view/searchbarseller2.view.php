<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Message page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/sellernavbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>

    
    <body>
        
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




    <div class="bg-modal" id="profile">
    <div class="modal-contents">
    <div class="view-profile1">
                
    <img class="profile1" src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>">     
    <button class="button1" type="sumbit" name="submit"  onclick="document.location='feed'">Buyer</button>         
    <button class="button2" type="sumbit" name="submit"  onclick="document.location='viewownprofile'">Profile</button>
    <button class="button3" type="sumbit" name="submit"  onclick="document.location='login'">Logout</button>            
       


      


    </div> 
    </div> 
    </div>                     
    </body>

<script src="<?=ROOT?>/assets/js/searchbarseller.js">
</script>
    
</html>
