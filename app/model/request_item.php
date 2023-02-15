<?php

class request_item{

use Model;

protected $table = 'request_item';
protected $allowedColumns = ['post_id','seller_id','item_id','amount','unit','date','address','postal_code','city','contact'];
public $errors = [];


}