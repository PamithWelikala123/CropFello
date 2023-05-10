<?php

//buyerrequest class
class deliverytodo{

  use Controller;
  public function index()
  {

  }
  
  public function view2(){

    $order = new Order;
    $checkout = new Checkout;
    $user = new User;
    $postitem = new postitems;

     $arr['del_method']="delper";

     $rows=$order->where($arr);

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




     }


      
  
    $this->view('deliverytodo2',$rows);
    }

    
  
  // // public function addRequestItem(){
    
  // //               $request_item = new request_item;
  // //               echo "ufhfu";
  // //               redirect('deliverytodo');
                

  // //             if ($_SERVER['REQUEST_METHOD'] == "POST") {
  // //               $_POST['post_id'] = $_SESSION['USER']->user_id;
  // //               $request_item->insert($_POST);
                
                
            
  // //             }
  // // }

  // public function view1(){

  //           if ($_SESSION['USER']) {
              
              
  //             $user = new user;
  //             $postitems = new postitems;
  //             $request_item = new request_item;
  //             $item = new item;
  //             // $item1 = new item;
  //             $registerd_user = new registerd_user;
  //             $vehicle = new vehicle;


  //             $crop_list='';

  //         //   while($result = mysqli_fetch_assoc($result_set)){
  //         //   $crop_list .="<option value=\"{$result['item_id']}\">{$result['name']}</option>";

  //         // }

              
  //             $id1['user_id'] = $_SESSION['USER']->user_id;
  //             $buyer = $user->first($id1);
  //             $seller = $user->first($id1);
  //             $deliver = $user->first($id1);
  //             // echo $buyer->first_name;

  //             $arr['seller_id'] = $id1['user_id'];
              
  //             $rows = $request_item->where($arr);
              
  //           if($rows){

              
  //             $rows = (array) $rows;

  //             foreach ($rows as $row) {

  //             $row->first_name = $buyer->first_name;
  //             $row->last_name = $buyer->last_name;
  //             $row->fro = $seller->address;
  //             $row->too = $buyer->address;
  //             $row->vname = $deliver->vehicle_name;
              
            
  //               $arr1['item_id'] = $row->item_id;
  //               $row1 = $item->first($arr1);
  //               $row->item_name = $row1->name;

  //               // $arr2['vehicle_id'] = $row->vehicle_id;
  //               // $row1 = $vehicle->first($arr2);
  //               // $row->vname = $row1->vehicle_name;
                
                
  //             }

  //             $this->view('deliverytodo',$rows);
  //           }
  //           else{
  //             $this->view('deliverytodo');
  //           }

          
                

  //           } 
  //           else {
  //             redirect('deliverylogin');
  //           }

  // }










  public function buyer_allrequests(){

            $request_item = new request_item;
            $user_requestitem = new user_requestitem;
            $user= new user;
            $item = new item;


            $rows = $request_item->findAll();

            $id=$_SESSION['USER']->user_id;
            //ejkvjrevkje


            foreach ($rows as $row) {
              $arr['user_id']=$id;
              $arr['post_id']=$row->post_id;
              $arr=(array)$arr;
              $row_discard=$user_requestitem->where($arr);

             $arr2['user_id']=$row->seller_id;

            $row_user=$user->first($arr2);
            
              $row->first_name=$row_user->first_name;
              $row->last_name=$row_user->last_name;

              $arr3['item_id']=$row->item_id;

              $row_item=$item->first($arr3);

              $row->item_name=$row_item->name;



              if($row_discard){
                $row->row_discard=1;
              }
              else{
                $row->row_discard=0;
              }
              
          }

            $rows = (array) $rows;
            $this->view('deliverytodo',$rows);

  }


  public function seller_approvedrequests(){

            $request_item = new request_item;
            $user_requestitem = new user_requestitem;
            $user= new user;
            $item = new item;



            $user_id=$_SESSION['USER']->user_id;

            $arr['approved_userid']=$user_id;

            $rows = $request_item->where($arr);
            if($rows){
              foreach ($rows as $row) {
              $arr2['user_id']=$row->seller_id;

              $row_user=$user->first($arr2);
              
                $row->first_name=$row_user->first_name;
                $row->last_name=$row_user->last_name;
  
                $arr3['item_id']=$row->item_id;
  
                $row_item=$item->first($arr3);
  
                $row->item_name=$row_item->name;
  
              }




            $rows = (array) $rows;
            $this->view('seller_approvedrequest',$rows);
            }

            else{
              $this->view('seller_approvedrequest');
            }
  }


public function approve(){
            $id=$_GET['id'];
            $request_item = new request_item;

            $arr['post_id']=$id;
            $arr=(array)$arr;
            $row=$request_item->first($arr);

            $user_id=$_SESSION['USER']->user_id;


            if($row){
             // echo $row->seller_id;
              $row1['approved']=1;
              $row1['approved_userid']=$user_id;
              
              $request_item->update($id,$row1,'post_id');

            }
            // $this->notification_seller();
            //redirect('requests/seller_approvedrequests');
            
}

  public function discard(){
          $id=$_GET['id'];
          //echo $id;

          $user_id=$_SESSION['USER']->user_id;
          //echo $user_id;

          $user_requestitem = new user_requestitem;

          $arrx['user_id']=$user_id;
          $arrx['post_id']=$id;
          $arrx['disprove']=1;
          $arrx=(array)$arrx;
          $user_requestitem->insert($arrx);

          //$this->notification_seller();
          redirect('requests/seller_allrequests');



  }


  public function approve_discard(){

          $id=$_GET['id'];
          $request_item = new request_item;
          $arr['post_id']=$id;
          $arr=(array)$arr;
          $row=$request_item->first($arr);



          if($row){
            // echo $row->seller_id;
             $row1['approved']=0;
             $row1['approved_userid']=0;
             
             $request_item->update($id,$row1,'post_id');

           }
           redirect('requests/seller_approvedrequests');


  }


  // public function notification_seller(){
  //         $notifications = new notifications;
  //         $user_id=$_SESSION['USER']->user_id;


  //         $id=$_GET['id'];
  //         $arr['post_id']=$id;

  //         $request_item = new request_item;
  //         $row=$request_item->first($arr);

  //         $user = new user;

  //         $arr2['user_id']=$row->seller_id;



  //         $row1=$user->first($arr2);



  //         $arr3['user_id']=$user_id;
         

  //         $arr3['description']="You have accepted $row1->first_name $row1->last_name Request";
  //         $arr3=(array)$arr3;


  //         $notifications->insert($arr3);

  //         redirect('requests/seller_approvedrequests');


  // }


  // public function delete(){

  //         $id=$_GET['id'];
  //         //echo $id;
  //         //$arr['post_id']=$id;


  //         $request_item = new request_item;

  //         $request_item->delete($id,'post_id');
  //         redirect('requests/view1');

  // }




}



// if (isset($_GET['id'])){
        //     $id=$_GET['id'];
        //     $sql = "UPDATE info SET status=1 WHERE id='$id'";
        //     $conn->query($sql);
        // }
        // if (isset($_GET['eid'])){
        //     $id=$_GET['eid'];
        //     $sql = "DELETE FROM info WHERE id='$id'";
        //     $conn->query($sql);
        // }
