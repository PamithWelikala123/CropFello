
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
               // echo $row->user_id;
                }
            }
            else{
               $output .= 'No user found related to your search term';
             }
            echo $output;

    }


    public function data($id,$other_id,$output){
        
        $user=new User;
        $message1=new Message;

        $rows2=$message1->chatfunction1($id,$other_id);
        
        if ($rows2) {
            foreach ($rows2 as $row) {
                $result = $row->msg ;
            }
        } 
        else {
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
                    <div class="content-chatsystem">
                    <img src="'.ROOT.'/assets/images/Profile_pic/'.$row->image.'"  alt="">
                    <div class="details-chatsystem">
                        <span>'. $row->first_name. " " . $row->last_name .'</span>
                        <p>'. $you . $msg .'</p>
                    </div>
                    </div>
                    <div class="status-dot-chatsystem '. $offline .'"><i class="fas fa-circle"></i></div>
                </a>';
        echo $output;
            
    }






    public function insert_chat(){
        $message1=new Message;

        $outgoing_id=$_SESSION['USER']->user_id;
        $incoming_id=$_POST['incoming_id'];
      $message=$_POST['message'];

        $arr['incoming_msg_id']=$incoming_id;
       $arr['outgoing_msg_id']=$outgoing_id;
        $arr['msg']=$message;


        if(!empty($message)){
          $message1->insert($arr);
        }

    }




    public function get_chat(){
        $user=new User;
        $output = "";
        $message=new Message;
        $outgoing_id=$_SESSION['USER']->user_id;
        $incoming_id=$_POST['incoming_id'];

        $arr['user_id']=$incoming_id;

        $rows=$message->chatfunction2($outgoing_id,$incoming_id);
        $row1=$user->first($arr);

        if($rows){

        foreach($rows as $row){
            if($row->outgoing_msg_id === $outgoing_id){
                $output .= '<div class="chat-chatsystem outgoing-chatsystem">
                            <div class="details-chatsystem">
                                <p>'. $row->msg .'</p>
                            </div>
                            </div>';
            }else{
                $output .= '<div class="chat-chatsystem incoming-chatsystem">
                            <img src="'.ROOT.'/assets/images/Profile_pic/'.$row1->image.'" alt="">
                            <div class="details-chatsystem">
                                <p>'. $row->msg .'</p>
                            </div>
                            </div>';
            }
        }
        }
        else{
            $output .= '<div class="text-chatsystem">No messages are available. Once you send message they will appear here.</div>';
        }
        echo $output;



    }

    public function viewperson(){
        if ($_SESSION['USER']) {

       // $arr['incoming_msg_id']=$_SESSION['USER']->user_id;
        
        $message1=new Message;
        $user=new User;
        $rows=$message1->getchat($_SESSION['USER']->user_id);

        foreach($rows as $row){
            $arr['user_id']=$row->incoming_msg_id;
            $row2=$user->first($arr);
            $row->first_name=$row2->first_name;
            $row->last_name=$row2->last_name;
            $row->image=$row2->image;
           //echo $row->outgoing_msg_id;
           // echo $row->msg ;

        }
        $this->view('message',$rows);
        }
    }

}





?>