<?php

class request_item{

use Model;

protected $table = 'request_item';
protected $allowedColumns = ['item_id','amount','unit','date','address','city','contact','post_id','seller_id','approved','approved_userid','location','platitude','plongitude'];
public $errors = [];


public function insertitems(){
        $_POST['seller_id'] = $_SESSION['USER']->user_id;
       $this->insert($_POST);
     }

}