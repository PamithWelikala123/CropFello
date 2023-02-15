<?php

//Seller Request class
class Seller_approvedrequest{

    use Controller;
    public function index(){
        $request_item = new request_item;
        $row = $request_item->findAll();
        $row = (array) $row;
        $this->view('seller_approvedrequest',$row);
    }

}

