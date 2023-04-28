<?php

class vehicle{

use Model;

protected $table = 'vehicle';
protected $allowedColumns = ['vehicle_id','vehicle_name'];
public $errors = [];
}