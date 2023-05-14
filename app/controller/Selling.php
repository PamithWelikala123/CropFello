<?php

//Selling class
class Selling{

    use Controller;
    public function selling()
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

    public function databasepost(){
        $arr = array();
        $newFilename='';
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                                                                $filename = basename($_FILES['image']['name']);
                                                                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                                                                $newFilename = uniqid() . '.' . $ext;
                                                                $targetPath = APPROOT . '/../public/assets/images/Post-images/' . $newFilename;
                                                                $arr["image"] = $newFilename;
                                                                
                                                                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                                                                    // Return JSON response with file path
                                                                    $response = [
                                                                        // 'success' => true,
                                                                        'filepath' =>$newFilename,
                                                                       
                                                                    ];
                                                                    echo $_POST['image'];
                                                                    echo json_encode($response);
                                                                } else {
                                                                    // $response = ['success' => false];
                                                                    // echo json_encode($response);
                                                                }
                                                            } else {
                                                                // $response = ['success' => false];
                                                                // echo json_encode($response);
                                                            }
     }                                                       // Move this line inside the "if" statement
     if (isset($_POST['submit'])) {   
        


                                                            $postitem = new postitems;
                                                            $_POST['user_id']=$_SESSION['USER']->user_id;
                                                      
                                            
                                                            $postitem -> validate($_POST);
                                                            $data['arr']=$_POST;         
                                                            $data['errors'] = $postitem->errors;

                                                            if($postitem -> validate($_POST)){
                                                            $row=$postitem->insert($_POST);
                                                             redirect('selling/selling');
                                                            }

                                                            // $this->view('postitem',$data);
                                                            
    }

           

        }
        //redirect('selling/selling');
        
   

    public function Postitem(){
        $this->view('postitem');
    }







    public function mytransaction(){
        $user = new User;
        $postitem = new postitems;
        $item = new item;
        $order = new Order;
        $checkout = new checkout;

        $arry1['user_id']=$_SESSION['USER']->user_id;
        $user_id = $_SESSION['USER']->user_id;

        $data = $order->func14($user_id);

        $this->view('seller_mytransaction',$data);
    }





    public function mytransaction_past1(){   
        // $order = new Order();
        $transaction = new transaction();
        $user = new User();
        $postitem = new Postitems();
        $deliveryuser = new Deliveryuser1();

        $arr['user_id']=$_SESSION['USER']->user_id;
        $rows = $postitem->where($arr);
        if($rows) {
        foreach($rows as $row){
            $arr1['post_id']=$row->post_id;
            $arr1['approved']=1;
            $rows1= $transaction->where($arr1);
            if($rows1){
                foreach($rows1 as $row1){
                    $arr2['user_id'] = $row1->buy_id;
                    $row2 = $user->first($arr2);

                    if ($row2) {
                        $row1->city = $row2->city;
                        $row1->first_name = $row2->first_name;
                    }
                }
            }
        }

        $this->view('seller_mytransaction_past',$rows1);
    }
    $this->view('seller_mytransaction_past'); 
    }

    public function mytransaction1()
    {
        $order = new Order();
        $postitem = new Postitems();
        $user = new User();
    
        $arr['user_id'] = $_SESSION['USER']->user_id;
        $rows = $postitem->where($arr);
        if($rows) {
    
        foreach ($rows as $row) {

            
            $arr1['post_id'] = $row->post_id;
            $rows1 = $order->where($arr1);

    
            if($rows1) {
                foreach ($rows1 as $row1) {

                     $arr2['user_id'] = $row1->buy_id;
                    $row2 = $user->first($arr2);
    
                    if ($row2) {
                        $row1->city = $row2->city;
                        $row1->first_name = $row2->first_name;
                    }
                }
            }
        }
        $this->view('seller_mytransaction',$rows1);
    }
    
    //$this->view('seller_mytransaction'); 
    }

    public function mytransaction_past(){
        $tran = new transaction;
        $order = new Order;
        $arr['user_id'] = $_SESSION['USER']->user_id;
        $user_id = $_SESSION['USER']->user_id;

        $data['a'] = $tran->func2($user_id);
        $this->view('seller_mytransaction_past',$data);
    }
    
    
















    


    public function delete(){
        $postitem = new postitems;
        $postitem->delete($_POST['abc'],'post_id');
        redirect('selling/selling');;
       

    }



    public function update(){
        $postitem = new postitems;
        $id=$_GET['id'];
        $arr = [];
        $arr['post_id']=$id;
    
        $rows=$postitem->first($arr);
    
        $item = new item;
        $arr1['item_id']=$rows->item_id;
    
        $row1=$item->first($arr1);
        $rows = (array) $rows;




    
       $this->view('updatepost',$rows);
    }







    public function updatepost(){
        $arr = array();
        $newFilename='';
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                                                                $filename = basename($_FILES['image']['name']);
                                                                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                                                                $newFilename = uniqid() . '.' . $ext;
                                                                $targetPath = APPROOT . '/../public/assets/images/Post-images/' . $newFilename;
                                                                $arr["image"] = $newFilename;
                                                                
                                                                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                                                                    // Return JSON response with file path
                                                                    $response = [
                                                                        // 'success' => true,
                                                                        'filepath' =>$newFilename,
                                                                       
                                                                    ];
                                                                    echo $_POST['image'];
                                                                    echo json_encode($response);
                                                                } else {
                                                                    // $response = ['success' => false];
                                                                    // echo json_encode($response);
                                                                }
                                                            } else {
                                                                // $response = ['success' => false];
                                                                // echo json_encode($response);
                                                            }
     }                                                       // Move this line inside the "if" statement
     if (isset($_POST['submit'])) {                                                       
                                                            $postitem = new postitems;
                                                            $_POST['user_id']=$_SESSION['USER']->user_id;

                                                            if(!empty($_POST['price']) && isset($_POST['price'])){
                                                                $arr['price']=$_POST['price'];
                                                            }
                                                            if(!empty($_POST['size']) && isset($_POST['size'])){
                                                                $arr['size']=$_POST['size'];
                                                            }
                                                            if(!empty($_POST['stock_size']) && isset($_POST['stock_size'])){
                                                                $arr['stock_size']=$_POST['stock_size']; 
                                                            }
                                                            if(!empty($_POST['stock_size1']) && isset($_POST['stock_size1'])){
                                                                $arr['stock_size1']=$_POST['stock_size1'];
                                                            }
                                                            if(!empty($_POST['discount']) && isset($_POST['discount'])){
                                                                $arr['discount']=$_POST['discount']; 
                                                            }
                                                            if(!empty($_POST['discount1']) && isset($_POST['discount1'])){
                                                                $arr['discount1']=$_POST['discount1'];
                                                            }
                                                            if(!empty($_POST['Address']) && isset($_POST['Address'])){
                                                                $arr['Address']=$_POST['Address'];
                                                            }
                                                            if(!empty($_POST['image']) && isset($_POST['image'])){
                                                                $arr['image']=$_POST['image'];
                                                            }
                                                            if(!empty($_POST['description']) && isset($_POST['description'])){
                                                                $arr['description']=$_POST['description'];
                                                            }

                                                        $postitem->update($_POST['post_id'],$arr,'post_id');
                                                            redirect('selling/selling');
    }

           

        }













}

