<?php

class user_requestitem{

use Model;

protected $table = 'user_requestitem';
protected $allowedColumns = ['user_id','post_id','disprove'];
public $errors = [];
}