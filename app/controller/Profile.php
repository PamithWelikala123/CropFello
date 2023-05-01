<?php

//Editprofile_changepassword class
class profile{

    use Controller;
    public function index(){

        $arr['user_id']=$_SESSION['USER']->user_id;
        $user= new User;
        $row=$user->first($arr);

        $row=(array)$row;

        $this->view('viewownprofile',$row);
    }

    public function Editprofile_details(){

        $arr['user_id']=$_SESSION['USER']->user_id;
        $user= new User;
        $row=$user->first($arr);
        $row=(array)$row;




        $this->view('Editprofile',$row);
    }



    public function editprofile(){
      $user= new User;
      print_r($_POST['pplink']);
            if(isset($_POST["submit"])){
            print_r("AWA");
                  // if($_FILES["image"]["error"] == 4){
                  //   echo
                  //   "<script> alert('Image Does Not Exist'); </script>"
                  //   ;
                  // }
                  // else{
                    
            //         $fileName = $_FILES["image"]["name"];
            //         $fileSize = $_FILES["image"]["size"];
            //         $tmpName = $_FILES["image"]["tmp_name"];
                
            //         $validImageExtension = ['jpg', 'jpeg', 'png'];
            //         echo $fileName;
            //         $imageExtension = explode('.',$fileName);
            //         $imageExtension = strtolower(end($imageExtension));
                
            //         $newImageName = uniqid();
            //         $newImageName .= '.'.$imageExtension;

            //         $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/Cropfello/public/assets/images/Profile_pic/'.$newImageName;
            //       //  echo $newImageName;
            //         move_uploaded_file($tmpName, $destinationPath); 
            //         $arr['image']=$newImageName;
            //        // $user->update($_SESSION['USER']->user_id,$arr ,'user_id');
            //       // }
                
              }
            // $arr['user_id']=$_SESSION['USER']->user_id;
            // $row=$user->first($arr);
            // $row=(array)$row;

            // if (isset($_POST['first_name']) && !empty($_POST['first_name'])) {
            //   $arr['first_name']=$_POST['first_name'];
              
            // }
            

            // if (isset($_POST['last_name']) && !empty($_POST['last_name'])) {
            //   $arr['last_name']=$_POST['last_name'];
            // }


            // if (isset($_POST['address']) && !empty($_POST['address'])) {
            //   $arr['address']=$_POST['address'];
            // }
            
            // if (isset($_POST['city']) && !empty($_POST['city'])) {
            //   $arr['city']=$_POST['city'];
            // }

            // if (isset($_POST['description']) && !empty($_POST['description'])) {
            //   $arr['description']=$_POST['description'];
            // }

            // if (isset($_POST['postal_code']) && !empty($_POST['postal_code'])) {
            //   $arr['postal_code']=$_POST['postal_code'];
            // }
            
            // if (isset($_POST['contact_number']) && !empty($_POST['contact_number'])) {
            //   $arr['contact_number']=$_POST['contact_number'];
            // }


           // $user->update($_SESSION['USER']->user_id,$arr ,'user_id');
            
            //redirect('Profile/Editprofile_details');




    }




    public function Editprofile_changepassword1(){


  
          $this->view('Editprofile_changepassword');
      
  
  }

  public function changepassword(){

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $user = new User;
      
      if(($_SESSION['USER']->password)==md5($_POST['Current-Password'])){
        if(($_POST['Password'])!=($_POST['Current-Password'])){
           if(($_POST['Confirm-Password'])==($_POST['Password'])){
            $arr['password']=md5($_POST['Password']);
            $arr=(array)$arr;
            $user->update($_SESSION['USER']->user_id,$arr,'user_id');
            redirect('profile');
        }
      }
      }
    
    
  }
  
    //redirect('profile/Editprofile_changepassword1');

  }




}

