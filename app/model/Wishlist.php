
<?php

class Wishlist{

use Model;

protected $table = 'wishlist';
protected $allowedColumns = ['post_id','user_id','added_on','time'];
public $errors = [];



}
