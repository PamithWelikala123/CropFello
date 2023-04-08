<?php

//Buyer class
class deliverysignup{

    use Controller;
    public function index(){

        $model = new CountryCityModel();
        $countries = $model->getCountries();
        $this->view('deliverysignup');
    }
    
    public function getCitiesByCountry() {
        $model = new CountryCityModel();
        $cities = $model->getCitiesByCountry($_GET['country_id']);
        echo json_encode($cities);
    }

}



