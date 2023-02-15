<?php

class  Products{
    use controller;

    public function index(){

        echo "This is the products controller";
        $this->view('products/products');
    }
}