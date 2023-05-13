<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deliverydone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydoing1.css">
    <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydone.css"> -->

</head>
<body>



    <div class="container">
            <!-- <//?php require APPROOT."/view/searchbarbuyer2.php"?> -->

                    <div class="content">
                                <div class="leftbar">
                                
                                            <div class="menu">
                                                <!-- <hr><label >Menu</label><br> -->
                                                <hr><p>Menu</p><br>
                                                <button onclick="document.location='../deliverytodo/view2'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/todo.png"><span> To Do</span></button><br>
                                                <button onclick="document.location='../deliverydoing/view2'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/doing.png"><span> Doing</span></button><br>
                                                <button onclick="document.location='../deliverydone/view2'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/done.png"><span> Done</span></button><br>
                                                <button onclick="document.location='../deliveryfee'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/fee.png"><span> Fee</span></button><br>
                                            </div>

                                            

                                </div>

    

            <div class="main">
                        <div class="page-selector">
                            <button class="active" onclick="window.location.href = 'index.html';">General</button>
                            <button onclick="window.location.href = 'index2.html';">Requests</button>
                        </div>


                        <div class="main-content">

                        <?php if ($data) : ?>
                        <?php foreach ($data as $row) : ?>
                                <div class="post">
                                  
                                <div class="post-header">
                      <img src="images/vimukthi.jpg" alt="Profile Picture" class="post-profile-pic">
                      <div class="post-header-info">
                        <div class="post-header-name"><?=$row->first_name?> <?=$row->last_name?></div>
                        <div class="post-header-date">Posted - <?=$row->placed_on?></div>
                      </div>
                    </div>
                    <div class="post-content">
                      <div class="post-description">
                        
                        <table class="info-table">
                          <tr>
                            <td class="left-column">Item:</td>
                            <td class="right-column"><?=$row->item_name?></td>
                          </tr>
                          <tr>
                            <td class="left-column">Amount:</td>
                            <td class="right-column"><?=$row->qua?><?=$row->unit?></td>
                          </tr>
                          <tr>
                            <td class="left-column">From:</td>
                            <td class="right-column"><?=$row->address_seller?></td>
                          </tr>
                          <tr>
                            <td class="left-column">To:</td>
                            <td class="right-column"><?=$row->address?></td>
                          </tr>
                          <tr>
                            <!-- <td class="left-column">Fee:</td>
                            <td class="right-column">RS. <?=$row->del_fee?>.00</td> -->
                          </tr>
                          <tr>
                            <td class="left-column">Delivered On:</td>
                            <td class="right-column">May 10, 2023</td>
                          </tr>
                        </table>
                        
                      </div>
                      <div class="post-buttons">
                        <button class="post-button approved-button">Delete&nbsp;<i class='fa fa-trash'></i></button>
                        <!-- <button class="post-button discard-button">Discard</button>
                        <button class="post-button map-button">View On Map&nbsp;
                          <i class='fa fa-map-marker'></i></button> -->
                      </div>
                      <!-- <p><span id="dots">.</span><span id="more">
                       
                            Item:   Papaya <br>
                            Amount: 2KG <br>
                            From:   101, 1st Lane, Rathmaldeniya, Godagama, Colombo <br>
                            To:     53/A, Samagi Mawatha, Thalawathugoda, Colombo <br>
                            Fee:    RS. 350.00 <br>

                      </span></p>
                      <button onclick="myFunction()" id="myBtn">More Info<br>&#8964;</button> -->

                    </div>

                                </div>

                                <?php endforeach; ?>
                            <?php endif; ?>




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


function mapfunc() {
  const images = document.querySelectorAll('.map-button');

  images.forEach(function(image) {
    image.addEventListener('click', function() {
      const id = this.id;
      console.log(id);
      window.location.href='../Deliverydoing/map?id='+id;
    });
  });
}


</script>

</html>