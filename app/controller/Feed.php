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

}

