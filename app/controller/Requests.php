<?php

//buyerrequest class
class requests
{

  use Controller;
  public function index()
  {

  }
  

  public function addRequestItem(){

              if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $_POST['seller_id'] = $_SESSION['USER']->user_id;
                $request_item->insert($_POST);
                redirect('requests/view1');
            
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
            }
            

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
              $_POST['seller_id'] = $_SESSION['USER']->user_id;
            $request_item->insert($_POST);
          
            }
                $this->view('buyerrequest',$rows);
            } 
            else {
              redirect('login');
            }

  }

  public function seller_allrequests(){

            $request_item = new request_item;
            $user_requestitem = new user_requestitem;


            $rows = $request_item->findAll();

            $id=$_SESSION['USER']->user_id;



            foreach ($rows as $row) {
              $arr['user_id']=$id;
              $arr['post_id']=$row->post_id;
              $arr=(array)$arr;
              $row_discard=$user_requestitem->where($arr);
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
            $row = $request_item->findAll();
            $row = (array) $row;
            $this->view('seller_approvedrequest',$row);
  }


public function approve(){
            $id=$_GET['id'];
            $request_item = new request_item;
            $arr['post_id']=$id;
            $arr=(array)$arr;
            $row=$request_item->first($arr);

            echo $row['seller_id'];

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
          redirect('requests/seller_allrequests');



  }



}
