<?php

//Sellerbidding class
class bidding{

    use Controller;
      
    public function index(){

        
    }

    public function sellerbidding(){

        $user = new user;
        $postitems = new postitems;
        $item = new item;
        $createbid = new createbid;


                    $id1['user_id'] = $_SESSION['USER']->user_id;

                    $arr['seller_id'] = $id1['user_id'];
                
                    $rows = $createbid->where($arr);
                    
                    if($rows){
            
                            
                        $rows = (array) $rows;
                        
                            foreach ($rows as $row) {
                        
                                $arr1['item_id'] = $row->item_id;
                                $row1 = $item->first($arr1);
                                $row->item_name = $row1->name;
                            }
                    }
        
        $this->view('sellerbidding',$rows);
    }




    public function createbid(){
        $this->view('createbid');
    }




    public function addBiddingItem(){
       
            $user = new user;
            $postitems = new postitems;
            $item = new item;
            $createbid = new createbid;


                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        //echo $_SESSION['USER']->user_id;
                            $_POST['seller_id'] = $_SESSION['USER']->user_id;
                            $postbid->insert($_POST);
                            redirect('biddig/sellerbidding');
                
                    }
    }

}