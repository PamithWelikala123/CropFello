<?php

class registerd_user{

use Model;

protected $table = 'registerd_user';
protected $allowedColumns = ['user_id','first_name','last_name','address','contact_number','email','password','postal_code','city','image','seller','buyer','deliver','token','description','status'];
public $errors = [];
}