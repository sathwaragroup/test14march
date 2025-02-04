<?php

require_once '../app/models/ExampleModel.php';
require_once '../app/models/CountryModel.php';
require_once 'Validator.php';

class CollegeController extends BaseController{


private $ExampleModel   = [];
private $CountryModel   = [];
private $validator      = [];


    public function __construct()
    {
        $this->ExampleModel = new ExampleModel();
        $this->CountryModel = new CountryModel();
        $this->validator    = new Validator();
    }




    public function about() {
        $this->loadView('index', $data);
    }


}
