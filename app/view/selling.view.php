
<!DOCTYPE html>
<html>
  <head>
    <title>
     Selling
    </title>
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/selling.css">
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
                      <button class="Bidding" onclick="document.location='Bidding/sellerbidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/selling/Bidding1.png">
                      <button class="Requests" onclick="document.location='requests/seller_allrequests'">Requests</button>
                      <img class="Requests1"  src="<?=ROOT?>/assets/images/selling/flag.png">
                    </div>

                    <img class="line1"  src="pics\feed\line.png">
                    <label class="Message">Message</label>
                  

          </div>


          <div style="display : grid; grid-template-rows: 10% 90%; ;">
                  <div class="top-line">
                          <?php require APPROOT."/view/searchbarseller.php"?>
                          
                  </div>


                  
                  <div class="Scroll-bar">
                  <a href="postitem"><img class="plus"  src="<?=ROOT?>/assets/images/selling/plus.png"></a>
                  <?php if ($data) : ?>               
                  <?php foreach ($data as $row) : ?>        
                           <div class="posts">
                                <div class="post">
                                        <div class="post-preview">
                                        <img class="img" src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>" width = 200px height= 200px; title="<//?php //echo $row['image']; ?>">
                                        </div>
                                        
                                        <div class="post-info">
                                          <div class="post-type">
                              
                                             <?php echo $row->item_name; ?> 
                                              
                                          </div>
                                          <div class="post-price">
                                                Rs.
                                                <?php echo $row->price; ?>
                                          </div>

                                      </div>
                                        <div class="post-info">
                                          <div class="post-size">
                                               1
                                                <?php echo $row->unit; ?>

                                          </div>
                                          <div class="post-discount">

                                          <?php echo $row->discount; ?>
                                          <?php echo $row->discount1; ?>
                                          OFF
                                          </div>

                                        </div>

                                </div>

                           </div> 

                          <?php endforeach; ?>
                          <?php endif; ?>   
                          
 
                          
 
                  </div>
                  
    


          </div>
         
                   

    </div>
 


  </body>
</html>

