<?php

class BaseModel
{
    protected $connection;
    protected $table;

    public function __construct($table)
    {
        $config = require_once '../app/config.php';
        $this->table = $table;

        $this->connection = new mysqli('localhost', 'root', '', 'mydemo3');

        if ($this->connection->connect_error) {
            die('Database connection failed: ' . $this->connection->connect_error);
        }
    }

    public function create($data)
    {
        $columns = implode(',', array_keys($data));
        $values = implode("','", array_map([$this->connection, 'real_escape_string'], array_values($data)));
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ('{$values}')";
        return $this->connection->query($query);
    }

    public function read($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$id}";
        $result = $this->connection->query($query);
        return $result->fetch_assoc();
    }

    public function update($id, $data)
    {
        $fields = [];
        foreach ($data as $key => $value) {
            $fields[] = "{$key} = '" . $this->connection->real_escape_string($value) . "'";
        }
        $fields_str = implode(',', $fields);
        $query = "UPDATE {$this->table} SET {$fields_str} WHERE id = {$id}";
        return $this->connection->query($query);
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = {$id}";
        return $this->connection->query($query);
    }

    public function all()
    {
        $query = "SELECT * FROM {$this->table}";
        $result = $this->connection->query($query);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    public function customQuery($query)
    {
        $result = $this->connection->query($query);
        if ($result === true) {
            return true;
        } elseif ($result === false) {
            return $this->connection->error;
        } else {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
