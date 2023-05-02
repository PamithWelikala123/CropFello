<?php

//deliverytodo class
class deliverytodo{

    use Controller;
    public function index(){

        
            $products_model = new Products();
            $products = $products_model->get_products();
            // include 'views/products.php';
            $this->view('deliverytodo');
    

    

}
}
