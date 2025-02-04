<?php


class BaseController {
    // public function __construct() {
    //     // Common setup code for all controllers
    //     echo "BaseController initialized\n";
    // }

        // Simple method to load views
    public function loadView($viewName, $data = [])
    {
        $filePath = __DIR__ . "/../views/$viewName.php";
        if (file_exists($filePath)) {
            extract($data);
            require $filePath;
        } else {
            die("View not found: $viewName");
        }
        exit;
    }

    public function redirect($url) {
        // A method to redirect
        header("Location: $url");
        exit;
    }


        public function ResponseApi($data,$code=200,$msg='') {

            $result =   [
                        "status" => $code,
                        "message" => $msg,
                        "data" => $data,
                        
                    ];
            echo json_encode($result);
            exit;
            
        }
}


?>
