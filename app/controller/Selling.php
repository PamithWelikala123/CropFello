<?php

//Selling class
class Selling{

    use Controller;
    public function selling()
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
        $arr = array();
        $newFilename='';
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                                                            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                                                                $filename = basename($_FILES['image']['name']);
                                                                $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
                                                                $newFilename = uniqid() . '.' . $ext;
                                                                $targetPath = APPROOT . '/../public/assets/images/Post-images/' . $newFilename;
                                                                $arr["image"] = $newFilename;
                                                                
                                                                if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                                                                    // Return JSON response with file path
                                                                    $response = [
                                                                        // 'success' => true,
                                                                        'filepath' =>$newFilename,
                                                                       
                                                                    ];
                                                                    echo $_POST['image'];
                                                                    echo json_encode($response);
                                                                } else {
                                                                    // $response = ['success' => false];
                                                                    // echo json_encode($response);
                                                                }
                                                            } else {
                                                                // $response = ['success' => false];
                                                                // echo json_encode($response);
                                                            }
     }                                                       // Move this line inside the "if" statement
     if (isset($_POST['submit'])) {                                                       
                                                            $postitem = new postitems;
                                                            $_POST['user_id']=$_SESSION['USER']->user_id;
                                                      
                                                            $row=$postitem->insert($_POST);
                                                             redirect('selling/selling');
    }

           

        }
        //redirect('selling/selling');
        
   

    public function Postitem(){
        $this->view('postitem');
    }

    public function mytransaction(){
        $this->view('seller_mytransaction');
    }


}

