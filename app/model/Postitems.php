<?php

class postitems{

use Model;

protected $table = 'postitem';
protected $allowedColumns = ['user_id','item_id','item_type','exp','unit','price','size','stock_size','stock_size1','discount','discount1','Address','location','platitude','plongitude','city','image','description','post_id'];
public $errors = [];

public function func1($para1,$para2){
    $query = "update $this->table set stock_size=$para1  where post_id = '$para2'";
    return $this->query($query);
}
}