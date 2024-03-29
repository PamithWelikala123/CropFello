<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/postitem1.css">
  <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/vieweditprofile1.css">  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://unpkg.com/filepond@^4/dist/filepond.css' rel='stylesheet' />
  <link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' rel='stylesheet'>
  <script type="text/javascript" src="<?php echo AUTO_MAP_URL ?>" defer></script>
    <script src="<?=ROOT?>/assets/js/map.js"></script> 
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>/assets/images/favicon.ico" />

<style>
     #map {
            width: 100%;
            height: 190px;
            border-radius: 10px;
        }
        .map-container{
            width: 100%;
            height: 215px;
            border-radius: 10px;
            margin-top: 2%;
        }
    </style>
</head>

<body onload="initMap()">  

<?php
    $crop_list='';
    $item = new item;
    $rows3 = $item->findAll();
    foreach($rows3 as $result){
      $crop_list .= "<option value=\"{$result->item_id}\" data-type=\"{$result->type}\" maxrental=\"{$result->maximum_rental_price}\">{$result->name}</option>";
    }
    ?>



  <div class="background">
    <div class="grid-row">

          <div class="profile-upper">

                
                      <div class="form-grid-2-2">

                        <div>

                                  <div class="form-group">
                                    <img  src="<?=ROOT?>/assets/images/images/frame.svg">
                                  </div> 
                        </div>

                        

                        <div>

                                  <div class="form-group backkey">
                                    <img src="<?=ROOT?>/assets/images/images/arrow-left-circle.svg"  onclick="document.location='../selling/selling'">
                                  </div> 

                                  <div class="form-group">
                                    <h2>Upload a picture </h2>
                                  </div> 

                        </div>



                         <div>
                         <form class="" action="databasepost" method="post" enctype="multipart/form-data">

                                          <div class="form-split">

                                                <div class="form-group">
                                                  <label class="form-label" for="firstname">Item *</label>
                                                  
                                                  <?php if(empty($errors['item_id'])){ ?>
                                                  <select  name="item_id" id="item_id" type="text" onkeyup="GetDetail(this.value)" value="" class="basic-input-field" onchange="updateCropType(this)" placeholder="  Select Item Name">
                                                  <option value="">Select Crop</option>    
                                                  <?php echo $crop_list?> 
                                                  </select>
                                                  <?php }else{ ?>
                                                    <select style="border: 1px solid #FB7A7A;" name="item_id" id="item_id" type="text" onkeyup="GetDetail(this.value)" value="" class="basic-input-field" onchange="updateCropType(this)" placeholder="  Item name is required">
                                                  <option value="">Select Crop</option>    
                                                  <?php echo $crop_list?> 
                                                  </select>
                                                  <?php }?>
                                                </div>  
                                                
                                                <div class="form-group">
                                                  <label class="form-label" for="lastname">  &nbsp;  </label>
                                                  
                                                  <input type="text" class="basic-input-field disabled"  type="text" id="crop_type" placeholder="  Select Item Type" name="item_type">
                                                </div>

                                        </div> 
                                        <div class="form-split">
                                                    <div class="form-group">
                                                      
                                                      

                                                      <?php if(empty($errors['exp'])){ ?>
                                                      <label class="form-label" for="address">Exp *</label>
                                                      <input type="date" id="address" class="form-control basic-input-field" placeholder="  dd / mm / yyyy" name="exp">
                                                      <?php }else{ ?>
                                                        <label class="form-label" for="address">Exp *<span style="color:#FB7A7A;font-size:10px"><?php echo $errors['exp'] ?></span></label>
                                                      <input style="border: 1px solid #FB7A7A;" type="date" id="address" class="form-control basic-input-field" placeholder="  dd / mm / yyyy" name="exp">
                                                      <?php }?>
                                                    </div>

                                                    
                                                    <div class="form-group">
                                                                <label class="form-label" for="city">District *</label>
                                                                <?php if(empty($errors['district'])){ ?>
                                                                <select type="text" id="city" class="basic-input-field" placeholder="" name="district">
                                                                <option value="">Select District</option>    
                                                                <option value="2">Ampara</option>
                                                                <option value="3">Anuradhapura</option>
                                                                <option value="4">Badulla</option>
                                                                <option value="5">Batticaloa</option>
                                                                <option value="6">Colombo</option>
                                                                <option value="7">Galle</option>
                                                                <option value="8">Gampaha</option>
                                                                <option value="9">Hambantota</option>
                                                                <option value="10">Jaffna</option>
                                                                <option value="11">Kalutara</option>
                                                                <option value="12">Kandy</option>
                                                                <option value="13">Kegalle</option>
                                                                <option value="14">Kilinochchi</option>
                                                                <option value="15">Kurunegala</option>
                                                                <option value="16">Mannar</option>
                                                                <option value="17">Matale</option>
                                                                <option value="18">Matara</option>
                                                                <option value="19">Monaragala</option>
                                                                <option value="20">Mullaitivu</option>
                                                                <option value="21">Nuwara Eliya</option>
                                                                <option value="22">Polonnaruwa</option>
                                                                <option value="23">Puttalam</option>
                                                                <option value="24">Ratnapura</option>
                                                                <option value="25">Trincomalee</option>
                                                                <option value="26">Vavuniya</option>
                                                                </select>
                                                                <?php }else{ ?>
                                                                  <select style="border: 1px solid #FB7A7A;" type="text" id="city" class="basic-input-field" placeholder="" name="district">
                                                                <option value="">Select District</option>    
                                                                <option value="2">Ampara</option>
                                                                <option value="3">Anuradhapura</option>
                                                                <option value="4">Badulla</option>
                                                                <option value="5">Batticaloa</option>
                                                                <option value="6">Colombo</option>
                                                                <option value="7">Galle</option>
                                                                <option value="8">Gampaha</option>
                                                                <option value="9">Hambantota</option>
                                                                <option value="10">Jaffna</option>
                                                                <option value="11">Kalutara</option>
                                                                <option value="12">Kandy</option>
                                                                <option value="13">Kegalle</option>
                                                                <option value="14">Kilinochchi</option>
                                                                <option value="15">Kurunegala</option>
                                                                <option value="16">Mannar</option>
                                                                <option value="17">Matale</option>
                                                                <option value="18">Matara</option>
                                                                <option value="19">Monaragala</option>
                                                                <option value="20">Mullaitivu</option>
                                                                <option value="21">Nuwara Eliya</option>
                                                                <option value="22">Polonnaruwa</option>
                                                                <option value="23">Puttalam</option>
                                                                <option value="24">Ratnapura</option>
                                                                <option value="25">Trincomalee</option>
                                                                <option value="26">Vavuniya</option>
                                                                </select>
                                                                <?php } ?>
                                                  </div>
                                                  
                                                    
                                        </div>
                                        <h3>Unit</h3>

                                      <div class="form-split2">

                                      

                                            <div class="form-group">


                                                            <label class="form-label" for="postalcode">Type *</label>
                                                            <?php if(empty($errors['unit'])){ ?>
                                                            <select class="basic-input-field" name="unit" id="unit" type="text" onkeyup="GetDetail(this.value)" onchange="parameters()" value="">
                                                                                                        <option value="">Type</option>    
                                                                                                        <option value="KG">KG</option>
                                                                                                        <option value="G">G</option>
                                                                                                        <option value="TREES">TREES</option>
                                                                                                        <option value="ACRES">ACRES</option>
                                                            </select> 
                                                            <?php }else{ ?>
                                                              <select style="border: 1px solid #FB7A7A;" class="basic-input-field" name="unit" id="unit" type="text" onkeyup="GetDetail(this.value)" onchange="parameters()" value="">
                                                                                                        <option value="">Type</option>    
                                                                                                        <option value="KG">KG</option>
                                                                                                        <option value="G">G</option>
                                                                                                        <option value="TREES">TREES</option>
                                                                                                        <option value="ACRES">ACRES</option>
                                                            </select>
                                                            <?php } ?>
                                              
                                  
                                            </div>  



                                            <div class="form-group">
                                              <label class="form-label" for="city">Unit-Price *  <label class="rental" id="rental"></label></label>
                                              <?php if(empty($errors['price'])){ ?>
                                              <input  class="basic-input-field" placeholder="" type="text"  name="price">
                                              <?php }else{ ?>
                                                <input style="border: 1px solid #FB7A7A;"  class="basic-input-field" placeholder="" type="text"  name="price">
                                                <?php } ?>
                                            </div>


                                            <div class="form-group">
                                                
                                                <?php if(empty($errors['size'])){ ?>
                                                  <label class="form-label" for="contact-number">Unit-Size *</label>
                                                <input type="text" name="size" class="form-control basic-input-field"  placeholder="">
                                                <?php }else{ ?>
                                                  <label class="form-label" for="contact-number">Unit-Size * <span style="color:#FB7A7A;font-size:10px"><?php echo $errors['size'] ?></span></label>
                                                  
                                                  <input style="border: 1px solid #FB7A7A;"  type="text" name="size" class="form-control basic-input-field"  placeholder="">
                                                  <?php } ?>
                                            </div>



                                      </div> 

                                
                                

                                 <div class="form-split3">

                                                  <div class="form-group">
                                                                <label class="form-label" for="city">Stock size *</label>
                                                                <?php if(empty($errors['stock_size'])){ ?>
                                                                <input type="text" id="stock_size" class="basic-input-field" placeholder="" name="stock_size">
                                                                <?php }else{ ?>
                                                                <input style="border: 1px solid #FB7A7A;"  type="text" id="stock_size" class="basic-input-field" placeholder="" name="stock_size">
                                                                <?php } ?>
                                                  </div>
                
                                                    <div class="form-group">


                                                                      <label class="form-label" for="postalcode">  &nbsp;  </label>
                                                                      <input class="basic-input-field disabled" name="stock_size1" id="stock_size1" type="text" value="">

                                                                        </input> 


                                                    </div>  

                                                    <div class="form-group">
                                                                <label class="form-label" for="city">Discount *</label>
                                                                <?php if(empty($errors['discount'])){ ?>
                                                                <input type="text" id="city" class="basic-input-field " placeholder="" name="discount">
                                                                <?php }else{ ?>
                                                                  <input style="border: 1px solid #FB7A7A;"  type="text" id="city" class="basic-input-field " placeholder="Less than 100%" name="discount">
                                                                  <?php } ?>

                                                  </div>
                                                   <div class="form-group">


                                                                      <label class="form-label" for="postalcode">  &nbsp;  </label>
                                                                      
                                                                      <select class="basic-input-field"  name="discount1" id="discount1" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                          <option value="%">%</option>
                                                                                        
                                                                      </select> 


                                                    </div>  
                
                                </div> 

                                      <div class="form-group">
                                                                  
                                                                  
                                                                  <label class="form-label" for="address">Address *</label>
                                                                  <?php if(empty($errors['address'])){ ?>
                                                                  <input type="text" id="address" class="basic-input-field" placeholder="address" name="Address">
                                                                  <?php }else{ ?>
                                                                    <input type="text" style="border: 1px solid #FB7A7A;"  id="address" class="basic-input-field" placeholder="address" name="Address">
                                                                    <?php } ?>  
                                                                          
                                      </div>
                                     

                               </div>    





                              <div>
                                
                            


                                    <div class="form-split">
                                   
                                          <div class="form-group">
                                            
                                             
 
                                                <input class="basic-input-field profile-pic" type="file" id="profilepic" credits='false' name="image" accept="image/png, image/jpeg, image/gif" />
                                                <input type="hidden" id="pplink" name="image">
                                           
                                                 
                                          </div>

                                          <div class="form-group">

                                                    <label for="">Location *</label>
                                                    <?php if(empty($errors['location'])){ ?>
                                                    <input class="basic-input-field" type="text" id="pickuplocation" name="location" placeholder="" value="">
                                                    <input type="hidden" name="platitude" id="p-latitude" value="">
                                                    <input type="hidden" name="plongitude" id="p-longitude" value="">
                                                    <input type="hidden" id="city1" name="city" value="">
                                                    <?php }else{ ?>
                                                    <input style="border: 1px solid #FB7A7A;"  class="basic-input-field" type="text" id="pickuplocation" name="location" placeholder="" value="">
                                                    <input type="hidden" name="platitude" id="p-latitude" value="">
                                                    <input type="hidden" name="plongitude" id="p-longitude" value="">
                                                    <input type="hidden" id="city1" name="city" value="">
                                                    <?php } ?>


                                                    <div class="map-container">
                                                        <div id="map"></div>
                                                    </div>

                                          </div>

                                         

                            
                      </div>
                     
                      <div class="form-group">
                                                  <label class="form-label" for="about">About</label>
                                                  <input type="text" id="about" class="discription" placeholder="  Change your Description..." name="description" >
                      </div>

                                          


                     
                      <div class="form-group">
                                                  
                                                  <button class="basic-input-field Register-but" type="submit" name="submit" id="submit" >Update</button> 
              
                      </div>
                      </div>
                      
                              

          </div>
          </form>

          <div class="profile-lower">
             
                
          </div>

    </div>
     
  </div>


  <script>
