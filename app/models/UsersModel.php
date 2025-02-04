<?php

require_once 'BaseModel.php';

class UsersModel  extends BaseModel
{
    public function __construct()
    {
        parent::__construct('users'); // Replace 'employees' with your table name
    }

    // Get all countries from the database
    public function getAllUsers($id="") {
        return $this->all($id);
    }

    // Get states based on the selected country
    public function getUserById($id) {
        return $this->read($id);
    }

    // Get cities based on the selected state
    public function myQuery($data) {
        return $this->customQuery($data);
    }

    // Get cities based on the selected state
    public function UserInsert($data) {
        return $this->create($data);
    }

    public function UserUpdate($id, $data)
    {
        return $this->update($id,$data);
    }

    public function UserDelete($id)
    {
        return $this->delete($id);
    }

    

}
