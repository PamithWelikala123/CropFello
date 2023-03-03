<?php

//Login class
class Login
{

    use Controller;


    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['email'] = $_POST['email'];
            $row = $user->first($arr);

            if ($row) {
                if ($row->password == md5($_POST['password'])) {
                    $_SESSION['USER'] = $row;
                    $x="Active Now";
                    $arr['status'] = "Active Now";
                    $user->update($id,$arr);
                    redirect('feed');
                }
            }
            $data['errors'] = $user->errors;
        }
        $this->view('login');


    }




    public function Forgetpassword1(){

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
                    redirect('login/forgetpassword2');
        
                    }
                    
                    $data['errors'] = $user->errors;
                    $_SESSION['status'] = "No Email Found "; 
                    $this->view('forgetpassword1');

       // }
       
        }
        $this->view('forgetpassword1');
    }

    
    public function Forgetpassword2(){

        $id= $_SESSION['USER']->user_id;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['user_id'] = $id;
            $row = $user->first($arr);
            if($row->token==$_POST['token']){
                redirect('login/forgetpassword3');
            }
            
        } else {
            $this->view('forgetpassword2');
        }
    }

    public function Forgetpassword3(){

        $id=$_SESSION['USER']->user_id;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            if($_POST['newpassword']==$_POST['oldpassword']){
                $arr['user_id'] = $id;
                $row = $user->first($arr);
               // $arr['password'] = $_POST['newpassword'];
                $ran_id = rand(time(), 100000000);
                $status = "Active now";
                $arr['password'] = md5($_POST['newpassword']);
                $user->update($id, $arr);
                redirect('login');
            }
            else
            $this->view('forgetpassword3');

        }
        else
        $this->view('forgetpassword3');

    }

          
}

