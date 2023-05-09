<?php

//Seller class
class Sellersignup{

    use Controller;
    public $myArray = array();




    public function index(){
    $data = [];


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $user = new User;

      
      
      $data['first_name']=$_POST['first_name'];
      $_POST['location']= $_POST['pickuplocation'];
      
      $data1=$user->validate($_POST);

      if ($user->validate($_POST)) 
      
          {
            
                 $myArray=$_POST;
                  // $ran_id = rand(time(), 100000000);
                  // $status = "Active now";
                  // $_POST['password'] = md5($_POST['password']);
                  //   $_POST['seller'] = 1;
                    //$user->insert($_POST);

                  //   redirect('login');
                //  redirect('sellersignup2');
                $this->sellersignup2();
          }


      $data['errors'] = $user->errors;
      
    }
        $this->view('sellersignup',$data);
    }




    public function sellersignup2(){
      if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $user = new User;
        if ($user->validate2($_POST)) 
      
          {

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
                                    $_POST['image']=$newFilename
                                ];
                              
                                echo json_encode($response);
                            } else {
                                // $response = ['success' => false];
                                // echo json_encode($response);
                            }
                        } else {
                            // $response = ['success' => false];
                            // echo json_encode($response);
                        }
            
                        $_POST=$myArray;
                          $ran_id = rand(time(), 100000000);
                          $status = "Active now";
                          $_POST['password'] = md5($_POST['password']);
                            $_POST['seller'] = 1;
                            $user->insert($_POST);

                            redirect('login');
               
          }


      }
      $this->view('sellersignup2');
    }





}