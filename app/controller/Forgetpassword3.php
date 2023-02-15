<?php

//Forget Password class
class Forgetpassword3{

    use Controller;
    public function index(){
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
