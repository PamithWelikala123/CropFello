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





    public function BuyerBidding($rows1=''){
        if (empty($rows1)) {
        $user = new user;

        $postitems = new postitems;
        $item = new item;
        $createbid = new createbid;
        $output = "";

        $arr['seller_id'] =$_SESSION['USER']->user_id;

        $rows1=$createbid->where($data=[],$data_not = $arr);
        }


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
        //$this->content($rows1);
        //$this->view('buyerbidding2',$output);
        $this->view('buyerbidding2', $rows1);
        
    
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

        $createbid = new createbid;
        $searchTerm = $_POST['searchTerm'];  
        $id=$_SESSION['USER']->user_id;
        
        $output = "";

        $rows=$createbid->search('createbid',$id,$searchTerm);
        echo "Hi";

        $this->BuyerBidding($rows);
        // if ($rows) {
        //     foreach($rows as $row){
        //     //$this->data($id,$row->user_id,$output);
        //    // echo $row->user_id;
        //     }
        // }
        // else{
        //    $output .= 'No item found related to your search term';
        //  }
        // echo $output;

}

public static function content($rows) {
    $output = "";
    foreach ($rows as $row) {

    $output .= '  <div class="bidding-post">

                                                    <div class="image">
                                                    <img src="'.ROOT.'/assets/images/Post-images/'.$row->image.'">
                                                    </div>  
                            
                                                    <div class="info">
                            
                                                    <div class="name-size-place">
                                                        <label><span style="color: #000000;">'.$row->item_name.'&nbsp; </span>'.$row->amount.''.$row->amount_type.'</label><br>
                                                        <p><img src="images/map-pin.svg" alt="">&nbsp; '.$row->city.'</p>
                                                    </div>
                            
                                                    <div class="price">
                                                        <h5 class="initial-price">RS '.$row->initial_price.'</h5>
                                                        <h3 class="current-price"><img src="images/green-circle.svg" alt=""> RS '.$row->current_value.'</h3>
                                                    </div>
                            
                                                    <div class="exp"><p><span style="font-weight: 600;">EXP:</span>&nbsp;'.$row->exp.'</p></div>
                                                    <div class="days">
                                                        <p class="remain">'.$row->remaning.' days remaining</p>
                                                        <p class="time1" id="post-'.$row->post_id.'">And <span id="time-'.$row->post_id.'"></span> minutes</p>
                                                        
                                                        
                                                        <?php
                                                            $hours= '.$row->hours.'; 
                                                            $minutes='.$row->minutes.';
                                                            $day='.$row->day.';
                                                        ?>
                            
                            
                                                        <p class="ends-on">Ends on '.$row->bid_end_date.'</p>
                                                    </div>
                            
                                                    <div class="bid-now">
                                                    <button id="'.$row->post_id.'" class="js-bid-now-btn">Bid Now</button>
                                                    </div>
                            
                                                    </div>
                                                </div>
                            
                                                <div id="modal-'.$row->post_id.'" class="modal">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                    
                                                            <span class="closeBtn">&times;</span>
                                                            <h2>Enter your bid value</h2>
                                                            <p>Current bid value: RS '.$row->current_value.'</p>
                                                            <p>Minimum bid value: RS '.$row->bid_range.'</p>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form method="post" autocomplete="off">
                                                            <label> RS: &nbsp;</label>
                                                            
                                                            <input type="text" placeholder="Enter your bid" name="bidvalue"><label>&nbsp;.00</label>
                                                            
                                                            <button>Bid Now</button>
                                                            </form>
                                                        </div>
                                                        </div>
                                                    </div>';
                             
                }
                echo $output;
                
                
                }

}