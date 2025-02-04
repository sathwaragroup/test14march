<?php

require_once 'BaseModel.php';

class CountryModel  extends BaseModel
{
    public function __construct()
    {
        parent::__construct('country'); // Replace 'employees' with your table name
        parent::__construct('state');
        parent::__construct('city');
    }

    // Get all countries from the database
    public function getCountries() {
        $sql = "SELECT * FROM country";
        return $this->customQuery($sql);
    }

    // Get states based on the selected country
    public function getStates($country_id) {
        $sql = "SELECT * FROM state WHERE country_id = $country_id";
        return $this->customQuery($sql);
    }

    // Get cities based on the selected state
    public function getCities($state_id) {
        $sql = "SELECT * FROM city WHERE state_id = $state_id";
        return $this->customQuery($sql);
    }
}
