<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Message page
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/searchbarseller.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>

    
    <body>
    <div class="bg-modal1">
                         <img class="top"  src="<?=ROOT?>/assets/images/selling/top.png"> 
                          <input class="Search" type="textbox" placeholder="Search">
                          <img class="Search1"  src="<?=ROOT?>/assets/images/selling/search.png">
                          <label class="My-trans">My Transactions</label>
                          <img class="bell" src="<?=ROOT?>/assets/images/selling/bell.png">
                          <img class="active" src="<?=ROOT?>/assets/images/selling/active.png"> 
                          <img class="profile" id="profile" src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>"> 

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
