<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliverydoing.css">
</head>
<body>
    <div class="container">
        <div class="item item1">
            <img class="logo" src="<?=ROOT?>/assets/images/rushinpics/pics/logo.png">
            <input class="Search" type="textbox" placeholder="Search">
            <img class="Search1"  src="<?=ROOT?>/assets/images/rushinpics/pics\feed\search.png">
            <img class="bell" src="<?=ROOT?>/assets/images/rushinpics/pics\feed\bell.png">
            <img class="active" src="<?=ROOT?>/assets/images/rushinpics/pics\feed\active.png"> 
            <img class="profile" src="<?=ROOT?>/assets/images/rushinpics/pics\feed\profilepic.png"> 
        </div>
        <div class="item item2">
          <img class="line2"  src="<?=ROOT?>/assets/images/rushinpics/pics\feed\line.png">
          <label class="Menu">Menu</label>

            <a href="todo.php"><button class="Feed">To Do</button></a>
            <img class="Feed1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/todo.png">
            <a href="doing.php"><button class="Bidding">Doing</button></a>
            <img class="Bidding1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/doing.png">
            <a href="done.php"><button class="Wishlist">Done</button></a>
            <img class="Wishlist1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/done.png">
            <a href="fee.php"><button class="Requests">Fee</button></a>
            <img class="Requests1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/fee.png">

            <img class="line1"  src="<?=ROOT?>/assets/images/rushinpics/pics\feed\line.png">
            <label class="Message">Message</label>

            <div class="box" style="background-color:#FFFFFF; width: 130px; height:100px; border: 1px solid rgb(16, 17, 16); padding: 40px; margin-top: 370px;">
                <img class="man1" src="<?=ROOT?>/assets/images/rushinpics/pics/man1.png">
                <p class="nam1">Vimukthi Dulnath</p>

                <img class="man2" src="<?=ROOT?>/assets/images/rushinpics/pics/man2.png">
                <p class="nam2">Praneeth Silva</p>

                <img class="man3" src="<?=ROOT?>/assets/images/rushinpics/pics/man3.png">
                <p class="nam3">Rushin Sandeepana</p>

                <img class="man4" src="<?=ROOT?>/assets/images/rushinpics/pics/man4.png">
                <p class="nam4">Janith Hesara</p>
            </div>
            <button type="button" class="Allmsg">All Messages</button>
        </div>
        <div class="item item3">
            <div class="scroll-div">
            <?php
                    $sql = "SELECT * FROM info WHERE status=1";
                    $result = $conn->query($sql);
            if ($result->num_rows > 0) { ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="containerx">
                    <div class="item item-1">
                      <img class="profile-pic" src="pics/man2.png">
                      <p class="nam"><?php echo  $row['buyer'] ?></p><br>
                      <p class="date"><?php echo date('d F y', strtotime($row['date'])) ?></p>

                    </div>
                    <div class="item item-2">
                      <h2 class="head">&nbsp<?php echo  $row['buyer'] ?>&nbsp wants to deliver&nbsp<?php echo  $row['item'] ?>&nbspin&nbsp<?php echo  $row['quantity'] ?>&nbspKgs&nbsp<br>from <?php echo  $row['fro'] ?>&nbsp to <?php echo  $row['too'] ?>&nbsp</h2>

                      <table class="table" style="width:70%">

                        <tr>
                          <td>Item:</td>
                          <td><font color="#0C7417"><?php echo  $row['item'] ?></td>
                        </tr>

                        <tr>
                          <td>Amount:</td>
                          <td><font color="#0C7417"><?php echo $row['amount']; ?></td> 
                        </tr>

                        
                        <tr>
                          <td>From:</td>
                          <td><font color="#0C7417"><?php echo $row['fro']; ?></td> 
                        </tr>

                        
                        <tr>
                          <td>To:</td>
                          <td><font color="#0C7417"><?php echo $row['too']; ?></td> 
                        </tr>                        
                        <tr>
                          <td>Fee:</td>
                          <td><font color="#0C7417"><?php echo  $row['fee'] ?></td> 
                        </tr>

                        
                        <tr>
                          <td>Vehicle Type:</td>
                          <td><font color="#0C7417"><?php echo  $row['vtype'] ?></td> 
                        </tr>
                      </table>

                      <a href='doing.php?id=<?php echo $row['id'] ?>'><button class="Approve btn1">Done &nbsp  &#10004</button></a>
                      <!-- <a href='doing.php?eid=<?php echo $row['id'] ?>'><button class="Discard btn2">Discard &nbsp &#xf014 </button></a> -->
                    </div>
                  </div>                
                 <?php }?>
                 <?php }?>
            </div>
        </div>
    </div>
</body>
</html>