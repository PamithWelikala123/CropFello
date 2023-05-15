<?php

class postitems{

use Model;

protected $table = 'postitem';
protected $allowedColumns = ['user_id','item_id','item_type','exp','unit','price','size','stock_size','stock_size1','discount','discount1','Address','location','platitude','plongitude','city','image','description','post_id','district'];
public $errors = [];

public function func1($para1,$para2){
    $query = "update $this->table set stock_size=$para1  where post_id = '$para2'";
    return $this->query($query);
}


public function validate($data){
    // print_r(date('m-d-Y'));
    $this->errors=[];

    if(empty($data['item_id'])){
        $this->errors['item_id']=" Select the crop from the dropdown";
    }

    if(empty($data['exp'])){
        $this->errors['exp']=" Select the crop from the dropdown";
    }
    if (!empty($data['exp'])) {
        if (strtotime($data['exp']) <= strtotime(date('Y-m-d'))) {
            $this->errors['exp'] = "Should be a future date";
        }
    }
    


    if(empty($data['district'])){
        $this->errors['district']=" Select the district from the dropdown";
    }

    if(empty($data['size'])){
        $this->errors['size']=".";
    }
    if(!empty($data['size'])){
        if($data['size']>$data['stock_size']){
        $this->errors['size']=" Exceeds stock size";
    }
    }

    if(empty($data['price'])){
        $this->errors['price']=" Unit price is required";
    }
    if(empty($data['stock_size'])){
        $this->errors['stock_size']=" Unit price is required";
    }
    if(empty($data['Address'])){
        $this->errors['Address']=" Address is required";
    }
    if(empty($data['location'])){
        $this->errors['location']=" Location is required";
    }
    if($data['discount']>=100){
        $this->errors['discount']=" Discount should be less than 100%";
    }







    if(empty($this->errors)){
        return true;
    }


     return false;
    
}

}