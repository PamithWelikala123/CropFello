<?php

//deliverytodo class
class deliverydoing{

    use Controller;
    public function index(){

        // $this->view('deliverydoing');
    }

    public function view2(){
        $order = new Order;
        $checkout = new Checkout;
        $user = new User;
        $postitem = new postitems;
        $transaction =new transaction;

        $arr['approved_id']=$_SESSION['USER']->id;
        $arr['delivery_done']=0;
        $rows=$transaction->where($arr);
        if($rows){
        foreach($rows as $row){
            $arr1['user_id']=$row->buy_id;
            $row1=$user->first($arr1);
            
            $row->first_name=$row1->first_name;
            $row->last_name=$row1->last_name;
            $row->address=$row1->address;
            $row->contact_number=$row1->contact_number;
            $row->longitude=$row1->plongitude;
            $row->latitude=$row1->platitude;


            $arr2['post_id']=$row->post_id;
            $row2=$postitem->first($arr2);

            $row->address_seller=$row2->Address;
            $row->longitude_seller=$row2->plongitude;
            $row->latitude_seller=$row2->platitude;


            $arr3['user_id']=$row2->user_id;
            $row3=$user->first($arr3);

            $row->contact_number_seller=$row3->contact_number;
            $row->profile=$row3->image;
        }
            $this->view('deliverydoing',$rows);
    }
    else{
        $this->view('deliverydoing');
    }

    }

    public function map()

     {
        // echo "The map() function is being called."; 
        $order = new Order;
        $checkout = new Checkout;
        $user = new User;
        $postitem = new postitems;
        $transaction =new transaction;  

        $id=$_GET['id'];
        $arr['id']=$id;
        $row=$transaction->first($arr);

        $arr1['user_id']=$row->buy_id;
        $row1=$user->first($arr1);

        $row->longitude=$row1->plongitude;
        $row->latitude=$row1->platitude;


        $arr2['post_id']=$row->post_id;
       $row2=$postitem->first($arr2);


      $row->address_seller=$row2->Address;
      $row->longitude_seller=$row2->plongitude;
      $row->latitude_seller=$row2->platitude;
      
      $row=(array)$row;

      $this->view('map',$row);


     }

}
