<?php

//Seller Request class
class Seller_allrequest{

    use Controller;
    public function index(){
        $request_item = new request_item;
        $row = $request_item->findAll();
        $row = (array) $row;
        $this->view('seller_allrequest',$row);
    }

}

