<?php

class Message{

use Model;

protected $table = 'messages';
protected $allowedColumns = ['msg_id','incoming_msg_id','outgoing_msg_id','msg'];
public $errors = [];
}