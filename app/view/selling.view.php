
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
                                                                            <label class="selling-post-exp">EXP: <?php echo $row->exp  ?></label><br>
                                                                            <label class="selling-post-stock">Stock: <?php echo $row->stock_size?> <?php echo $row->stock_size1?></label>
                                                                            <hr>
                                                                            
                                                                            <label class="edit" id="<?=$row->post_id?>">Edit</label><br>
                                                                            <label id="<?=$row->post_id?>" class="Del" onmousedown="func1()">Delete</label>
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













                                            <div id="modal-selling-<?=$row->post_id?>" class="modal-selling" >
                                                  <div class="modal-content-selling">
                                                    <div class="modal-header-selling">
                                                      <span class="closeBtn-selling">&times;</span>
                                                      <h2>Delete Post</h2>
                                                      <p>Are you sure you want to delete this post?</p>
                                                    </div>
                                                    <form method="post" autocomplete="off" action='delete'>
                                                    <div class="modal-body-selling">
                                                      <input type="hidden" value='<?=$row->post_id?>' name='abc'>
                                                      <button class="delete-selling" type="submit">Delete</button>

                                                    </div>
                                                    </form> 
                                                  </div>
                                                </div>

                                            <?php endforeach; ?>
                                            <?php endif; ?>   
                                  
        
                                  
        
                          </div>
                          
            


          </div>
                
                   

    </div>
 
<script>

const images = document.querySelectorAll('.edit');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      window.location.href = 'update?id='+id;
    });
  });

var modal;



function func1(){
const images = document.querySelectorAll('.Del');
  images.forEach(function(image) {
    image.addEventListener('click', function() {
      console.log(image['id']);
      modal = document.getElementById("modal-selling-"+image['id']);
      modal.style.display = "block";
     window.location.href = '../Selling/viewitems?id='+id;
    });
  });
}


window.onmousedown = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
          
              }
}

// var closeBtns = document.querySelectorAll('.delete-selling');
//               closeBtns.forEach(function(span) {
//                 span.addEventListener('click', function() {
//                   //  modal = span.closest("delete-selling-"+span['id']);
//                   modal.style.display = 'none';
//                 });
//          });



var closeBtns = document.querySelectorAll('.closeBtn-selling');
              closeBtns.forEach(function(span) {
                span.onclick = function() {
                   modal = span.closest('.modal-selling');
                  modal.style.display = 'none';
                }
              });

</script> 

  </body>
</html>

