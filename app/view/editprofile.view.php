<body>
  
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/vieweditprofile.css">
  <link rel="stylesheet" href="<?=ROOT?>/assets/css/vieweditprofile1.css"> 
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

                                  <div class="form-group">
                                    <h1>Edit Profile</h1>
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
                                                  <label class="form-label" for="firstname">First Name *</label>
                                                  
                                                  <input type="textbox" id="firstname" class="basic-input-field" placeholder="<?=$data['first_name']?>" name="first_name">
                                                </div>  
                                                
                                                <div class="form-group">
                                                  <label class="form-label" for="lastname">Last Name *</label>
                                                  
                                                  <input type="text" id="lastname" class="basic-input-field" placeholder="<?=$data['last_name']?>" name="last_name">
                                                </div>

                                        </div> 

                                        <div class="form-group">
                                          <label class="form-label" for="address">Address *</label>
                                          
                                          <input type="text" id="address" class="form-control basic-input-field" placeholder="<?=$data['address']?>" name="address">
                                      </div>

                                      <div class="form-split">

                                            <div class="form-group">
                                              <label class="form-label" for="postalcode">Postal Code *</label>
                                  
                                              <input type="text" id="postalcode" class="basic-input-field" placeholder="<?=$data['postal_code']?>" name="postal_code">
                                            </div>  
                                            <div class="form-group">
                                              <label class="form-label" for="city">City *</label>
                                              <input type="text" id="city" class="basic-input-field" placeholder="<?=$data['city']?>" name="city">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="contact-number">Contact Numbeer *</label>
                                                <input type="text" id="contact-number" class="form-control basic-input-field"  placeholder="<?=$data['contact_number']?>" name="contact_number">
                                            </div>

                                      </div> 

                                </div>    

  

                              <div>
                                    <div class="form-split">
                                   
                                          <div class="form-group">
                                            
                                             
                                            <input  type="file" id="profilepic" credits='false' name="image" 
                                            accept="image/png, image/jpeg, image/gif"  class="form-control basic-input-field profile-pic"/>
                                            <input type="hidden" id="pplink" name="image">
                                           
                                                 
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
                                                  
                                    <button class="form-control basic-input-field Register-but" type="submit" name="submit">Update</button> 

                                </div>
                              </form>

          </div>

          <div class="profile-lower">
                <img src="<?=ROOT?>/assets/images/images/bottom1.png">
                <img src="<?=ROOT?>/assets/images/images/bottom2.png">
          </div>

    </div>
     
  </div>

  <script>  
changelocation() {   
alert("how are you");  
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

<script>

  FilePond.registerPlugin(FilePondPluginFileValidateType, FilePondPluginImageExifOrientation, FilePondPluginImagePreview, FilePondPluginImageCrop, FilePondPluginImageResize, FilePondPluginImageTransform);
  

  FilePond.create(document.getElementById('profilepic'), {
      //server: '<//?php echo BASEURL ?>/imageUpload/profilepic',
      labelIdle: `<img src="<?=ROOT?>/assets/images/Profile_pic/<?=$_SESSION['USER']->image?>" style='Width: 130' '/>`,
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
