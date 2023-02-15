<?php

//Createbid class
class Createbid{

    use Controller;
    public function index(){

        //echo $_SESSION['USER'] -> user_id;
        $this->view('createbid');
    }

}
