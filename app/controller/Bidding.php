<?php

//Sellerbidding class
class bidding{

    use Controller;
      
    public function index(){
  
    }
    

    public function biddingbuyer(){
        $createbid = new createbid;
        $id = $_POST['id'];
       // redirect('Bidding/BuyerBidding');
        $arr['post_id']= $id;
        $row = $createbid->first($arr);
        

            if($row){

            $initial_price=$row->initial_price;
            $bid_range=$row->bid_range;
            $current_value=$row->current_value;
            echo $initial_price;
            echo $bid_range;
            echo $current_value;
            }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new User;
            $bidvalue = $_POST['bidvalue'];
            echo "<script>console.log('$bidvalue');</script>";
            
            $buyer_id=$_SESSION['USER']->user_id;

            $createbid->update($id,$bidvalue,$id_column = 'bidvalue');
            $createbid->update($id,$buyer_id,$id_column = 'buyer_id');
           // redirect('Bidding/BuyerBidding');
        
        }       
    
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
                                $date1=date_create($row->bid_end_date);
                                $date2=date_create(date("Y-m-d"));
                                $diff=date_diff($date2,$date1);
                                $row->remaning=$diff->format("%R%a");
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

            if(isset($_POST["submit"])){
                if(isset($_POST["submit"])){
                
                      if($_FILES["image"]["error"] == 4){
                        echo
                        "<script> alert('Image Does Not Exist'); </script>"
                        ;
                      }
                      else{
                        $fileName = $_FILES["image"]["name"];
                        $fileSize = $_FILES["image"]["size"];
                        $tmpName = $_FILES["image"]["tmp_name"];
                    
                        $validImageExtension = ['jpg', 'jpeg', 'png'];
                        $imageExtension = explode('.',$fileName);
                        $imageExtension = strtolower(end($imageExtension));
                    
                        $newImageName = uniqid();
                        $newImageName .= '.'.$imageExtension;
    
                        $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/Cropfello/public/assets/images/Post-images/'.$newImageName;
                        move_uploaded_file($tmpName, $destinationPath); 
                        $_POST['image']=$newImageName;
                      }
                    }
            }


                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        //echo $_SESSION['USER']->user_id;
                            $_POST['seller_id'] = $_SESSION['USER']->user_id;
                            $_POST['current_value']=$_POST['initial_price'];
                            $createbid ->insert($_POST);
                            redirect('bidding/sellerbidding');
                
                    }
    }





    public function BuyerBidding(){

        $user = new user;
        $postitems = new postitems;
        $item = new item;
        $createbid = new createbid;


        $arr['seller_id'] =$_SESSION['USER']->user_id;

        $rows1=$createbid->where($data=[],$data_not = $arr);


        if($rows1){
            
                            
            $rows1 = (array) $rows1;
            
                foreach ($rows1 as $row) {
                   
                                
                                $date1=date_create($row->bid_end_date);
                                $date2=date_create(date("Y-m-d"));
                                $diff=date_diff($date2,$date1);
                                $row->remaning=$diff->format("%R%a");
                                $arr1['item_id'] = $row->item_id;
                                $row1 = $item->first($arr1);
                                $row->item_name = $row1->name;
                    
                }
                
        }

         $this->view('buyerbidding2',$rows1);
    
    }


    
    public function BuyerBiddingmybid(){
    
            $this->view('buyerbiddingmybid');
    }



    public function addBiddingValue(){
        $buyerbidding = new buyerbidding;

         if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $_POST['user_id'] = $_SESSION['USER']->user_id;
                        //echo  $_POST['user_id'];
                        echo "<script>console.log('{$_POST['user_id']}' );</script>";
                        //$arr['user_id']= $_POST['user_id'] ;
        //                 $_POST['user_id'] = $_SESSION['USER']->user_id;
                       // echo $_POST['post_id']; 
                        echo "<script>console.log('{$_POST['post_id']}' );</script>";
                       //$buyerbidding->insert($arr);
                      // $this->view('addBiddingValue');
                      redirect('feed');
                        
         }
         else{
            echo "Hira wela";
         }


    //}

    }



    public function search(){

        $user= new User;
        $searchTerm = $_POST['searchTerm'];  
        $id=$_SESSION['USER']->user_id;
        
        $output = "";

        $rows=$user->search($id,$searchTerm);
        if ($rows) {
            foreach($rows as $row){
            //$this->data($id,$row->user_id,$output);
           // echo $row->user_id;
            }
        }
        else{
           $output .= 'No user found related to your search term';
         }
        echo $output;

}

}