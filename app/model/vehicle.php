<?php

class vehicle{

use Model;

protected $table = 'vehicle';
protected $allowedColumns = ['vehicle_id','name'];
public $errors = [];
}