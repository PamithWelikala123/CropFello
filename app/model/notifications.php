<?php

class notifications{

use Model;

protected $table = 'notifications';
protected $allowedColumns = ['notification_id','user_id','date','time','description'];
public $errors = [];
}