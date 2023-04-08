<?php

class CountryCityModel {
    private $db;
    

    public function __construct() {

        $this->db =  Database();
    }

    public function getCountries() {
        $query = "SELECT id, name FROM countries";
        $result = $this->db->query($query);
        return $result;
    }

    public function getCitiesByCountry($countryId) {
        $query = "SELECT id, name FROM cities WHERE country_id = " . $countryId;
        $result = $this->db->query($query);
        return $result;
    }
}
