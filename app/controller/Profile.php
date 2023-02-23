<?php

//Editprofile_changepassword class
class profile{

    use Controller;
    public function index(){

        $this->view('viewownprofile');
    }

    public function Editprofile_details(){

        $arr['user_id']=$_SESSION['USER']->user_id;
        $user= new User;
        $row=$user->first($arr);
        $row=(array)$row;

        $this->view('Editprofile',$row);
    }

}

