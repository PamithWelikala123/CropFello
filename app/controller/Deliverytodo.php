<?php

//deliverytodo class
class Deliverytodo{

    use Controller;
    public function index(){

        // $todo = new postitems;
        // $item = new item;
    
        // $rows = $postitem->findAll();
        
        // foreach ($rows as $row) {
        //     $arr1['item_id'] = $row->item_id;
        //     $row1 = $item->first($arr1);
        //     $row->item_name = $row1->name;
        //   }

        //$this->view('deliverytodo');
        $this->view('deliverytodo2');
    }

    public function Deliverytodo_approved(){

    }

    public function Deliverytodo_Discard(){

    }

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
