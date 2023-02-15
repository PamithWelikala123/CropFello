<?php

//Forget Password class
class Forgetpassword1{

    use Controller;
    public function index(){
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $token = rand(1231,7879);
            $user = new User;
               // if(isset($_POST['password-reset-code.php'])){
                    $arr['email'] = $_POST['email'];
                    $row = $user->first($arr);

                    if($row){
                    $arr['token'] = $token;
                    $get_email = $row -> email;
                    $get_id = $row -> user_id;
                     $first_name = $row->first_name;
                    $last_name=$row->last_name;
                    $full_name = $first_name . " " . $last_name; 
                    $row->last_name ;
                     $user->update($get_id, $arr);
                     $_SESSION['USER'] = $row;
              //  echo $full_name;
                    send_password_reset($full_name, $get_email, $token);
                    redirect('forgetpassword2');
        
                    }
                    
                    $data['errors'] = $user->errors;
                    $_SESSION['status'] = "No Email Found "; 
                    $this->view('forgetpassword1');

       // }
       
        }
        $this->view('forgetpassword1');
    }

}
