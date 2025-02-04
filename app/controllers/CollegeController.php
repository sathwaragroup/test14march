<?php

require_once '../app/models/UsersModel.php';
require_once 'Validator.php';


class CollegeController extends BaseController {
private $UsersModel   = [];
private $validator      = [];


    public function __construct()
    {
        $this->UsersModel = new UsersModel();
        $this->validator    = new Validator();
    }

    public function college()
    {
        $this->loadView('college');
    }

    public function college_registration()
    {
        $this->loadView('college_registration');
    }


    public function college_registration_post()
    {
        
        $requestData  =  [

            'firstname' => $_POST['firstname'] ?? null,
            'lastname' => $_POST['lastname'] ?? null,
            'email' => $_POST['email'] ?? null,
            'mobile' => $_POST['mobile'] ?? null,
            'password' => $_POST['password'] ?? null,
        ];

        $this->validator->validate('firstname', $requestData['firstname'], ['required', 'min:1']);
        $this->validator->validate('lastname', $requestData['lastname'], ['required', 'min:1']);
        $this->validator->validate('email',$requestData['email'], ['required', 'email']);
        $this->validator->validate('mobile', $requestData['mobile'], ['required', 'min:10','numeric']);
        $this->validator->validate('password',$requestData['password'], ['required', 'min:6']);



        if (empty($this->validator->errors())) {

                
                
                $this->ResponseApi($data=0,200,"Successfully Saved");

            }else{
                $this->ResponseApi($this->validator->errors(),403);
            }

            
            exit;
      
    
    }


}
