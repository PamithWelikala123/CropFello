<?php

class request_item{

use Model;

protected $table = 'request_item';
protected $allowedColumns = ['item_id','amount','unit','date','address','postal_code','city','contact','post_id','seller_id','approved','approved_userid'];
public $errors = [];


public function insertitems(){
        $_POST['seller_id'] = $_SESSION['USER']->user_id;
       $request_item->insert($_POST);
     }

}