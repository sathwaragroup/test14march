<?php

class BaseModel
{
    protected $connection;
    protected $table;

    public function __construct($table)
    {
        $config = require_once '../config.php';
        $this->table = $table;

        $this->connection = new mysqli('localhost', 'root', '', 'mycollegeseat');

        if ($this->connection->connect_error) {
            die('Database connection failed: ' . $this->connection->connect_error);
        }
    }

    public function create($data)
    {
        $columns = implode(',', array_keys($data));
        $values = implode("','", array_map([$this->connection, 'real_escape_string'], array_values($data)));
        $query = "INSERT INTO {$this->table} ({$columns}) VALUES ('{$values}')";

        if ($this->connection->query($query)) {
            // Return the ID of the last inserted row
            return $this->connection->insert_id;
        } else {
            // Return false if the query fails
            return false;
        }
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
        $params = [];
        $types = ""; // Type string for prepared statement

        foreach ($data as $key => $value) {
            $fields[] = "{$key} = ?";
            $params[] = $value;

            // Append type based on value type
            $types .= is_int($value) ? "i" : (is_float($value) ? "d" : "s");
        }

        $fields_str = implode(', ', $fields);
        $query = "UPDATE {$this->table} SET {$fields_str} WHERE id = ?";
        $params[] = $id; // Add ID as the last parameter
        $types .= "i";   // Assuming ID is an integer

        $stmt = $this->connection->prepare($query);
        if ($stmt === false) {
            throw new Exception("Failed to prepare query: " . $this->connection->error);
        }

        // Bind parameters
        $stmt->bind_param($types, ...$params);

        return $stmt->execute();
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = {$id}";
        return $this->connection->query($query);
    }

    public function all($field="")
    {
        $query = "SELECT * FROM {$this->table} ";
        if (isset($field) && !empty($field)) {
           $query .=' ORDER BY '.$field.' DESC ';
        }
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
