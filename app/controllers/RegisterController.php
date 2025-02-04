<?php

require_once '../app/models/UsersModel.php';
require_once '../app/models/StudentModel.php';
require_once 'Validator.php';
require_once 'CollegeController.php';


class RegisterController extends BaseController {
private $validator      = [];
private $UsersModel   = [];
private $StudentModel   = [];
private $CollegeController   = [];


    public function __construct()
    {   
        $this->validator    = new Validator();
        $this->UsersModel = new UsersModel();
        $this->StudentModel = new StudentModel();
        $this->CollegeController = new CollegeController();
    }

    public function college_form()
    {
        $this->loadView('college_form');
    }

    public function student_form()
    {
        $this->loadView('student_form');
    }




    public function register_post()
    {
        
        $requestData  =  [

            'first_name' => $_POST['first_name'] ?? null,
            'last_name' => $_POST['last_name'] ?? null,
            'email' => $_POST['email'] ?? null,
            'mobile' => $_POST['mobile'] ?? null,
            'password' => $_POST['password'] ?? null,
            'user_type' => $_POST['user_type'] ?? null,
        ];

        $this->validator->validate('first_name', $requestData['first_name'], ['required', 'min:1']);
        $this->validator->validate('last_name', $requestData['last_name'], ['required', 'min:1']);
        $this->validator->validate('email',$requestData['email'], ['required', 'email']);
        $this->validator->validate('mobile', $requestData['mobile'], ['required', 'min:10','numeric']);
        $this->validator->validate('password',$requestData['password'], ['required', 'min:6']);



        if (empty($this->validator->errors())) {


                $data = $this->UsersModel->userInsert($requestData);



                

            $this->ResponseApi($data,200,"Successfully Saved");
        }else{
            $this->ResponseApi($this->validator->errors(),403);
        }

            
            exit;
    }


}
