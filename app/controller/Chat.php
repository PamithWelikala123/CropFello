
<?php
//require_once('../core/Controller.php');
//Chat class
class Chat{

    use Controller;
    public function index()
    {

    }

    public function chat(){
        if ($_SESSION['USER']) {
            $arr['user_id']=$_SESSION['USER']->user_id;
            $user= new User;
            $row=$user->first($arr);
    
            $row=(array)$row;
    
            $this->view('chat',$row);

        }
        else{
            redirect('login');
        }
    }

    public function chat_search(){

        if ($_SESSION['USER']) {
            $arr['user_id']=$_SESSION['USER']->user_id;
            $user= new User;
            $row=$user->first($arr);
    
            $row=(array)$row;
    
            $this->view('chat_search',$row);

        }
        else{
            redirect('login');
        }
    }

    public function search1(){
        error_log('This is a test message.');
            $user= new User;
            $searchTerm = $_POST['searchTerm'];  
            $arr['first_name']=$searchTerm;
            $arr['last_name']=$searchTerm;
            $arr2['user_id']=$_SESSION['USER']->user_id;
            $user->order_column='user_id';
            $output = "";

            $rows=$user->where($arr,$arr2);
            
           // $rows=(array)$rows;
            $flag=0;

            if ($rows) {
                foreach ($rows as $row) {
                    if(($row->user_id)!=$_SESSION['USER']->user_id){
                        $flag=1;
                        echo "hi";
                    }
                 } 
            }
            
            else{
                $output .= 'No user found related to your search term';
            }
            echo $output;

            //$this->view('nikan');
    


    }
    public function search(){
        print_r("check the routing of chat");
        exit();

    }


    public function data(){
        
            // while($row = mysqli_fetch_assoc($query)){
            //     $sql2 = "SELECT * FROM messages WHERE (incoming_msg_id = {$row['unique_id']}
            //             OR outgoing_msg_id = {$row['unique_id']}) AND (outgoing_msg_id = {$outgoing_id} 
            //             OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";
            //     $query2 = mysqli_query($conn, $sql2);
            //     $row2 = mysqli_fetch_assoc($query2);
            //     (mysqli_num_rows($query2) > 0) ? $result = $row2['msg'] : $result ="No message available";
            //     (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;
            //     if(isset($row2['outgoing_msg_id'])){
            //         ($outgoing_id == $row2['outgoing_msg_id']) ? $you = "You: " : $you = "";
            //     }else{
            //         $you = "";
            //     }
            //     ($row['status'] == "Offline now") ? $offline = "offline" : $offline = "";
            //     ($outgoing_id == $row['unique_id']) ? $hid_me = "hide" : $hid_me = "";

            //     $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
            //                 <div class="content">
            //                 <img src="php/images/'. $row['img'] .'" alt="">
            //                 <div class="details">
            //                     <span>'. $row['fname']. " " . $row['lname'] .'</span>
            //                     <p>'. $you . $msg .'</p>
            //                 </div>
            //                 </div>
            //                 <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
            //             </a>';
            // }

            
    }



}




?>