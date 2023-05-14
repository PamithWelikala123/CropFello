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

        { if ($_SERVER['REQUEST_METHOD'] == "POST") {
                 $user = new User;
                 $arr = array();
                 $arr['user_id']=$_SESSION['USER']->user_id;

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                
                $filename = basename($_FILES['image']['name']);
                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                
                
                $newFilename = uniqid() . '.' . $ext;
                $targetPath = APPROOT . '/../public/assets/images/Profile_pic/' . $newFilename;
                
                
                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                    
                    // Return JSON response with file path
                    $response = [
                        'success' => true,
                        'filepath' => '/public/images/uploadimages/profilepic/' . $newFilename,
                        $arr['image']=$newFilename
                    ];
                    echo  $arr['image'];
                    echo json_encode($response);
                } else {
                    // $response = ['success' => false];
                    // echo json_encode($response);
                }
            } else {
                // $response = ['success' => false];
                // echo json_encode($response);
            }

            

            if(isset($_POST['first_name'])  && !empty($_POST['first_name'])){
                $arr['first_name']=$_POST['first_name'];
            }
            if(isset($_POST['last_name'])  && !empty($_POST['last_name'])){
                $arr['last_name']=$_POST['last_name'];
            }
            if(isset($_POST['address']) && !empty($_POST['address'])){
                $arr['address']=$_POST['address'];
            }
            if(isset($_POST['city']) && !empty($_POST['city'])){
                $arr['city']=$_POST['city'];
            }
            if(isset($_POST['contact_number'])&& !empty($_POST['contact_number'])){
                $arr['contact_number']=$_POST['contact_number'];
            }
            if(isset($_POST['description'])&& !empty($_POST['description'])){
                $arr['description']=$_POST['description'];
            }
            if(isset($_POST['location'])&& !empty($_POST['location'])){

                        $arr['location']= $_POST['location'];
                        $arr['platitude']=$_POST['p-latitude'];
                        $arr['plongitude']=$_POST['p-longitude'];
            }
        
            
            $primaryKeys = array('user_id');
            
            $user->update2($arr,$primaryKeys);

            $arr['user_id']=$_SESSION['USER']->user_id;
            $row = $user->first($arr);
            $_SESSION['USER'] = $row;
            $this->Editprofile_details();

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


  public function recomenedprice(){
    $item = new item;
    


  }




}

