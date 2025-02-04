<?php

require_once 'BaseModel.php';

class StudentModel extends BaseModel
{
    public function __construct()
    {
        parent::__construct('student'); // Replace 'student' with your table name
    }

    public function getAllDataStudent()
    {
        $query = "SELECT * FROM student ";
        return $this->customQuery($query);
    }

        // Get states based on the selected country
    public function getStudentById($id) {
        return $this->read($id);
    }

    // Get cities based on the selected state
    public function myQuery($data) {
        return $this->customQuery($data);
    }

    // Get cities based on the selected state
    public function StudentInsert($data) {
        return $this->create($data);
    }

    public function StudentUpdate($id, $data)
    {
        return $this->update($id,$data);
    }

    public function StudentDelete($id)
    {
        return $this->delete($id);
    }

}
