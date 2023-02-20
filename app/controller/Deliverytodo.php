<?php

//deliverytodo class
class deliverytodo{

    use Controller;
    public function index(){



        // if (isset($_GET['id'])){
        //     $id=$_GET['id'];
        //     $sql = "UPDATE info SET status=1 WHERE id='$id'";
        //     $conn->query($sql);
        // }
        // if (isset($_GET['eid'])){
        //     $id=$_GET['eid'];
        //     $sql = "DELETE FROM info WHERE id='$id'";
        //     $conn->query($sql);
        // }

        $this->view('deliverytodo');
    }

}
