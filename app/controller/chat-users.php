<?php
    $user = new User; 
    $outgoing_id = $_SESSION['unique_id'];
    $query = $user->findAll();

    // $sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} ORDER BY user_id DESC";


    // $query = mysqli_query($conn, $sql);
    $output = "";

    if($rows){
        include_once "chat-data.php";
        
    }else{
        $output .= "No users are available to chat";
    }
    echo $output;
?>