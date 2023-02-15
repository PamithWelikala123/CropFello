<?php

//Postitem class
class Postitem{

    use Controller;
    public function index(){

        //echo $_SESSION['USER'] -> user_id;
        $this->view('postitem');
    }

}

