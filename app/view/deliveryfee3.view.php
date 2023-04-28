<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee</title>
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/deliveryfee.css">
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

            <a href="Deliverytodo"><button class="Feed">To Do</button></a>
            <img class="Feed1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/todo.png">
            <a href="Deliverydoing"><button class="Bidding">Doing</button></a>
            <img class="Bidding1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/doing.png">
            <a href="Deliverydone"><button class="Wishlist">Done</button></a>
            <img class="Wishlist1"  src="<?=ROOT?>/assets/images/rushinpics/pics/feed/done.png">
            <a href="Deliveryfee"><button class="Requests">Fee</button></a>
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
            <div class="To">
                <label for="to">To <span style="color:red">&#9913 </span></label><br>
                <!-- <input type="text" id="name" name="to" placeholder="Pick up location" class="tb1"> -->
                <select name="plan" id="plan" class="tb1" style="color:#4DEA25; overflow-y:scroll; overflow:hidden">
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                </select>
            </div>
            <div class="From">
                <label for="from">From <span style="color:red">&#9913 </span></label><br>
                <!-- <input type="text" id="name" name="from" placeholder="Drof off location" class="tb1"> -->
                <select name="plan" id="plan" class="tb1" style="color:#4DEA25" >
                    <option value="none" selected disabled hidden>Select an Option</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                    <option value="free">Free</option>
                    <option value="starter">Starter </option>
                    <option value="professional">Professional</option>
                    <option value="corporate">Corporate</option>
                </select>
            </div>
            <div class="Vtype">
                <label for="vtype">Vehicle Type <span style="color:red">&#9913 </span></label><br>
                <input type="email" id="email" name="email" class="tb1">

                <button type="button" class="tb2">Calculate Fee</button>
            </div>

        </div>
        </div>
    </div>
</body>
</html>