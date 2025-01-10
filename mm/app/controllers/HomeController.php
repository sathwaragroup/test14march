<?php

require_once '../app/models/ExampleModel.php';

class HomeController {

    // Simple method to load views
    private function view($viewName, $data = [])
    {
        $filePath = __DIR__ . "/../views/$viewName.php";
        if (file_exists($filePath)) {
            extract($data);
            require $filePath;
        } else {
            die("View not found: $viewName");
        }
    }



    public function index()
    {
        // Example of retrieving data from the model
        $model = new ExampleModel();
        $data = $model->getData();

        // Passing the data to the view
        $this->view('emp', $data);
    }



}
