
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
    
           // $row=(array)$row;
    
         //   $this->view('chat',$row);

        }
        else{
          //  redirect('login');
        }
    }

    public function chat1(){
        if ($_SESSION['USER']) {
            $arr['user_id']=$_GET['user_id'];
            $user= new User;
            $row=$user->first($arr);
    
            $row=(array)$row;
    
            $this->view('chat',$row);

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

    public function search(){

            $user= new User;
            $searchTerm = $_POST['searchTerm'];  
            $id=$_SESSION['USER']->user_id;
            
            $output = "";

            $rows=$user->chatfunction($id,$searchTerm);
            if ($rows) {
                foreach($rows as $row){
                $this->data($id,$row->user_id,$output);
                }
            }
            else{
               $output .= 'No user found related to your search term';
             }
            echo $output;

    }


    public function data($id,$other_id,$output){
        
        $user=new User;
        $message=new Message;

        $rows2=$message->chatfunction($id,$other_id);
        if($rows2){
            $result = $rows2['msg'];
        }
        else{
            $result ="No message available";
        }

        (strlen($result) > 28) ? $msg =  substr($result, 0, 28) . '...' : $msg = $result;

        if(isset($rows2['outgoing_msg_id'])){
            ($outgoing_id == $rows2['outgoing_msg_id']) ? $you = "You: " : $you = "";
        }else{
            $you = "";
        }
        
        $arr['user_id']=$other_id;
        $row=$user->first($arr);

       ($row->status == "Not Online") ? $offline = "offline" : $offline = "";

       ($id == $row->user_id) ? $hid_me = "hide" : $hid_me = "";

        $output .= '<a href="chat1?user_id='. $row->user_id .'">
                    <div class="content">
                    <img src="'.ROOT.'/assets/images/Profile_pic/'.$row->image.'"  alt="">
                    <div class="details">
                        <span>'. $row->first_name. " " . $row->last_name .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
        echo $output;
            
    }






    public function insert_chat(){
        $message=new Message;

        $outgoing_id=$_SESSION['USER']->user_id;
        $incoming_id=$_POST['incoming_id'];
        $message=$_POST['message'];

        $arr['incoming_msg_id']=$incoming_id;
        $arr['outgoing_msg_id']=$outgoing_msg_id;
        $arr['msg']=$message;

       
        if(!empty($message)){
            $message->insert($arr);
        }

    }

    public function get_chat(){
        $message=new Message;
        $outgoing_id=$_SESSION['USER']->user_id;
        $incoming_id=$_POST['incoming_id'];

        $rows=$message->chatfunction2($outgoing_id,$incoming_id);
        if($rows){
        foreach($rows as $row){
            if($row['outgoing_msg_id'] === $outgoing_id){
                $output .= '<div class="chat outgoing">
                            <div class="details">
                                <p>'. $row['msg'] .'</p>
                            </div>
                            </div>';
            }else{
                $output .= '<div class="chat incoming">
                            <img src="php/images/'.$row['img'].'" alt="">
                            <div class="details">
                                <p>'. $row['msg'] .'</p>
                            </div>
                            </div>';
            }
        }
        }
        else{
            $output .= '<div class="text">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;



    }


}




?>