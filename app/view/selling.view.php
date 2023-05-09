
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
                                                                  <div class="overlay-selling">
                                                                        <div class="text-selling">
                                                                            <label>Edit</label><br>
                                                                            <label id="openModalBtn-selling" >Delete</label>
                                                                        </div>
                                                                    </div>
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


                                            <div id="modal-selling" class="modal-selling" >
                                                  <div class="modal-content-selling">
                                                    <div class="modal-header-selling">
                                                      <span class="closeBtn-selling">&times;</span>
                                                      <h2>Delete Post</h2>
                                                      <p>Are you sure you want to delete this post?</p>
                                                    </div>
                                                    <div class="modal-body-selling">
                                                      <button class="delete-selling">Delete</button>
                                                      <button  class="cancel-selling">Cancel</button>  
                                                    </div>
                                                  </div>
                                                </div>

                                            <?php endforeach; ?>
                                            <?php endif; ?>   
                                  
        
                                  
        
                          </div>
                          
            


          </div>
                
                   

    </div>
 
<script>
  // Get the modal
var modal = document.getElementById("modal-selling");

// Get the button that opens the modal
var btn = document.getElementById("openModalBtn-selling");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closeBtn-selling")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
  modal.style.display = "none";
}
}

</script> 

  </body>
</html>

