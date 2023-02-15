<?php

//Message class
class Message{

use Controller;
public function index(){

    
    if ($_SESSION['USER']) {
        $row = [];
        $user = new User;
        $arr1['email'] = $_SESSION['USER']->email;
        $row = $user->first($arr1);
        $row_array = (array)$row;

        if($row){
            $this->view('message', $row_array);
        }
        else{
            $this->view('message');
        }
       
        
    }
    else{
        redirect('login');
    }
}

}
 
                            // $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                            // if(mysqli_num_rows($sql) > 0){
                            // $row = mysqli_fetch_assoc($sql);
                            // }
