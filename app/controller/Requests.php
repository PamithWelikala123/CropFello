<?php

//buyerrequest class
class requests
{

  use Controller;
  public function index()
  {

  }
  

  public function addRequestItem(){
              echo "awa";
                //$request_item = new request_item;
              if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $_POST['seller_id'] = $_SESSION['USER']->user_id;
                $request_item->insert($_POST);
                //redirect('requests/view1');
            
              }
  }

  public function view1(){

            if ($_SESSION['USER']) {
              
              
              $user = new user;
              $postitems = new postitems;
              $request_item = new request_item;
              $item = new item;
              $item1 = new item;


              $crop_list='';

          //   while($result = mysqli_fetch_assoc($result_set)){
          //   $crop_list .="<option value=\"{$result['item_id']}\">{$result['name']}</option>";

          // }

              
              $id1['user_id'] = $_SESSION['USER']->user_id;
              $buyer = $user->first($id1);
              //echo $buyer->first_name;

              $arr['seller_id'] = $id1['user_id'];
              
              $rows = $request_item->where($arr);
              
            if($rows){

              
              $rows = (array) $rows;

              foreach ($rows as $row) {

              $row->first_name = $buyer->first_name;
              $row->last_name = $buyer->last_name;
                $arr1['item_id'] = $row->item_id;
                $row1 = $item->first($arr1);
                $row->item_name = $row1->name;
              }

              $this->view('buyerrequest',$rows);
            }
            else{
              $this->view('buyerrequest');
            }

          
                

            } 
            else {
              redirect('login');
            }

  }

  public function seller_allrequests(){

            $request_item = new request_item;
            $user_requestitem = new user_requestitem;
            $user= new user;
            $item = new item;


            $rows = $request_item->findAll();

            $id=$_SESSION['USER']->user_id;



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
            $this->view('seller_allrequest',$rows);

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
            $this->notification_seller();
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


  public function notification_seller(){
          $notifications = new notifications;
          $user_id=$_SESSION['USER']->user_id;


          $id=$_GET['id'];
          $arr['post_id']=$id;

          $request_item = new request_item;
          $row=$request_item->first($arr);

          $user = new user;

          $arr2['user_id']=$row->seller_id;



          $row1=$user->first($arr2);



          $arr3['user_id']=$user_id;
         

          $arr3['description']="You have accepted $row1->first_name $row1->last_name Request";
          $arr3=(array)$arr3;


          $notifications->insert($arr3);

          redirect('requests/seller_approvedrequests');


  }


  public function delete(){

          $id=$_GET['id'];
          //echo $id;
          //$arr['post_id']=$id;


          $request_item = new request_item;

          $request_item->delete($id,'post_id');
          redirect('requests/view1');

  }




}
