<!DOCTYPE html>
<html>
    <head>
        
        <title>
        Editprofile
        </title>
        <link rel="Stylesheet" href="<?=ROOT?>/assets/css/editprofile.css">
        <link href='https://unpkg.com/filepond@^4/dist/filepond.css' rel='stylesheet' />
        <link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'>


        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' rel='stylesheet'>
        
    </head>
    <body>

        <div class="logo">
               <img class="img1"  src="<?=ROOT?>/assets/images/editprofile/logo.png">
               <img  class="img4" onclick="document.location='../Profile'" src="<?=ROOT?>/assets/images/editprofile/arrow-left-circle.svg">
        </div>

        <div class="Register">
              <p class="letter">Edit Profile</p>
        </div>
    <form class="" action="editprofile" method="post" enctype="multipart/form-data">
        <div style="display : grid; grid-template-columns: 50% 50%">
              <div>

                     <div style="display : grid; grid-template-columns: 50% 50%"> 

                              <div>
                                <label class="name">Name</label>
                                <label class="name1">*</label>
                                <input class="firstname" type="textbox" placeholder="<?=$data['first_name']?>" name="first_name"> 
                              </div>
                              <div>
                                <input class="lastname" type="textbox" placeholder="<?=$data['last_name']?>" name="last_name"> 
                              </div>

                     </div>
                    
                     <div>
                        <label class="Address-name" >Address</Address></label>
                        <label class="Address-name1">*</label>
                        <br>
                           <input class="Address" type="textbox" placeholder="<?=$data['address']?>" name="address"> 
                     </div>
                     
                     <div style="display : grid; grid-template-columns: 50% 50%">
                      
                            <div> 
                              <label class="Postal-code-name">Postal code</Address></label>
                              <label class="Postal-code-name1">*</label>
                              <br>
                              <input class="Postal-code" type="textbox" placeholder="<?=$data['postal_code']?>" name="postal_code"> 
                            </div>

                            <div>
                              <label class="City-name">City</Address></label>
                              <label class="City-name1">*</label>
                              <br>
                              <input class="City" type="textbox" placeholder="<?=$data['city']?>" name="city"> 
                            </div>
                     </div>

                     <div>
                           <label class="ContactNo-name">Contact No</Address></label>
                            <label class="ContactNo-name1">*</label>
                             <br>
                             <img class="srilanka"  src="<?=ROOT?>/assets/images/buyersignup page/Sri Lanka.png">
                             <label class="ContactNo-name2">|</label>
                             <label class="ContactNo-name3">+94</label>
                            <input class="ContactNo" type="textbox" placeholder="<?=$data['contact_number']?>" name="contact_number">
                     </div>


              </div>
              <div>
                     <div>
                     <label class="upload-profile-pic">Upload profile picture </Address></label>
                     </div>   

                     <div>
                     <label class="profile-picture">Profile picture</label>
                     <label class="profile-picture1">*</label>
                     <label class="about-name">About</label>
                     <label class="about-name1">*</label>
                     </div>

                     <div class="row">
                     <!-- class="file"  -->
                     <!-- <input type="file" id="profilepic" credits='false'  accept=".jpg, .jpeg, .png" value="">
                     <input type="hidden" id="pplink" name="pplink"> -->
                     <input  type="file" id="profilepic" credits='false' name="image" 
                                    accept="image/png, image/jpeg, image/gif" />
                     <input type="hidden" id="pplink" name="image">
                     </div>
                     <!-- <input class="about" type="textbox" placeholder="  Discribe yourself..." name="description"> -->
                     <div>

                     </div>

                     <div>


                     <a href="Editprofile_changepassword1">
                      
                          <button class="change_password">Change Password</button>
                          </a>
                          <label class="change_password1">></label> 
                      

                      </div>

                     

                      <div>
                          <button class="Register-but" type="submit" name="submit">Update</button> 
                      </div>

            </form>

                      
               

            </div>
        </div>
        
        <div>
          <img class="img2" src="<?=ROOT?>/assets/images/editprofile/register-corner2.png">
          <img class="img3" src="<?=ROOT?>/assets/images/editprofile/register-corner.png">
        </div>


    </body>

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
        // server: '<//?php echo BASEURL ?>/imageUpload/profilepic',
        // labelIdle: `<img src='<//?php echo BASEURL ?>/images/image.svg'/><br/> <span>Upload Profile Picture</span>`,
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
