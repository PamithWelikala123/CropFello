<?php

class createbid{

use Model;

protected $table = 'createbid';
protected $allowedColumns = ['seller_id','item_id','item_type','exp','bid_end_date','hours','minutes','day','initial_price','amount','amount_type','bid_range','address','platitude','plongitude','location','postal_code','city','image','buyer_id','current_value'];
public $errors = [];

public function func1($para){
    $query = "select * from $this->table where post_id = $para";
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
    


    if(empty($data['bid_end_date'])){
        $this->errors['bid_end_date']=" Select the bid_end_date ";
    }

    if (!empty($data['bid_end_date'])) {
        if (strtotime($data['bid_end_date']) <= strtotime(date('Y-m-d'))) {
            $this->errors['bid_end_date'] = "Should be a future date";
        }
    }

    if (!empty($data['bid_end_date']) && !empty($data['exp'])) {
        $bidEnd = strtotime($data['bid_end_date']);
        $exp = strtotime($data['exp']);
        $tenDaysBeforeExp = strtotime('-10 days', $exp);
    
        if ($bidEnd < $tenDaysBeforeExp) {
            
        } else {
            $this->errors['bid_end_date'] = "bid date should lower than 10 days";
        }
    }
    



    if(empty($data['initial_price'])){
        $this->errors['initial_price']=" initial_price price is required";
    }
    if(empty($data['bid_range'])){
        $this->errors['bid_range']=" bid_range price is required";
    }
    if(empty($data['address'])){
        $this->errors['address']=" Address is required";
    }
    if(empty($data['location'])){
        $this->errors['location']=" Location is required";
    }






    if(empty($this->errors)){
        return true;
    }


     return false;
    
}






}