<?php

class Order{

    use Model;

    protected $table = 'orders';
    protected $allowedColumns = ['id','buy_id','order_code','price','del_price','qua','tot','buy_name','contact_number','post_id','postal_code','city','unit','del_method','cart','distance','approved','approved_id'];

    /*public function email3($para2){
        $query = "select registerd_user.email from $this->table inner join registerd_user on $this->table.user_id = registerd_user.user_id where id = $para2";
        return $this->query($query);
    }*/

    public function func1($para){
        $query = "select orders.id,postitem1.item_name,orders.price,orders.del_price,orders.qua,orders.tot,registerd_user.first_name,registerd_user.last_name,registerd_user.address,registerd_user.contact_number from registerd_user inner join orders on orders.buy_id = registerd_user.user_id inner join postitem1 on orders.post_id = postitem1.id where orders.id = $para";
        return $this->query($query);
    }

    //  $order->func3($user_id,$price,$qua,$id,$del_price,$tot,$unit,$item_name,$rand,$metho,$exp,$placed_on,$image,$distance);
    public function func3($para1,$para2,$para3,$para4,$para5,$para6,$para7,$para8,$para9,$para10,$para11,$para12,$para13,$para14,$para15,$para16){
        $query = "insert into $this->table(buy_id,price,qua,post_id,del_price,tot,unit,item_name,order_code,del_method,exp,placed_on,image,distance,bid,stat) values($para1,$para2,$para3,$para4,$para5,$para6,'$para7','$para8','$para9','$para10','$para11','$para12','$para13',$para14,$para15,'$para16')";
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
        
        $query = "select * from orders where order_code ='$para'";
        
        return $this->query($query);
    }

    public function func6($para){
        $query = "select * from orders where buy_id = $para and del_method = 'delper'";
        return $this->query($query);
    }

    public function func7($para1,$para2,$para3,$para4,$para5){
        $query = "update $this->table set address='$para1', contact_number='$para2', city='$para3', postal_code='$para4' where order_code = '$para5'";
        return $this->query($query);
    }

    public function func8($para1,$para2,$para3,$para4,$para5,$para6,$para7,$para8,$para9,$para10,$para11,$para12,$para13){
        $query = "insert into $this->table(buy_id,price,qua,post_id,del_price,tot,unit,item_name,order_code,del_method,cart,image,exp,placed_on) values($para1,$para2,$para3,$para4,$para5,$para6,'$para7','$para8','$para9','$para10',1,'$para11','$para12','$para13')";
        return $this->query($query);
    }

    public function func9(){
        $query = "select sum(price) as total from orders where cart = 1";
        return $this->query($query);
    }

    public function func10($para){
        $query = "select * from orders where buy_id = $para and cart=1";
        return $this->query($query);
    }

    public function func11($para){
        $query = "select * from orders where cart = 0 and del_method = 'delper' and buy_id = $para";
        return $this->query($query);
    }

    public function func12($para1,$para2,$para3,$para4,$para5,$para6,$para7,$para8,$para9,$para10,$para11,$para12,$para13,$para14,$para15){
        $query = "insert into $this->table(buy_id,price,qua,post_id,del_price,tot,unit,item_name,order_code,del_method,exp,placed_on,image,distance,cart,stat) values($para1,$para2,$para3,$para4,$para5,$para6,'$para7','$para8','$para9','$para10','$para11','$para12','$para13',$para14,1,'$para15')";
        return $this->query($query);
    }

    public function func13($para1,$para2){
        $query = "update $this->table set del_method='$para1' where order_code = '$para2'";
        return $this->query($query);
    }

    public function func14($para){
        $query = "select * from postitem inner join orders on postitem.post_id=orders.post_id inner join checkout on orders.order_code=checkout.order_code where postitem.user_id=$para";
        return $this->query($query);
    }

    

   
}