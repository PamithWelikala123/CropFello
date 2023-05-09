<?php

class Checkout{

    use Model;

    protected $table = 'checkout';
    protected $allowedColumns = ['order_code','first_name','last_name','address','contact_number'];

    /*public function email3($para2){
        $query = "select registerd_user.email from $this->table inner join registerd_user on $this->table.user_id = registerd_user.user_id where id = $para2";
        return $this->query($query);
    }*/

    public function func1($para){
        $query = "select orders.id,postitem1.item_name,orders.price,orders.del_price,orders.qua,orders.tot,registerd_user.first_name,registerd_user.last_name,registerd_user.address,registerd_user.contact_number from registerd_user inner join orders on orders.buy_id = registerd_user.user_id inner join postitem1 on orders.post_id = postitem1.id where orders.id = $para";
        return $this->query($query);
    }
    public function func3($para1,$para2,$para3,$para4,$para5,$para6,$para7){
        $query = "insert into $this->table(order_code,first_name,last_name,address,contact_number,latitude,longitude) values('$para1','$para2','$para3','$para4','$para5',$para6,$para7)";
        return $this->query($query);
    }

    

    public function func2(){
        $query = "select del_user.vehicle_no,del_user.vehicle_type,registerd_user.contact_number,registerd_user.first_name,registerd_user.last_name from registerd_user inner join del_user on del_user.id = registerd_user.user_id inner join orders on orders.del_id = del_user.id where orders.id = 1";
        return $this->query($query);
    }

    public function func4(){
        $query = "select orders.id,postitem1.item_name,orders.price,orders.del_price,orders.qua,orders.tot,registerd_user.first_name,registerd_user.last_name,orders.address,orders.contact_number from registerd_user inner join orders on orders.buy_id = registerd_user.user_id inner join postitem1 on orders.post_id = postitem1.id where orders.id = 1";
        return $this->query($query);
    }

    public function func5($para){
        $query = "select * from $this->table where order_code = '$para'";
        return $this->query($query);
    }

    public function func6($para){
        $query = "select * from $this->table where order_id = $para";
        return $this->query($query);
    }

    public function func7($para1,$para2,$para3,$para4,$para5){
        $query = "update $this->table set address='$para1', contact_number='$para2', city='$para3', postal_code='$para4' where post_id = $para5";
        return $this->query($query);
    }

    public function func8($para1,$para2,$para3){
        $query = "update $this->table set address='$para1', contact_number='$para2' where order_code = '$para3'";
        return $this->query($query);
    }
}