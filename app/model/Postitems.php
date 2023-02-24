<?php

class postitems{

use Model;

protected $table = 'postitem';
protected $allowedColumns = ['user_id','item_id','item_type','exp','unit','price','size','stock_size','stock_size1','discount','discount1','Address','postalcode','city','image','description','post_id'];
public $errors = [];
}