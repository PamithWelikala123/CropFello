<?php

class Reported_sellers{

use Model;

protected $table = 'reported_sellers';
protected $allowedColumns = ['id','buyer_id','seller_id','reason'];

public function func11($para1, $para2, $para3, $para4){
    $query = "insert into $this->table (buyer_id, seller_id, reason) values($para1, $para2, '$para3')";
    return $this->query($query);
}

public $errors = [];
}