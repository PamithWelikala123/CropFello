<?php

//Feed class
class Feed{

    use Controller;
    public function index(){
    $postitem = new postitems;
    $item = new item;

    $rows = $postitem->findAll();
    
    foreach ($rows as $row) {
        $arr1['item_id'] = $row->item_id;
        $row1 = $item->first($arr1);
        $row->item_name = $row1->name;
      }

        $this->view('feed',$rows);
    }


    public function viewitems(){
      $user = new User;
        $postitem = new postitems;
        $item = new item;

      $id=$_GET['id'];
    //  echo $id;
    $arr1['post_id'] = $id;
    
    $row= $postitem->first($arr1);

    $arr3['user_id'] =  $row->user_id;

    $row3= $user->first($arr3);
    $row->first_name=$row3->first_name;
    $row->last_name=$row3->last_name;
    


      $arr2['item_id'] = $row->item_id;
    $row1 = $item->first($arr2);
    $row->item_name=$row1->name;
    $row=(array)$row;
        $this->view('viewitem',$row);
      
    }

}

