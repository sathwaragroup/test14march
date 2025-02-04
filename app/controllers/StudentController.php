<?php

require_once '../app/models/UsersModel.php';
require_once '../app/models/StudentModel.php';
require_once 'Validator.php';
require_once 'CollegeController.php';


class StudentController extends BaseController {
private $UsersModel   = [];
private $StudentModel   = [];
private $validator      = [];
private $CollegeController   = [];


    public function __construct()
    {   
        $this->UsersModel = new UsersModel();
        $this->StudentModel = new StudentModel();
        $this->validator    = new Validator();
        $this->CollegeController = new CollegeController();
    }

    public function student()
    {
        $this->loadView('student', $data);
    }


    public function student_registration_post()
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


                $data = $this->UsersModel->userInsert($requestData);



                

                $this->ResponseApi($data,200,"Successfully Saved");
            }else{
                $this->ResponseApi($this->validator->errors(),403);
            }

            
            exit;
    }


}
