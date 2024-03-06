<?php

class HiringModel {
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function InsertEmployee($full_name, $position, $department, $email, $phone) {
        $sql = "INSERT INTO employees (full_name, position, department, email, phone) VALUES (?, ?, ?, ?, ?)";
        
        $stmt = $this->conn->prepare($sql);

        if(!$stmt){
            die("Ошибка подготовки запроса" . $this->conn->error);
        }

        $stmt->bind_param("sssss", $full_name, $position, $department, $email, $phone);

        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                echo "Запись успешно добавлена.";
            } else {
                echo "Запись не добавлена (возможно, конфликт с существующими данными).";
            }
        } else {
            echo "Ошибка выполнения запроса: " . $stmt->error;
        }
    }
}