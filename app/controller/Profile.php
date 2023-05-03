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



    public function editprofile()
        {
            
            if (isset($_FILES['profilepic']) && $_FILES['profilepic']['error'] === UPLOAD_ERR_OK) {
                
                $filename = basename($_FILES['profilepic']['name']);
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                
                
                $newFilename = uniqid() . '.' . $ext;
                $targetPath = APPROOT . '/../public/assets/images/Profile_pic/' . $newFilename;
                
                
                if (move_uploaded_file($_FILES['profilepic']['tmp_name'], $targetPath)) {
                    
                    // Return JSON response with file path
                    $response = [
                        'success' => true,
                        'filepath' => '/public/images/uploadimages/profilepic/' . $newFilename
                    ];
                    echo json_encode($response);
                } else {
                    $response = ['success' => false];
                    echo json_encode($response);
                }
            } else {
                $response = ['success' => false];
                echo json_encode($response);
            }
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

