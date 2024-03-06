<?php

class EmployeeModel {
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function getEmployees() {
        $sql = "SELECT * FROM employees";
        return $this->conn->query($sql);
    }
}