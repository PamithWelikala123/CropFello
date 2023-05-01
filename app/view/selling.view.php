
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

  <div class="container">

           <?php
        
            require APPROOT."/view/searchbarseller2.php";
          
          ?>
          <div class="main">
                          <div class="main-content">
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

