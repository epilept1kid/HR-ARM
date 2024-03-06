<?php

class TerminationModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function DeleteEmployee($id) {
        // Проверка соединения с базой данных
        if (!$this->conn) {
            die("Ошибка соединения с базой данных.");
        }
    
        // Проверка наличия записи с указанным id
        $checkSql = "SELECT COUNT(*) FROM `employees` WHERE `id` = ?";
        $checkStmt = $this->conn->prepare($checkSql);
        $checkStmt->bind_param("i", $id);
        $checkStmt->execute();
        $count = 0;
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();
    
        if ($count == 0) {
            echo "Запись с ID {$id} не найдена.";
            return;
        }
    
        // Удаление записи
        $sql = "DELETE FROM `employees` WHERE `id` = ?";
        $stmt = $this->conn->prepare($sql);
    
        if (!$stmt) {
            die("Ошибка подготовки запроса: " . $this->conn->error);
        }
    
        $stmt->bind_param("i", $id);
    
        if ($stmt->execute()) {
            echo "Запись успешно удалена.";
        } else {
            echo "Ошибка выполнения запроса: " . $stmt->error;
        }
    
        $stmt->close();
    }
}