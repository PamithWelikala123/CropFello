<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deliverydoing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyerleftbar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/buyertopnav.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydoing1.css">

</head>
<body>



    <div class="container">
            <?php require APPROOT."/view/searchbarbuyer2.php"?>

                    <div class="content">
                                <div class="leftbar">
                                
                                            <div class="menu">
                                                <!-- <hr><label >Menu</label><br> -->
                                                <hr><p>Menu</p><br>
                                                <button onclick="document.location='deliverytodo/view1'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/todo.png"><span> To Do</span></button><br>
                                                <button onclick="document.location='deliverydoing/index'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/doing.png"><span> Doing</span></button><br>
                                                <button onclick="document.location='deliverydone'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/done.png"><span> Done</span></button><br>
                                                <button onclick="document.location='deliveryfee'"><img class="todo"  src="<?=ROOT?>/assets/images/delivery/fee.png"><span> Fee</span></button><br>
                                            </div>

                                            <div class="message">
                                                <!-- <hr><label>Message</label> -->
                                                <hr><p>Message</p><br>
                                                <!-- <img class="message-bar" src="images/message-bar.png"> -->
                                                    <div class="message-box">
                                                        <?php require APPROOT."/controller/Chat.php";
                                                        $userController = new Chat();
                                                        $userController->viewperson();
                                                        
                                                        ?>
                                                        
                                                

                                                

                                                    </div>
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
                                                                          <div class="post-header-name">John Doe</div>
                                                                          <div class="post-header-date">Posted on May 5, 2023</div>
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
                                                        <td><span class="grey">Drop Address: </span> 53/A, Samagi Mawatha, Thalawathugoda, Colombo</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="grey">Call: </span> 0119283746</td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3>Seller Info</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>Pineapple <span  class="green">5KG</span> </h4></td>
                                                        <td> <span class="grey">Pick Address: </span> 53/A, Samagi Mawatha, Thalawathugoda, Colombo</td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3>RS. 450.00 <span  class="fee">Delivery Fee</span> </h3></td>
                                                        <td><span class="grey">Call: </span> 0119283746</td>
                                                    </tr>
                                                </table>
                                                
                                                                              
                                                                            </div>


                                                                          <div class="post-buttons">
                                                                            <button class="post-button approved-button">Approved</button>
                                                                            <button class="post-button discard-button">Discard</button>
                                                                            <button class="post-button map-button"  onclick="window.open('<?php echo ROOT; ?>/Home/map', '_blank')">View On Map&nbsp;
                                                                              <i class='fa fa-map-marker'></i></button>
                                                                          </div>


                                                      </div>
                                          </div>
                                          <?php endforeach; ?>
                                  <?php endif; ?>


                                          
                                                                              
                                                                            </div>



                                                      </div>
                                          </div>






                        </div>
                        
        







 
        </div>
        
    </div>


</body>

</html>