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
                <!-- <div class="page-selector">
                    <button class="active" onclick="window.location.href = 'index.html';">General</button>
                    <button onclick="window.location.href = 'index2.html';">Requests</button>
                </div> -->
                <div class="main-content">
                    <?php if ($data) : ?>
                        <?php foreach ($data as $row) : ?> 
                  
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
                        
                        <table class="info-table">
                          <tr>
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
                                                    <td class="left-column">Seller Contact:</td>
                                                    <td class="right-column">0<?=$row->contact_number_seller?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">To:</td>
                                                    <td class="right-column"><?=$row->address?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">Buyer Contact:</td>
                                                    <td class="right-column">0<?=$row->contact_number?></td>
                                                  </tr>
                                                  <tr>
                                                    <td class="left-column">Fee:</td>
                                                    <td class="right-column">RS. <?=$row->del_price?>.00</td>
                                                  </tr>
                                                </table>
                                                
                                              </div>
                      <div class="post-buttons">
                        <button id="<?=$row->id?>" class="post-button approved-button" onclick="window.location.href='../Deliverydone/delete?id='+id">Delete&nbsp;<i class='fa fa-trash'></i></button>

                      </div>


                    </div>
                  </div>
                  <?php endforeach; ?>
                  <?php endif; ?>
                  
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>