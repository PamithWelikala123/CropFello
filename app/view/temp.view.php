<body>
  
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/postitem1.css">
  <!-- <link rel="stylesheet" href="<?=ROOT?>/assets/css/vieweditprofile1.css">  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href='https://unpkg.com/filepond@^4/dist/filepond.css' rel='stylesheet' />
  <link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'>
  <link rel='preconnect' href='https://fonts.googleapis.com'>
  <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
  <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' rel='stylesheet'>
        
  
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
                                    <img src="<?=ROOT?>/assets/images/images/arrow-left-circle.svg"  onclick="document.location='../Profile'">
                                  </div> 

                                  <div class="form-group">
                                    <h2>Upload profile picture </h2>
                                  </div> 

                        </div>



                                <div>
                                  <form class="" action="editprofile" method="post" enctype="multipart/form-data">
                                          <div class="form-split">

                                                <div class="form-group">
                                                  <label class="form-label" for="firstname">Item *</label>
                                                  
                                                  <input type="textbox" id="firstname" class="basic-input-field" placeholder="" name="item_id">
                                                </div>  
                                                
                                                <div class="form-group">
                                                  <label class="form-label" for="lastname">  &nbsp;  </label>
                                                  
                                                  <input type="text" id="lastname" class="basic-input-field" placeholder="" name="item_type">
                                                </div>

                                        </div> 

                                        <div class="form-group">
                                          <label class="form-label" for="address">Exp *</label>
                                          
                                          <input type="date" id="address" class="form-control basic-input-field" placeholder="  dd / mm / yyyy" name="exp">
                                      </div>

                                      <h3>Unit  </h3>

                                      <div class="form-split2">

                                      

                                            <div class="form-group">


                                                            <label class="form-label" for="postalcode">Type *</label>
                                                            <select class="basic-input-field" name="unit" id="unit" type="text" onkeyup="GetDetail(this.value)" value="">
                                                                                                        <option value="KG">KG</option>
                                                                                                        <option value="G">G</option>
                                                                                                        <option value="TREES">TREES</option>
                                                                                                        <option value="ACRES">ACRES</option>
                                                            </select> 
                                              
                                  
                                            </div>  



                                            <div class="form-group">
                                              <label class="form-label" for="city">Price *</label>
                                              <input type="text" id="city" class="basic-input-field" placeholder="" name="city">
                                            </div>


                                            <div class="form-group">
                                                <label class="form-label" for="contact-number">Size *</label>
                                                <input type="text" id="contact-number" class="form-control basic-input-field"  placeholder="" name="contact_number">
                                            </div>



                                      </div> 

                                </div>    

  

                              <div>
                                
                             <div class="form-group">
                                                            
                                                            
                                            <label class="form-label" for="address">Exp *</label>
                                             <input type="date" id="address" class="form-control basic-input-field" placeholder="  dd / mm / yyyy" name="exp">
                                                    
                                                            
                            </div>



                                    <div class="form-split">
                                   
                                          <div class="form-group">
                                            
                                             
 
                                                <input class="form-control basic-input-field profile-pic" type="file" id="profilepic" credits='false' name="image" accept="image/png, image/jpeg, image/gif" />
                                                <input type="hidden" id="pplink" name="pplink">
                                           
                                                 
                                          </div>

                                          <div class="form-group">
                                            <label class="form-label" for="about">About *</label>
                                            <input type="text" id="about" class="form-control basic-input-field discription" placeholder="  Change your Description..." name="description" >
                                          </div>


                                    </div>

                        

                                    <div class="form-group">

                                            <button type="button" class="form-control basic-input-field changepasswordbutton" onclick="location.href='../Profile/Editprofile_changepassword1'">
                                              Change Password <label class="change_password1">></label>
                                            </button>

                                      
                                    </div>       
                      </div>

                                  <div class="form-group">
                                                  
                                    <button class="form-control basic-input-field Register-but" type="submit" name="submit" id="submit" >Update</button> 

                                </div>
                              </form>

          </div>

          <div class="profile-lower">
                 <img src="<?=ROOT?>/assets/images/images/bottom2.png">
                <img src="<?=ROOT?>/assets/images/images/bottom1.png">
                
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
      server:'http://localhost/Cropfello/public/Profile/editprofile',
       // labelIdle: `<img src='<//?php// echo BASEURL?>/public/images/profilepic.png'/><br/><br/> <span>Upload Profile Picture</span>`,
        imagePreviewHeight: 170,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 200,
        imageResizeTargetHeight: 200,
        stylePanelLayout: 'compact circle',
        styleLoadIndicatorPosition: 'center bottom',
        styleButtonRemoveItemPosition: 'center bottom'
    });

    // console log file path after submit
    document.getElementById('profilepic').addEventListener('FilePond:processfile', function (e) {
      
      
      const serverId = e.detail.file.serverId;
        console.log(serverId);

        // parse the JSON object
        const jsonResponse = JSON.parse(serverId);
        // access the filepath
        const filepath = jsonResponse.filepath;
        console.log(filepath);
        if (filepath != null) {
            document.getElementById('pplink').value = filepath;
        }
    });

</script>
</html>
