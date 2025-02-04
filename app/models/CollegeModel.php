<?php

require_once 'BaseModel.php';

class CollegeModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('college'); // Replace 'college' with your table name
    }

    public function getAllDataStudent()
    {
        $query = "SELECT * FROM college ";
        return $this->customQuery($query);
    }
}
