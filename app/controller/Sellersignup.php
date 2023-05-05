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
                  redirect('sellersignup2');
          }


      $data['errors'] = $user->errors;
      
    }
        $this->view('sellersignup',$data);
    }

}