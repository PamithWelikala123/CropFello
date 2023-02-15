<?php

//Chat class
class Chat{

    use Controller;
    public function index()
    {
        if ($_SESSION['USER']) {
 
            $this->view('chat');
        }
        else{
            redirect('login');
        }
    }


}
