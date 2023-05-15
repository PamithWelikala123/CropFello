<?php

class Bank{

use Model;

protected $table = 'bank';
protected $allowedColumns = ['user_id', 'acc_no', 'acc_name', 'bank', 'branch'];
public $errors = [];


public function validate($data){
    
    $this->errors=[];

    if(empty($data['acc_no'])){
        $this->errors['acc_no']="Account number missing";
    }

    if(empty($data['acc_name'])){
        $this->errors['acc_name']=" Account name missing";
    }
    


    if(empty($data['bank'])){
        $this->errors['bank']=" Select the bank from the dropdown";
    }

    if(empty($data['branch'])){
        $this->errors['branch']=" Branch is required";
    }


    if(empty($this->errors)){
        return true;
    }


     return false;
    
}


}

