<?php

class createbid{

use Model;

protected $table = 'createbid';
protected $allowedColumns = ['seller_id','item_id','item_type','exp','bid_end_date','hours','minutes','day','initial_price','amount','amount_type','bid_range','address','platitude','plongitude','location','postal_code','city','image','buyer_id','current_value'];
public $errors = [];

public function func1($para){
    $query = "select * from $this->table where post_id = $para";
    return $this->query($query);
}

}