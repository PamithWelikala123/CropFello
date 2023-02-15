<?php

class item{

use Model;

protected $table = 'item';
protected $allowedColumns = ['item_id','maximum_rental_price','name','type'];
public $errors = [];
}