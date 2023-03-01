<?php

//Chat class
class Chat{

    use Controller;
    public function index()
    {}

    public function chat(){
        if ($_SESSION['USER']) {
            $arr['user_id']=$_SESSION['USER']->user_id;
            $user= new User;
            $row=$user->first($arr);
    
            $row=(array)$row;
    
            $this->view('chat',$row);

        }
        else{
            redirect('login');
        }
    }

    public function chat_search(){

        if ($_SESSION['USER']) {
            $arr['user_id']=$_SESSION['USER']->user_id;
            $user= new User;
            $row=$user->first($arr);
    
            $row=(array)$row;
    
            $this->view('chat_search',$row);

        }
        else{
            redirect('login');
        }
    }

    public function search(){
        
    }

}
