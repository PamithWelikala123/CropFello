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
      <form action="sellersignup2" method="post" enctype="multipart/form-data" >
      
        <div class="row">
          <div class="col-50">
            
          <input type="hidden" id="firstname"  placeholder="First Name" name="first_name" value="<?php echo $data['first_name']?>">
          <input type="hidden" id="lastname" name="last_name" placeholder="Last Name" value="<?php echo $data['last_name']?>">
          <input type="hidden" id="adress" name="address" value="<?php echo $data['address']?>">
          <input type="hidden" id="district" name="district" value="<?php echo $data['district']?>">
       
          <input type="hidden" id="contact" name="contact_number" value="<?php echo $data['contact_number']?>">
          <input type="hidden" id="pickuplocation" name="location" placeholder="Select and fetch your location" value="<?php echo $data['location']?>">
          <input type="hidden" name="platitude" id="p-latitude" value="<?php echo $data['p-latitude']?>">
          <input type="hidden" name="plongitude" id="p-longitude" value="<?php echo $data['p-longitude']?>">
          <input type="hidden" id="city1" name="city" value="<?php echo $data['city']?>">


            <label for="email">Email *</label>
            <input type="text" id="password" name="email" >
            <label for="password">Password *</label>
            <input type="password" id="password" name="password" >
            <label for="conformpassword">Conform Password *</label>
            <input type="password" id="confirm_password" name="confirm_password" >
          
            <!-- <div class="row">
                <div class="col-25">
                    <input type="submit" value="Register" class="btn">
                  </div>
                
            </div>  -->
            
            
          </div>
          

          <div class="col-50">
            
            <div class="profpic">
            <input type="file" id="profilepic" credits='false' name="image" accept="image/png, image/jpeg, image/gif" />
            <input type="hidden" id="pplink" name="image">
              
            </div>
            
            
            <label class="form-label about" for="about">About</label>
             <input type="text" id="about" placeholder="  Tell us more about you..." name="description" >
              
            

           
             <div class="row">
                <div class="col-25">
                    <!-- <input type="submit" value="Register" class="btn"> -->
                    <button class="btn" type="submit" name="submit" id="submit" >Register</button>
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
      server: '<?php echo ROOT ?>/sellersignup/sellersignup2',
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
      
      
      var serverId = e.detail.file.serverId;
         console.log(serverId);
         var parts = serverId.split('{');
         var filepathData = parts[0];
         console.log(filepathData);
        //  var filepath = filepathData.substring(filepathData.indexOf('"') + 1 + "filepath".length + 2, filepathData.lastIndexOf('"'))
        //  console.log(filepath);
        //  var filepathWithoutQuotes = filepath.replace(/"/g, '');
        //  console.log(filepathWithoutQuotes);
 
         if (filepathData != null) {
             document.getElementById('pplink').value = filepathData;
         }
     });

</script>


</html>
