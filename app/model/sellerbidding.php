<?php

class sellerbidding{

use Model;

protected $table = 'buyerbidding';
protected $allowedColumns = ['post_id','user_id','bidvalue','type'];
public $errors = [];
}