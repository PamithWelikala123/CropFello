<?php

foreach($data['a'] as $dat){

$amount = $dat->tot;
$merchant_id = "1222939";
$order_id = $dat->order_code;
$merchant_secret = "MzQ3MzQ0OTAzMTI1NzA3NjE5MjQzMTg3ODYzMjk4MjQyNjM4OTEzMw==";
$currency = "LKR";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];

$array["amount"] = $amount;
$array["merchant_id"] = $merchant_id;
$array["order_id"] = $order_id;
$array["currency"] = $currency;
$array["hash"] = $hash;
$array["first_name"] = "pamith";
$array["last_name"] = "welikala";
$array["email"] = "amalperera@gmail.com";
$array["phone"] = "7788";
$array["address"] = "flower road galle";
$array["city"] = "Colombo";
$array["items"] = $dat->item_name;


$jsonobj = json_encode($array);

echo $jsonobj;
//redirect("feed/checkout2");

}