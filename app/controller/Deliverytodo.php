<?php

//buyerrequest class
class deliverytodo{

  use Controller;
  public function index()
  {

  }
  
  public function view2(){
    $Delivery_discard =new Delivery_discard;
    $order = new Order;
    $checkout = new Checkout;
    $user = new User;
    $postitem = new postitems;

     $arr['del_method']="delper";
     $arr['approved']=0;


     $rows=$order->where($arr);

     if($rows){
 
     foreach($rows as $row){
    
      $arr1['order_code']=$row->order_code;
       
      $row1=$checkout->first($arr1);

      $row->first_name=$row1->first_name;
      $row->last_name=$row1->last_name;
      $row->address=$row1->address;
      $row->contact_number=$row1->contact_number;
      $row->longitude=$row1->longitude;
      $row->latitude=$row1->latitude;



      $arr2['post_id']=$row->post_id;
      $row2=$postitem->first($arr2);


      $row->address_seller=$row2->Address;
      $row->longitude_seller=$row2->plongitude;
      $row->latitude_seller=$row2->platitude;

      $arr3['user_id']=$row2->user_id;

      $row3=$user->first($arr3);

      $row->contact_number_seller=$row3->contact_number;


      $arrw['user_id']= $_SESSION['USER']->id;
      $arrw['post_id']=$row->id;
      $arrw=(array)$arrw;
      $row_discard=$Delivery_discard->where($arrw);

      if($row_discard){
        $row->row_discard=1;
       
      }
      else{
        $row->row_discard=0;
      }
      
      }
     
            $this->view('deliverytodo2',$rows);
     }
     else{
      $this->view('deliverytodo2');
     }
     
    }
    
    


     
public function map()

     {
        // echo "The map() function is being called."; 
        $order = new Order;
        $checkout = new Checkout;
        $user = new User;
        $postitem = new postitems;  

        $id=$_GET['id'];
        $arr['id']=$id;
        $row=$order->first($arr);

        $arr1['order_code']=$row->order_code;
        $row1=$checkout->first($arr1);

        $row->longitude=$row1->longitude;
        $row->latitude=$row1->latitude;


        $arr2['post_id']=$row->post_id;
       $row2=$postitem->first($arr2);


      $row->address_seller=$row2->Address;
      $row->longitude_seller=$row2->plongitude;
      $row->latitude_seller=$row2->platitude;
      
      $row=(array)$row;

      $this->view('map',$row);


     }     
public function approved(){

  
  $id=$_GET['id'];
  $order = new Order;
 $arr['approved_id']= $_SESSION['USER']->id;
 $arr['approved']=1;


  $order->update($id,$arr,'id');

  redirect('Deliverytodo/view2');

}

public function discard(){
  $id=$_GET['id'];
  $Delivery_discard =new Delivery_discard;


  $arrx['user_id'] = $_SESSION['USER']->id;
  $arrx['post_id']=$id;
  $arrx['disprove']=1;
  $arrx=(array)$arrx;

  $Delivery_discard->insert($arrx);
  redirect('Deliverytodo/view2');



}


}





    
    