function updateCropType(selectElement) {
    const selectedOption = selectElement.options[selectElement.selectedIndex];
    const maxRental = selectedOption.getAttribute('maxrental');
    document.getElementById('rental').innerHTML = 'Max Retail price : RS.' + maxRental + '.00 per 1Kg';
    if(selectedOption.dataset.type!="undefined"){
    document.getElementById('crop_type').value = selectedOption.dataset.type;
    }
}

function parameters(selectElement) {
  var unitSelect = document.getElementById("unit");
  var stockSizeInput = document.getElementById("stock_size1");
  stockSizeInput.value = unitSelect.options[unitSelect.selectedIndex].value;
}
</script>





  <script
  src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-transform/dist/filepond-plugin-image-transform.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script src="https://unpkg.com/filepond@^4"></script>

<script>

FilePond.registerPlugin(FilePondPluginFileValidateType, FilePondPluginImageExifOrientation, FilePondPluginImagePreview, FilePondPluginImageCrop, FilePondPluginImageResize, FilePondPluginImageTransform);


    FilePond.create(document.getElementById('profilepic'), {
      server: '<?php echo ROOT ?>/Selling/databasepost',
       // labelIdle: `<img src='<//?php// echo BASEURL?>/public/images/profilepic.png'/><br/><br/> <span>Upload Profile Picture</span>`,
        imagePreviewHeight: 300,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 600,
        imageResizeTargetHeight: 600,
        stylePanelLayout: 'compact squre',
        styleLoadIndicatorPosition: 'center bottom',
        styleButtonRemoveItemPosition: 'center bottom'
    });

    // console log file path after submit
    document.getElementById('profilepic').addEventListener('FilePond:processfile', function (e) {
      
      
     var serverId = e.detail.file.serverId;
        console.log(serverId);
        var parts = serverId.split('}');
        var filepathData = parts[7];
       
        var filepath = filepathData.substring(filepathData.indexOf('"') + 1 + "filepath".length + 2, filepathData.lastIndexOf('"'))
        console.log(filepath);
        var filepathWithoutQuotes = filepath.replace(/"/g, '');
        console.log(filepathWithoutQuotes);

        if (filepathWithoutQuotes != null) {
            document.getElementById('pplink').value = filepathWithoutQuotes;
        }
    });

</script>
</html>
