<?php

require_once 'BaseModel.php';

class ExampleModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('employees'); // Replace 'example' with your table name
    }

    public function getData()
    {
        $query = "SELECT * FROM employees ";
        return $this->customQuery($query);
    }
}
