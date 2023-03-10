
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
                      <button class="Feed" onclick="document.location='../selling'">Selling</button>
                      <img class="Feed1"  src="<?=ROOT?>/assets/images/selling/feed1.png">
                      <button class="Bidding" onclick="document.location='sellerbidding'">Bidding</button>
                      <img class="Bidding1"  src="<?=ROOT?>/assets/images/selling/Bidding1.png">
                      <button class="Requests" onclick="document.location='seller_allrequests'">Requests</button>
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
                      <button class="All-request" onclick="document.location='seller_allrequests'">All</button>    
                      <button class="Approved" onclick="document.location='seller_approvedrequests'">Approved</button>
                  </div>

                  
                  <div class="Scroll-bar">
                  
                 
                            <?php foreach ($data as $row) :?>
                            <?php if($row->row_discard==0 && $row->approved==0):?>
                           <div class="posts">

                                <div class="top-line1">
                                               <img class="profile2" src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>"> 
                                               <div class="profile-name">
                                               <?php echo $row->first_name ?>
                                              <?php echo $row->last_name ?>
                                               </div>
                                                
                                </div>
                                <div class="bottom-line">
                                        <div class="infor">
                                                    <?php echo $row->first_name ?>
                                                    <?php echo $row->last_name  ?>
                                                    wants
                                                    <?php echo $row->item_name ?>
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
                                        <?php echo $row->item_name ?><br>
                                        <?php  echo $row->amount ?><?php  echo $row->unit; ?> <br>
                                        <?php  echo $row->date ?><br>
                                        <?php  echo $row->city; ?>

                                        </p>


                                      <button class="update" id="<?=$row->post_id?>" onclick="updatenotify()">Approve</button>
                                      <button class="delete" id="<?=$row->post_id?>" onclick="discard()">Discard</button>
                                            
                                  
                                        

                                         
                                </div>

                            </div> 
                          <?php endif; ?>         
                          <?php endforeach; ?>
                          
                  
    


          </div>
         
                   

    </div>
 


  </body>

  <script>
function updatenotify(){
            
          
          //notify();
          update();

}


function notify(){

  const images = document.querySelectorAll('.update');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = 'notification_seller?id='+id;
    });
  });

}


function update(){
  

  const images = document.querySelectorAll('.update');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = 'approve?id='+id;
    });
  });

}


function discard(){

const images = document.querySelectorAll('.delete');
images.forEach(function(image) {
  image.addEventListener('click', function() {
    const id = this.id;
    window.location.href = 'discard?id='+id;
  });
});

}



</script>

</html>

