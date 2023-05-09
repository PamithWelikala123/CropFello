<?php

//Buyer class
class Deliverysignup{

    use Controller;
    private $model;
    public function index(){

        // $model = new CountryCityModel();
        // $countries = $model->getCountries();
        $data = [];
		
		if($_SERVER['REQUEST_METHOD'] == "POST")
		{
			$user = new User;
			if($user->validate($_POST))
			{
				$user->insert($_POST);
				redirect('deliverylogin');
			}

			$data['errors'] = $user->errors;			
		}


		$this->view('deliverysignup',$data);
    }
     
    public function displayListItems() {
        $listItems = $this->model->getListItems();
        // include 'deliverysignup';
        $this->view('deliverysignup');
    }

    public function handleFormSubmission() {
        $selectedItems = isset($_POST['items']) ? $_POST['items'] : [];
        // include 'deliverysignup';
        $this->view('deliverysignup');
    }

    // public function deliverysignup(){
    //     $this->view('deliverysignup');
    // }
    public function getCountryOptions($db) {
         
        // assume $db is a PDO object representing your database connection
        $stmt = $db->prepare("SELECT vehicle_id, name FROM vehicle");
        $stmt->execute();
    
        $options = array();
        while ($row = $stmt->fetch()) {
          $vehicle = new Vehicle($row['vehicle_id'], $row['vehicle_name']);
          $options[] = $vehicle;
        }
    
        return $options;
      }









    // public function getCitiesByCountry() {
    //     $model = new CountryCityModel();
    //     $cities = $model->getCitiesByCountry($_GET['country_id']);
    //     echo json_encode($cities);
    // }

    

}



