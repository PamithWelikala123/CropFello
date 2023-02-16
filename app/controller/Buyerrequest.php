<?php

//buyerrequest class
class Buyerrequest
{

  use Controller;
  public function index()
  {

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
     $this->view('buyerrequest',$rows);

    //  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //    $_POST['post_id'] = $_SESSION['USER']->user_id;
    //   $request_item->insert($_POST);
      
    // }





    } else {
      redirect('login');
    }
  }
}
