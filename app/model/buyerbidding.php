<?php

class buyerbidding{

use Model;

protected $table = 'buyerbidding';
protected $allowedColumns = ['post_id','user_id','bidvalue','time'];
public $errors = [];
}