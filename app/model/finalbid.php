<?php

class finalbid{

use Model;

protected $table = 'final_bidding';
protected $allowedColumns = ['bidding_number','post_id','buyer_id'];
public $errors = [];

}