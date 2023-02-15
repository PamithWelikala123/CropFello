<?php

//Seller class
class Sellersignup{

    use Controller;
    public function index(){
    $data = [];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $user = new User;
      $data1=$user->validate($_POST);
      if ($user->validate($_POST)) 
      
    {
      $ran_id = rand(time(), 100000000);
       $status = "Active now";
       $_POST['password'] = md5($_POST['password']);
        $_POST['seller'] = 1;
        $user->insert($_POST);

        redirect('login');
    }

      $data['errors'] = $user->errors;
      
    }
        $this->view('sellersignup',$data);
    }

}