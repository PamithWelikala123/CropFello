<?php
// require_once('deliverysignup.php');

class deliverysignup3{
    use Controller;

    // function __construct($db){
    //     $this->db = $db;
    //      $this->view('deliverysignup');
    // }

    function Deliverysignup() {


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $deliveryuser= new Deliveryuser1;


            $deliveryuser->validate($_POST);
           $data['arr']=$_POST;         
           $data['errors'] = $deliveryuser->errors;


            if($deliveryuser->validate($_POST)){
                $_POST['district'] = implode(', ', $_POST['district']);
                  $ran_id = rand(time(), 100000000);
                  $status = "Active now";
                  $_POST['password'] = md5($_POST['password']);
                $deliveryuser->insert($_POST);
                
            }


          
            
        }

        // $this->view('deliverysignup',$data);
        // Display the registration form with any error
    }



    public function register(){
        $this->view('deliverysignup');
      }

















    function success() {
        // Display the success page
        require_once('deliverysignup');
    }

    // function checkUserExists($email) {
    //     $Deliveryuser = new Deliveryuser($this->db);
    //     return $Deliveryuser->checkUserExists($email);
    // }
}

