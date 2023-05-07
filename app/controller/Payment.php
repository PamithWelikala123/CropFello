<?php

class Payment{

    use Controller;
    public function index(){

        $order_code = $_GET['order_code'];
      
        $checkout = new Checkout;
        $order = new Order;
        //$arr1['order_code'] = $order_code;
        $data['a'] = $order->func5($order_code);
        $data['b'] = $checkout->func5($order_code);
        $this->view('payment',$data);
        
    }
}