<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="Stylesheet" href="<?=ROOT?>/assets/css/sellersignup2.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://unpkg.com/filepond@^4/dist/filepond.css' rel='stylesheet' />
<link rel='stylesheet' href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css'>
<link rel='preconnect' href='https://fonts.googleapis.com'>
<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
<link href='https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' rel='stylesheet'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>
<body>
<img src="images/logo.png" alt="">
<img src="<?=ROOT?>/assets/images/images/arrow-left-circle.svg" alt="Back" class="back">
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            
           
            
            <label for="email">Email *</label>
            <input type="text" id="password" name="password" >
            <label for="password">Password *</label>
            <input type="text" id="password" name="password" >
            <label for="conformpassword">Conform Password *</label>
            <input type="text" id="conformpassword" name="conformpassword" >
          
            <!-- <div class="row">
                <div class="col-25">
                    <input type="submit" value="Register" class="btn">
                  </div>
                
            </div>  -->
            
            
          </div>
          

          <div class="col-50">
            
            <div class="profpic">
            <input type="file" id="profilepic" credits='false' name="image" accept="image/png, image/jpeg" />
              <input type="hidden" id="pplink" name="pplink">
              
            </div>
            
            
            <label class="form-label about" for="about">About</label>
             <input type="text" id="about" placeholder="  Tell us more about you..." name="description" >
              
            

           
             <div class="row">
                <div class="col-25">
                    <input type="submit" value="Register" class="btn">
                  </div>
                
            </div> 

          </div>
          
        </div>

        
      </form>
    </div>
  </div>

</div>
<div class="footer">
    <img class="img2" src="<?=ROOT?>/assets/images/buyersignup page/register-corner2.png" alt="">
    <img class="img3" src="<?=ROOT?>/assets/images/buyersignup page/register-corner.png" alt="">
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
<script src="https://unpkg.com/filepond@^4"></script>

<script>

FilePond.registerPlugin(FilePondPluginFileValidateType, FilePondPluginImageExifOrientation, FilePondPluginImagePreview, FilePondPluginImageCrop, FilePondPluginImageResize, FilePondPluginImageTransform);


    FilePond.create(document.getElementById('profilepic'), {
      //server:'http://localhost/Cropfello/public/Profile/editprofile',
        labelIdle: `<img class="userpic" src="<?=ROOT?>/assets/images/pics/account1.png"<br/><br/> <span>Upload Profile Picture</span>`,
        imagePreviewHeight: 50,
        imageCropAspectRatio: '1:1',
        imageResizeTargetWidth: 100,
        imageResizeTargetHeight: 100,
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
