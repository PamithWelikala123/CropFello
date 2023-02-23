<!DOCTYPE html>
<html>
    <head>
        
        <title>
            Post item
        </title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/postitem.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

   
    </head>
    
    <body>

    <div class="logo">
                    <img class="img1" src="<?=ROOT?>/assets/images/postitem/logo.png">   
                    <a href="<?=ROOT?>/selling"><img class="close" src="<?=ROOT?>/assets/images/postitem/close.png"> </a>
      </div>
      <?php
    $crop_list='';
    $item = new item;
    $rows3 = $item->findAll();
    foreach($rows3 as $result){
      $crop_list .="<option value=\"{$result->item_id}\">{$result->name}</option>";

    }
    ?>
      <form class="" action="selling/databasepost" method="post" enctype="multipart/form-data">
      <div class="form1">
              

                <div class="right">
                                                                      <label class="item_id1">Item</label>
                                                                      <label class="item_id2">*</label>
                                                                      <select  name="item_id" id="item_id" type="text" onkeyup="GetDetail(this.value)" value="" class="item_id" onchange="fetchemp()" placeholder="  Select Item Name">
                                                                                <?php echo $crop_list?> 
                                                                      </select>

                                                                      <!-- <input  type="text" placeholder="  Select Item Name" name="crop_name"> -->
                                                                      <input class="crop_type" type="text" id="crop_type" placeholder="  Select Item Type" name="item_type">
                                                                      <label class="exp1">EXP</label>
                                                                      <label class="exp2">*</label>

                                                                      <input class="exp" type="date" placeholder="  dd / mm / yyyy" name="exp">


                                                                      <label class="unit1">Unit</label>
                                                                      <label class="unit2">Type *</label>
                                                                      <label class="unit3">Price *</label>
                                                                      <label class="unit4">Size *</label>
                                                                       <select class="unit" name="unit" id="unit" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          <option value="KG">KG</option>
                                                                                          <option value="G">G</option>
                                                                                          <option value="TREES">TREES</option>
                                                                                          <option value="ACRES">ACRES</option>
                                                                                        </select> 


                                                                      <input class="price" type="text"  name="price">
                                                                      <input class="size" type="text"  name="size">

                                                                      <label class="stock1">Stock Size</label>
                                                                      <label class="stock2">*</label>
                                                                      <input class="stock_size" type="text"  name="stock_size">
                                                                      <select class="stock_size1" name="stock_size1" id="stock_size" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          <option value="KG">KG</option>
                                                                                          <option value="G">G</option>
                                                                                          <option value="TREES">TREES</option>
                                                                                          <option value="ACRES">ACRES</option>
                                                                                        </select>

                                                                      <label class="dis1">Discount</label>
                                                                      <label class="dis2">*</label>
                                                                      <input class ="discount" type="text"  name="discount">
                                                                      <select class="discount1" name="discount1" id="discount1" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          <option value="%">%</option>
                                                                                          <option value="Rs">Rs</option>
                                                                                        </select>


                                                                      <label class="address1">Address</label>
                                                                      <label class="address2">*</label>                 
                                                                      <input  class="address" type="text"  name="Address">

                                                                      <label class="postal1">Postal Code</label>
                                                                      <label class="postal2">*</label>  
                                                                      <input class="postal"  type="text"  name="postalcode">

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
                                          <label class="description1">Description</label>
                                          <label class="description2">*</label>
                                          <input  class="description" type="text"  name="description">
                                          <input class="tick" type="checkbox">
                                          <label class="tick1">Negotiations allowed</label>
                                          <button class="create" type="submit" name="submit">Create</button> 


                </div>

               
                
        
                </form>

      </div>
                    
    </body>
</html>
