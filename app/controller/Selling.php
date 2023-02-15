<?php

//Selling class
class Selling{

    use Controller;
    public function index()
    {
        if ($_SESSION['USER']) {
            $postitem = new postitems;
            $item = new item;

            $arr['user_id'] = $_SESSION['USER']->user_id;
            $rows = $postitem->where($arr);

            if ($rows) {
                foreach ($rows as $row) {
                    $arr1['item_id'] = $row->item_id;
                    $row1 = $item->first($arr1);
                    $row->item_name = $row1->name;
                  }

                $this->view('selling', $rows);
            } else {
                $this->view('selling');
            }

            // $this->view('selling', $rows);
        }
        else{
            redirect('login');
        }
    }


}

