
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

        $output .= '<a href="chat.php?user_id='. $row->user_id .'">
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



}




?>