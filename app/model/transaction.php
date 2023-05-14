<?php

class transaction{

use Model;

protected $table = 'transactions';
protected $allowedColumns = ['id','buy_id','order_code','price','del_price','qua','tot','buy_name','contact_number','post_id','postal_code','city','unit','del_method','cart','distance','sell_id','approved_id','delivery_done','del_price','completed_date'];
public $errors = [];

public function func1($para1,$para2,$para3,$para4,$para5,$para6,$para7,$para8,$para9,$para10,$para11,$para12,$para13){
    $query = "insert into $this->table(buy_id,qua,post_id,tot,unit,item_name,order_code,exp,placed_on,image,sell_id,del_price,approved_id) values($para1,$para2,$para3,$para4,'$para5','$para6','$para7','$para8','$para9','$para10',$para11,$para12,$para13)";
    return $this->query($query);
}

public function func2($para){
    $query = "select * from $this->table inner join registerd_user on $this->table.buy_id=registerd_user.user_id where $this->table.sell_id=$para";
    return $this->query($query);
}

public function func3($para){
    $query = "select * from $this->table inner join registerd_user on $this->table.buy_id=registerd_user.user_id where $this->table.buy_id=$para";
    return $this->query($query);
}

}