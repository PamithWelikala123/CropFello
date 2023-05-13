<?php

//deliverytodo class
class deliverydone{

    use Controller;
    public function index(){

        // $this->view('deliverydone2');
    }
    
    public function view2(){
        $transaction = new transaction;
        $checkout = new Checkout;
        $user = new User;
        $postitem = new postitems;

        $arr['approved_id']=$_SESSION['USER']->id;
        $arr['delivery_done']=0;
        
        $rows=$transaction->where($arr);
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
        }
        $this->view('deliverydone2',$rows);

    }

    
}
