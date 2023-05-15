<?php

class Delivery_discard{

    use Model;

    protected $table = 'delivery_discard';
    protected $allowedColumns = ['user_id','post_id','disprove'];


    public $errors = [];
}