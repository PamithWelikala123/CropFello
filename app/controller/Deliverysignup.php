<?php

//Deliver class
class Deliverysignup{

    use Controller;
    // private $model;
    public function index(){

      $data = [];
		
      if($_SERVER['REQUEST_METHOD'] == "POST")
      {
        $user = new delivery_user;
        if($user->validate($_POST))
        {
          $user->insert($_POST);
          redirect('Deliverylogin');
        }
  
        $data['errors'] = $user->errors;			
      }
  
  
      $this->view('deliverysignup',$data);
    }
     
}
    

    
    
    
    
    
    
    
    
    // public function displayListItems() {
    //     $listItems = $this->model->getListItems();
    //     // include 'deliverysignup';
    //     $this->view('deliverysignup');
    // }

    // public function handleFormSubmission() {
    //     $selectedItems = isset($_POST['items']) ? $_POST['items'] : [];
    //     // include 'deliverysignup';
    //     $this->view('deliverysignup');
    // }
    