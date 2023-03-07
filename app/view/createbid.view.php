<!DOCTYPE html>
<html>
    <head>
        
        <title>
            CreateBid item
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/createbid.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>
    
    <body>

    <div class="logo">
                    <img class="img1" src="<?=ROOT?>/assets/images/postitem/logo.png">   
                    <a href="<?=ROOT?>/Bidding/sellerbidding"><img class="close" src="<?=ROOT?>/assets/images/postitem/close.png"> </a>
      </div>
      <form class="" action='addBiddingItem' method="post" enctype="multipart/form-data">
      <div class="form1">
              

                <div class="right">

                                                                        <?php
                                                                        $crop_list='';
                                                                        $item = new item;
                                                                        $rows3 = $item->findAll();
                                                                        foreach($rows3 as $result){
                                                                        $crop_list .="<option value=\"{$result->item_id}\">{$result->name}</option>";

                                                                        }
                                                                        ?>




                                                                      <label class="item_id1">Item</label>
                                                                      <label class="item_id2">*</label>
                                                                      <select  name="item_id" id="item_id" type="text" placeholder="  Select Item Type" onkeyup="GetDetail(this.value)" value="" class="item_id" onchange="fetchemp()" placeholder="  Select Item Name">
                                                                                <?php echo $crop_list?> 
                                                                      </select>
 
                                                                      <!-- <input  type="text" placeholder="  Select Item Name" name="crop_name"> -->
                                                                      <input class="crop_type" type="text" id="crop_type" placeholder="  Select Item Type" name="item_type">
                                                                      <label class="exp1">EXP</label>
                                                                      <label class="exp2">*</label>
                                                                      <input class="exp" type="date" placeholder="  dd / mm / yyyy" name="exp">

                                                                      <label class="bid-end-date1">Bid End Date</label>
                                                                      <label class="bid-end-date2">*</label>
                                                                      <input class="bid-end-date" type="date" placeholder="  dd / mm / yyyy" name="bid_end_date">

 

                                                                      <label class="time">Bid End Time</label>
                                                                      <label class="time1">*</label>
                                                                      <select class="hours" name="hours" id="hours" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          
                                                                                          <option value="01">01</option>
                                                                                          <option value="02">02</option>
                                                                                          <option value="03">03</option>
                                                                                          <option value="04">04</option>
                                                                                          <option value="05">05</option>
                                                                                          <option value="06">06</option>
                                                                                          <option value="07">07</option>
                                                                                          <option value="08">08</option>
                                                                                          <option value="09">09</option>
                                                                                          <option value="10">10</option>
                                                                                          <option value="11">11</option>
                                                                                          <option value="12">12</option>
                
                                                                      </select>

                                                                      <select class="minutes" name="minutes" id="minutes" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          
                                                                                          <option value="00">00</option>
                                                                                          <option value="05">05</option>
                                                                                          <option value="10">10</option>
                                                                                          <option value="15">15</option>
                                                                                          <option value="20">20</option>
                                                                                          <option value="25">25</option>
                                                                                          <option value="30">30</option>
                                                                                          <option value="35">35</option>
                                                                                          <option value="40">40</option>
                                                                                          <option value="45">45</option>
                                                                                          <option value="50">50</option>
                                                                                          <option value="55">55</option>
                
                                                                      </select>

                                                                      <select class="day" name="day" id="day" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          
                                                                                          <option value="am">am</option>
                                                                                          <option value="pm">pm</option>
                                                                                          
                
                                                                      </select>

        



                                                                      <label class="unit1">Initial Price</label>
                                                                      <label class="unit2">*</label>
                                                                      <input class="unit" name="initial_price" id="unit" type="text" placeholder="  Rs." >


                                                                      

                                                     
                                                                      <label class="stock1">Amount</label>
                                                                      <label class="stock2">*</label>
                                                                      <input class="stock_size" type="text"  name="amount">
                                                                      <select class="stock_size1" name="amount_type" id="stock_size" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          <option value="KG">KG</option>
                                                                                          <option value="G">G</option>
                                                                                          <option value="TREES">TREES</option>
                                                                                          <option value="ACRES">ACRES</option>
                                                                      </select>




                                                                      <label class="dis1">Bid Range</label>
                                                                      <label class="dis2">*</label>
                                                                      <input class ="discount" type="text"  name="bid_range" placeholder="  Rs." >
                                                                      

                                                                      <label class="address1">Address</label>
                                                                      <label class="address2">*</label>                 
                                                                      <input  class="address" type="text"  name="address">

                                                                      <label class="postal1">Postal Code</label>
                                                                      <label class="postal2">*</label>  
                                                                      <input class="postal"  type="text"  name="postal_code">

                                                                      <label class="city1">City</label>
                                                                      <label class="city2">*</label>
                                                                      <input  class="city" type="text"  name="city">


                </div>
                        
                

                <div class="left">
                                          <label class="upload1">Upload image</label>
                                          <label class="upload2">*</label>
                                          <img class="upload" src="<?=ROOT?>/assets/images/postitem/upload1.png">
                                          <label class="browse1">Drop your image here or </label>
                                          <input class="browse" type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value=""> <br> <br>
                                          
                                          
                                          <button class="create" type="submit" name="submit">Create</button> 


                </div>

               
                
        
      </form>

      </div>
                    
    </body>
</html>
