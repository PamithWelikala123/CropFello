<?php

class delivery_user{

use Model;

protected $table = 'delivery_user';
protected $allowedColumns = ['id','fname','lname','email','	password_hash','cnum'];

public $errors = [];


public function validate($data){
    $this->errors = [];      


     if (empty($data['email'])){
        $this->errors['email'] = "Email is Required";

     } else {
     if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $this->errors['email'] = "Email is Not Valid";
     }
     if (validateemail($data['email'])) {
        $this->errors['email'] = "Email is Already Exist";
     }
  }
  
{
     }


     if (empty($data['password_hash'])){
        $this->errors['password_hash'] = "Password is Required";
     }
     if (empty($data['fname'])){
        $this->errors['fname'] = "First_name is Required";
     }
     if (empty($data['lname'])){
        $this->errors['lname'] = "Last name is Required";
     }
     if (empty($data['cnum'])){
        $this->errors['cnum'] = "Contact no is Required";
     }
     if (empty($data['confirm_password'])){
        $this->errors['confirm_password'] = "Confirm_password is Required";
     }




    if(empty($this->errors)){
     return true;
       }


  return false;
}

}