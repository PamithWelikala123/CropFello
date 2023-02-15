<?php

//Forget Password class
class Forgetpassword2{

    use Controller;
    public function index(){
        $id= $_SESSION['USER']->user_id;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $arr['user_id'] = $id;
            $row = $user->first($arr);
            if($row->token==$_POST['token']){
                redirect('forgetpassword3');
            }
            
        } else {
            $this->view('forgetpassword2');
        }
    }

}
