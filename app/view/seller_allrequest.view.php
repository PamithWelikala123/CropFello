
<!DOCTYPE html>
<html>
  <head>
    <title>
     Seller_allrequest
    </title>
    <!-- <link rel="Stylesheet" href="<?=ROOT?>/assets/css/sellerallrequest.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="Stylesheet" href="<?=ROOT?>/assets/css/buyerrequest.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/sellerallrequest.css">
    <style>
     
      </style>
  </head>
  <body>


  <div class="container">

           <?php
        
            require APPROOT."/view/searchbarseller2.php";
          
          ?>
          <div class="main">
          <div class="page-selector">
                    <button class="active" onclick="window.location.href = '../Requests/seller_allrequests';">All</button>
                    <button onclick="window.location.href = '../Requests/seller_approvedrequests';">Approved</button>
                </div>
                          <div class="main-content">
                          <?php if($data) :    ?>
                           <?php foreach ($data as $row) :?>

                            <?php if($row->row_discard==0 && $row->approved==0 && $row->seller_id!=$_SESSION['USER']->user_id):?>



                                      <div class="post">
                                  
                                            <div class="post-header">
                                              <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" alt="Profile Picture" class="post-profile-pic">
                                                  <div class="post-header-info">
                                                    <div class="post-header-name">
                                                      <?php echo $row->first_name ?>
                                                       <?php echo $row->last_name ?>
                                                      </div>
                                                    <div class="post-header-date">Posted on May 5, 2023</div>
                                                  </div>
                                            </div>


                                            <div class="post-content">
                                              <div class="post-description">
                                                
                                                <table class="info-table">
                                                  <tr>
                                                    <td class="left-column">Item:</td>
                                                    <td class="right-column"><?php echo $row->item_name ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">Amount:</td>
                                                    <td class="right-column"><?php  echo $row->amount ?><?php  echo $row->unit; ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">Before:</td>
                                                    <td class="right-column"><?php  echo $row->date ?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">To:</td>
                                                    <td class="right-column"><?php  echo $row->city; ?></td>
                                                  </tr>
                                                </table>
                                                
                                              </div>


                                              <div class="post-button post-buttons">
                                                <button class="approved-button" id="<?=$row->post_id?>"   onclick="updatenotify()" >Approve</button>
                                              
                                                <button class="delete-button" id="<?=$row->post_id?>" onclick="discard()" >Discard&nbsp;

                                                  <i class='fa fa-trash'></i></button>
                                              </div>


                                            </div>
                                </div>
                                

                                <?php endif; ?>                                                             
                         <?php endforeach; ?>
                                                                            
                    <?php endif;?>
                                                                            
                                                  
</div>
</div>
</div>



  </body>

  <script>
function updatenotify(){
            
          
          //notify();
          update();

}


function notify(){

  const images = document.querySelectorAll('.approved-button');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = 'notification_seller?id='+id;
    });
  });

}


function update(){
  

  const images = document.querySelectorAll('.approved-button');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = 'approve?id='+id;
    });
  });

}


function discard(){

const images = document.querySelectorAll('.delete-button');
images.forEach(function(image) {
  image.addEventListener('click', function() {
    const id = this.id;
    window.location.href = 'discard?id='+id;
  });
});

}



</script>

</html>

