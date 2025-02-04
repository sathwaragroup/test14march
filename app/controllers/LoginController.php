<?php

require_once '../app/models/UsersModel.php';
require_once '../app/models/StudentModel.php';
require_once 'Validator.php';
require_once 'CollegeController.php';


class LoginController extends BaseController {
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

    public function login()
    {
        $this->loadView('login');
    }
    
    public function college_login()
    {
        $this->loadView('college_login');
    }





    public function login_post()
    {
        
        $requestData  =  [

            'email' => $_POST['email'] ?? null,
            'password' => $_POST['password'] ?? null,
        ];


        $this->validator->validate('email',$requestData['email'], ['required', 'email']);
        $this->validator->validate('password',$requestData['password'], ['required', 'min:6']);



        if (empty($this->validator->errors())) {

                $query = " SELECT id,first_name,last_name,email,mobile,address_id FROM  users where email = '".$requestData['email']."' AND password = '".$requestData['password']."' Limit 1 ";
                $data = $this->UsersModel->myQuery($query);


                if (isset($data[0]) && !empty($data[0])) {
                    $_SESSION['userData'] = $data[0];
                    $this->ResponseApi($_SESSION['userData'],200,"Login Successfully");
                }else{
                    $this->ResponseApi("",403,"Please Check Username Or Email And Password!");
                }
            }else{
                $this->ResponseApi($this->validator->errors(),403);
            }

            
            exit;
    }


    public function logout()
    {   
        session_unset();
        session_destroy();

        $this->redirect(BASE_URL);

    }


}
