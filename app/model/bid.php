<?php

class bid{

use Model;

protected $table = 'bidding';
protected $allowedColumns = ['bidding_number','post_id','buyer_id ','amount ','status','time'];
public $errors = [];
}