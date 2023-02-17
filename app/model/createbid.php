<?php

class item{

use Model;

protected $table = 'createbid';
protected $allowedColumns = ['seller_id','item_id','item_type','exp','bid_end_date','initial_price','amount','amount_type','bid_range','address','postal_code','city','image','buyer_id','current_value'];
public $errors = [];
}