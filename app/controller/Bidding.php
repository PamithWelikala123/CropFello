
<!DOCTYPE html>
<html>
<head>
    <title>My Page</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.5/dist/sweetalert2.all.min.js"></script>
</head>
<body>

<?php

class bidding{

    use Controller;
   

    //Sellerbidding class     
    public function index(){
        
    }
    

    public function biddingbuyer2(){

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
         
        $createbid = new createbid;
         $bidding1=new bid;
         $finalbid = new finalbid;

         $idpost=$_POST['abc'];
         $arr['post_id']=$idpost;

         $row = $createbid->first($arr);
        
         $bidvalue = $_POST['bidvalue'];
         $arr['current_value']= $bidvalue;
         $buyer_id=$_SESSION['USER']->user_id;

         $arr['buyer_id']= $buyer_id;



            if($row){

                        $initial_price=$row->initial_price;
            
                        $bid_range=$row->bid_range;

                        $current_value=$row->current_value;

                        $arr1['bidding_number']=md5(uniqid(rand(), true));
                        $arr1['buyer_id']=$buyer_id;
                        $arr1['post_id']=$idpost;    
                        $arr1['amount']=$bidvalue;
                        

                        $bidding1->insert($arr1);


                      if($bidvalue<$current_value){
                                    echo "<script>";
                                    echo "wrong('We were hoping for a higher amount!');"; // Call the JavaScript function here
                                    echo "</script>"; 

                      }
                      else if(($bidvalue-$current_value)<$bid_range){
                                    echo "<script>";
                                    echo "wrong('We were hoping for a higher amount!');"; // Call the JavaScript function here
                                    echo "</script>"; 
                      }
                      else{

                                    $arr23['buyer_id']= $buyer_id;
                                    $arr23['post_id']=$idpost;
                                    
                                    $row2 = $finalbid->first($arr23);
                                    
                                    $primaryKeys = array('post_id','buyer_id');

                                    if (is_null($row2) || $row2 === '' || empty($row2)) {
                                            $arr23['bidding_number']= $arr1['bidding_number'];
                                           $finalbid->insert($arr23);   
                                    }


                                    else{
                                        $arr23['bidding_number']=$arr1['bidding_number'];
                                           $finalbid->update2($arr23,$primaryKeys);
                                    }


                                   $createbid->update($idpost,$arr,'post_id');

                                    echo "<script>";
                                    echo "sucsess()"; // Call the JavaScript function here
                                    echo "</script>";

                      }
        
        
          }
        
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

        $finalbid = new finalbid;
        $bidding1=new bid;
        $createbid = new createbid;

        $buyer_id=$_SESSION['USER']->user_id;
        $arr['buyer_id']=$buyer_id;
        $rows2 = $finalbid->where($arr);

        if($rows2){

            
                foreach ($rows2 as $row) {
                  
                    $arr['post_id']=$row->post_id;

                    $row1=$createbid->first($arr);

                    if($row1->status=="enable"){

                        $post_id=$row1->post_id;
                        $amount=$row1->amount;
                        $row->post_id=$row1->post_id;
                        $row->item_id=$row1->item_id;
                        $row->exp=$row1->exp;
                        $date1=date_create($row1->bid_end_date);
                        $date2=date_create(date("Y-m-d"));
                        $diff=date_diff($date2,$date1);
                        $row->remaning=$diff->format("%R%a");
                        $row->initial_price=$row1->initial_price;
                        $row->current_value=$row1->current_value;
                        $row->bid_range=$row1->bid_range;
                        $row->bid_end_date=$row1->bid_end_date;
                        $row->image=$row1->image;
                        $row->amount=$row1->amount;
                        $row->amount_type=$row1->amount_type;
                        $arr1['bidding_number']=$row->bidding_number;
                        $row->city=$row1->city;

                        $row2=$bidding1->first($arr1);
                        $row->youramount=$row2->amount;


                        // $this->view('buyerbiddingmybid');


                    }

                //    $arr['bidding_number']=$row->bidding_number;
                 //   $post_id=$row1->post_id;
                 //   $amount=$row1->amount;


                }
        }

                 $this->view('buyerbiddingmybid',$rows2);
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




        public function mybid(){

          $createbid = new createbid;
          $bidding=new bid;
          $id=$_SESSION['USER']->user_id;
          
          $rows=$bidding->bidding($id);
              
          foreach ($rows as $row) {
              
            $post_id=$row->post_id ;
            echo $post_id;
            
            }

        }              



}

?>

<script>

function sucsess(){    
Swal.fire({
    title: 'Success!',
    text: 'Your Bid has been processed.',
    icon: 'success',
    confirmButtonText: 'OK'
}).then(function() {
    window.location = 'BuyerBidding';
  });
}

function wrong(MESSAGE) {
  Swal.fire({
    icon: 'error',
    title: 'Oops...',
    text: MESSAGE,
  }).then(function() {
    window.location = 'BuyerBidding';
  });
}


</script>

</body>
</html>
