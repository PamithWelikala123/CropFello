<?php

class createbid{

use Model;

protected $table = 'createbid';
protected $allowedColumns = ['seller_id','item_id','item_type','exp','bid_end_date','hours','minutes','day','initial_price','amount','amount_type','bid_range','address','postal_code','city','image','buyer_id','current_value'];
public $errors = [];
}