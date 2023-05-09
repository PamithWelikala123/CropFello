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
      $crop_list .="<option value=\"{$result->item_id}\">{$result->name}</option>";

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
                                                  
                                                  <select  name="item_id" id="item_id" type="text" onkeyup="GetDetail(this.value)" value="" class="basic-input-field" onchange="fetchemp()" placeholder="  Select Item Name">
                                                                                <?php echo $crop_list?> 
                                                  </select>
                                                </div>  
                                                
                                                <div class="form-group">
                                                  <label class="form-label" for="lastname">  &nbsp;  </label>
                                                  
                                                  <input type="text" class="basic-input-field"  type="text" id="crop_type" placeholder="  Select Item Type" name="item_type">
                                                </div>

                                        </div> 
                                        <div class="form-split">
                                                    <div class="form-group">
                                                      <label class="form-label" for="address">Exp *</label>
                                                      
                                                      <input type="date" id="address" class="form-control basic-input-field" placeholder="  dd / mm / yyyy" name="exp">
                                                    </div>

                                                    <div class="form-group">
                                                      <label class="form-label" for="address">Bid End Date *</label>
                                                      
                                                      <input type="date" id="address" class="form-control basic-input-field" placeholder="  dd / mm / yyyy" name="bid_end_date">
                                                    </div>
                                        </div>
                                        

                                      <div class="form-split">

                                      

                                            <div class="form-group">


                                                            <label class="form-label" for="postalcode">Initial Price *</label>
                                                            <input class="form-control basic-input-field" name="initial_price" id="unit" type="text" placeholder="  Rs." > 
                                              
                                  
                                            </div>  



                                            <div class="form-group">
                                                              <label class="form-label" for="city">Bid Range *</label>
                                                              <input  class="basic-input-field"  type="text"  name="bid_range" placeholder="  Rs." >
                                            </div>


                                            



                                      </div> 

                                      <div class="form-split">

                                            <div class="form-group">
                                                              <label class="form-label" for="city">Bid Range *</label>
                                                              <input  class="basic-input-field"  type="text"  name="bid_range" placeholder="  Rs." >
                                            </div>

                                              <div class="form-group">
                                                        <label class="form-label" for="contact-number"> &nbsp;</label>
                                                        
                                                        <select class="basic-input-field" name="stock_size1" id="stock_size1" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                                                          <option value="KG">KG</option>
                                                                                                                          <option value="G">G</option>
                                                                                                                          <option value="TREES">TREES</option>
                                                                                                                          <option value="ACRES">ACRES</option>
                                                        </select> 
                                                        
                                              </div>

                                      </div> 
                                

                                 

                                      <div class="form-group">
                                                                  
                                                                  
                                                                  <label class="form-label" for="address">Address *</label>
                                                                  <input type="text" id="address" class="basic-input-field" placeholder="address" name="Address">
                                                                          
                                      </div>
                                     

                               </div>    





                              <div>
                                
                            


                                    <div class="form-split">
                                   
                                          <div class="form-group">
                                            
                                             
 
                                                <input class="basic-input-field profile-pic" type="file" id="profilepic" credits='false' name="image" accept="image/png, image/jpeg, image/gif" />
                                                <input type="hidden" id="pplink" name="image">
                                           
                                                 
                                          </div>

                                          <div class="form-group">

                                                    <label for="">Location</label>

                                                    <input class="basic-input-field" type="text" id="pickuplocation" name="location" placeholder="" value="">
                                                    <input type="hidden" name="platitude" id="p-latitude" value="">
                                                    <input type="hidden" name="plongitude" id="p-longitude" value="">
                                                    <input type="hidden" id="city1" name="city1" value="">




                                                    <div class="map-container">
                                                        <div id="map"></div>
                                                    </div>

                                          </div>

                                         

                            
                      </div>
                     
                      <div class="form-group">
                                                  <label class="form-label" for="about">About *</label>
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


        // var obj = JSON.parse(filepathData);

        // // Access the filepath property
        // var filepath = obj.filepath;

        // // Output the filepath value
        // console.log(filepath);


        //serverId = serverId.trim();
        // parse the JSON object
        //var jsonResponse = JSON.parse(serverId);
        // access the filepath
        //const filepath = jsonResponse.filepath;
        //console.log(filepath);
        if (filepathWithoutQuotes != null) {
            document.getElementById('pplink').value = filepathWithoutQuotes;
        }
    });

</script>
</html>
