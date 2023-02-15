<?php

    $user = new User;

    $outgoing_id = $_SESSION['USER'] -> user_id;

    // $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $searchTerm = $_POST['searchTerm'];

    //$sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') ";
    //$query = mysqli_query($conn, $sql);

    $query = $user->findAll();

    $output = "";

    
    if($query){
        include_once "chat-data.php";
    }else{
        $output .= 'No user found related to your search term';
    }
    echo $output;
?>