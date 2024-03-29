<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deliverytodo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydoing1.css">

</head>
<body>



    <div class="container">
            <?php require APPROOT."/view/searchbardeliver.view.php"?>

                    <div class="content">
                                <div class="leftbar">
                                
                                            <div class="menu">
                                                <!-- <hr><label >Menu</label><br> -->
                                                <hr><p>Menu</p><br>
                                                <button onclick="document.location='../deliverytodo/view2'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/todo.png"><span> To Do</span></button><br>
                                                <button onclick="document.location='../deliverydoing/view2'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/doing.png"><span> Doing</span></button><br>
                                                <button onclick="document.location='../deliverydone/view2'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/done.png"><span> Done</span></button><br>
                                                <!-- <button onclick="document.location=',,/deliveryfee/viwe2'"><img class="todo"  src="<//?=ROOT?>/assets/images/delivery/fee.png"><span> Fee</span></button><br> -->
                                            </div>

                                </div>

    

            <div class="main">

                        <div class="main-content">


                        <?php if ($data) : ?>      
                        <?php foreach ($data as $row) : ?>  
                          <?php if($row->row_discard==0) : ?>     
                        <div class="post">
                                                      <div class="post-header">
                                                        <img src="<?=ROOT?>/assets/images/Profile_pic/<?=$row->profile?>" alt="Profile Picture" class="post-profile-pic">
                                                                <div class="post-header-info">
                                                                          <div class="post-header-name"><?=$row->first_name?> <?=$row->last_name?></div>
                                                                          <div class="post-header-date">Posted on <?=$row->placed_on?></div>
                                                                </div>
                                                      </div>
                                                      
                                                      <div class="post-content">
                                                                            <div class="post-description">
                                                                              
                                                                            <table>
                                                    <tr>
                                                        <td rowspan="4" class="image-cell">
                                                                                        
                                                            <div class="image-wrapper">
                                                                <img src="<?=ROOT?>/assets/images/Post-images/<?=$row->image?>" alt="Square Image">
                                                            </div>
                                                        </td>
                                                        <td><h3>Buyer Info</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="grey">Drop Address: </span> <?=$row->address?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="grey">Call: </span> 0<?=$row->contact_number?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3>Seller Info</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4><?=$row->item_name?> <span  class="green"> <?=$row->qua?><?=$row->unit?></span> </h4></td>
                                                        <td> <span class="grey">Pick Address: </span> <?=$row->address_seller?></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3>Distance : <?=$row->distance?> Km </h3></td>
                                                        <td><h3>RS. <?=$row->del_price?>.00 <span  class="fee">Delivery Fee</span> </h3></td>
                                                        <td><span class="grey">Call: </span> 0<?=$row->contact_number_seller?></td>
                                                    </tr>
                                                </table>
                                                
                                                                              
                                                                            </div>
                                                                            <form method="post">

                                                                          <div class="post-buttons">
                                                                          <button class="approved-button" type="button" id="<?=$row->id?>" onclick="update()">Approve</button>
                                                                          <!-- <//?php echo '<button class="approved-button" type="button" name="approve['.$row->order_code.']/">Approve</button>' ?> -->

                                                                            <button type="button" class="discard-button" id="<?=$row->id?>" onclick="discard()">Discard</button>
                                                                            <button class="map-button" name="view_on_map" type="button" id="<?=$row->id?>" onclick="window.open('../Deliverytodo/map?id='+id, '_blank')">

                                                                            <!-- <button class="map-button" name="view_on_map" type="button" onclick="mapfunc()"> -->
                                                                                View On Map&nbsp;<i class='fa fa-map-marker'></i>
                                                                                </button>

                                                                          </div>

                                                                          </form>


                                                      </div>
                                          </div> 
                                          <?php endif; ?>
                                          <?php endforeach; ?>
                                  <?php endif; ?>


                                          
                                                                              
                                                                            </div>



                                                      </div>
                                          </div>






                        </div>
                        
        







 
        </div>
        
    </div>


</body>
<script>
function update() {
  const images = document.querySelectorAll('.approved-button');

  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      console.log(id);
      window.location.href='../Deliverytodo/approved?id='+id;
    });
  });
}


function discard() {
  const images = document.querySelectorAll('.discard-button');

  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      console.log(id);
      window.location.href='../Deliverytodo/discard?id='+id;
    });
  });
}

function mapfunc() {
  const images = document.querySelectorAll('.map-button');

  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      console.log(id);
      window.location.href='../Deliverytodo/map?id='+id;
    });
  });
}


</script>
</html>