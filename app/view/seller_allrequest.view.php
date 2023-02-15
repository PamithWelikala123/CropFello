
<!DOCTYPE html>
<html>
  <head>
    <title>
     Seller_allrequest
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/sellerallrequest.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
     
      </style>
  </head>
  <body>
    <div style="display : grid; grid-template-columns: 21% 79%;">

          <div class="left-line"> 
                    <img class="Menu"  src="<?=ROOT?>/assets/images/selling/left.png">
                    <img class="logo"  src="<?=ROOT?>/assets/images/selling/logo.png">
                    <img class="line"  src="<?=ROOT?>/assets/images/selling/line.png">
                    <img class="message-bar" src="<?=ROOT?>/assets/images/selling/message-bar.png">
                    <label class="Menu1">Menu</label>

                    <div> 
                      <button class="Feed" onclick="document.location='selling'">Selling</button>
                      <img class="Feed1"  src="<?=ROOT?>/assets/images/selling/feed1.png">
                      <button class="Bidding" onclick="document.location='sellerbidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/selling/Bidding1.png">
                      <button class="Requests" onclick="document.location='Seller_allrequest'">Requests</button>
                      <img class="Requests1"  src="<?=ROOT?>/assets/images/selling/flag.png">
                    </div>

                    <img class="line1"  src="pics\feed\line.png">
                    <label class="Message">Message</label>
                  

          </div>


          <div style="display : grid; grid-template-rows: 10% 10% 80%; ;">
                  <div class="top-line">
                              <?php require APPROOT."/view/searchbarseller.php"?>
                  </div>

                  <div class="All-Approved">
                      <button class="All-request" onclick="document.location='seller_allrequest'">All</button>    
                      <button class="Approved" onclick="document.location='seller_approvedrequest'">Approved</button>
                  </div>

                  
                  <div class="Scroll-bar">
                  
                 
                            <?php foreach ($data as $row) :
                               ?>

                           <div class="posts">

                                <div class="top-line1">
                                               <img class="profile2" src="<?=ROOT?>/assets/images/seller_allrequest/profilepic.png"> 
                                               <div class="profile-name">
                                               <?php //echo $row->first_name ?>
                                              <?php //echo $row->last_name ?>
                                               </div>
                                                
                                </div>
                                <div class="bottom-line">
                                        <div class="infor">
                                                    <?php //echo $row->first_name ?>
                                                    <?php //echo $row->last_name  ?>
                                                    wants
                                                    <?php //echo $row->item_name ?>
                                                    in
                                                    <?php  echo $row->amount; ?>
                                                    <?php  echo $row->unit; ?>
                                                    (s)

                                        </div>
                                        

                                        <p class="content">
                                              Item   : <br>
                                              Amount : <br>
                                              Before :<br>
                                              To     : <br>
                                        </p>

                                        <p class="content1">
                                        <?php //echo $row->item_name ?><br>
                                        <?php  echo $row->amount ?><?php  echo $row->unit; ?> <br>
                                        <?php  echo $row->date ?><br>
                                        <?php  echo $row->city; ?>

                                        </p>


                                      <button class="update">Approve</button>
                                      <button class="delete">Discard</button>
                                            
                                  
                                        

                                         
                                </div>

                            </div> 
                                   
                          <?php endforeach; ?>
                          
                  
    


          </div>
         
                   

    </div>
 


  </body>
</html>

