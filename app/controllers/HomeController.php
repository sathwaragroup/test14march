<?php

require_once '../app/models/CountryModel.php';
require_once 'Validator.php';


class HomeController extends BaseController {

private $CountryModel   = [];
private $validator      = [];


    public function __construct()
    {
      
        $this->CountryModel = new CountryModel();
        $this->validator    = new Validator();
    }

    public function index()
    {
        
       
        $this->loadView('index');
    }




    public function college_registration()
    {
        
       
        $this->loadView('college_registration');
    }



    public function student_registration()
    {
        
        
        $this->loadView('student_registration');
    }




    public function college()
    {
        
        
        $this->loadView('college');
    }

    public function courses()
    {
        
        
        $this->loadView('courses');
    }



    public function country()
    {
        
    // $this->validator->required('name', $_POST['country_id'] ?? null);
    // $errors = $this->validator->getErrors('api');

    //     if (empty($errors)) {
    //         $data = [
    //                     "status" => 400,
    //                     "message" => $errors,
                        
    //         ];
    //         echo json_encode($data);
    //         die();
    //     }else{
    //         $data = [
    //                     "status" => 400,
    //                     "message" => $errors,
                        
    //         ];
    //         echo json_encode($data);
    //         die();
    //     }

        $data = $this->CountryModel->getCountries();
        echo json_encode($data);
        die();
        
    }

    public function state()
    {
        $country_id = $_POST['country_id'];

        $data = $this->CountryModel->getStates($country_id);
        echo json_encode($data);
        die();
        
    }


    public function city()
    {
        $state_id = $_POST['state_id'];

        $data = $this->CountryModel->getCities($state_id);
        echo json_encode($data);
        die();
        
    }


    
}
