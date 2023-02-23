<?php

//Selling class
class Selling{

    use Controller;
    public function index()
    {
        if ($_SESSION['USER']) {
            $postitem = new postitems;
            $item = new item;

            $arr['user_id'] = $_SESSION['USER']->user_id;
            $rows = $postitem->where($arr);

            if ($rows) {
                foreach ($rows as $row) {
                    $arr1['item_id'] = $row->item_id;
                    $row1 = $item->first($arr1);
                    $row->item_name = $row1->name;
                  }

                $this->view('selling', $rows);
            } else {
                $this->view('selling');
            }

            // $this->view('selling', $rows);
        }
        else{
            redirect('login');
        }
    }

    public function databasepost(){
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

            $postitem = new postitems;
            $_POST['user_id']=$_SESSION['USER']->user_id;
            $row=$postitem->insert($_POST);

        }
        redirect('selling');
        
    }


}

