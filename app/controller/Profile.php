<?php

//Editprofile_changepassword class
class profile{

    use Controller;
    public function index(){

        $this->view('viewownprofile');
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

            if(isset($_POST["submit"])){
            
                  if($_FILES["image"]["error"] == 4){
                    echo
                    "<script> alert('Image Does Not Exist'); </script>"
                    ;
                  }
                  else{
                    $fileName = $_FILES["image"]["name"];
                    $fileSize = $_FILES["image"]["size"];
                    $tmpName = $_FILES["image"]["tmp_name"];
                
                    $validImageExtension = ['jpg', 'jpeg', 'png'];
                    $imageExtension = explode('.',$fileName);
                    $imageExtension = strtolower(end($imageExtension));
                
                    $newImageName = uniqid();
                    $newImageName .= '.'.$imageExtension;

                    $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/Cropfello/public/assets/images/Profile_pic/'.$newImageName;
                  //  echo $newImageName;
                    move_uploaded_file($tmpName, $destinationPath); 
                    $arr['image']=$newImageName;
                   // $user->update($_SESSION['USER']->user_id,$arr ,'user_id');
                  }
                
              }
            $arr['user_id']=$_SESSION['USER']->user_id;
            $row=$user->first($arr);
            $row=(array)$row;

            if(($row['first_name'])!=$_POST['first_name']){
              $arr['first_name']=$_POST['first_name'];
            }
            
            if(($row['last_name'])!=$_POST['last_name']){
              $arr['last_name']=$_POST['last_name'];
            }

            if(($row['address'])!=$_POST['address']){
              $arr['address']=$_POST['address'];
            }
            
            if(($row['city'])!=$_POST['city']){
              $arr['city']=$_POST['city'];
            }

            if(($row['description'])!=$_POST['description']){
              $arr['description']=$_POST['description'];
            }


            $user->update($_SESSION['USER']->user_id,$arr ,'user_id');





    }

}

