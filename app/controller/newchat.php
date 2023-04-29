
<?php
class newChat{

use Controller;
public function index()
{
   
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
