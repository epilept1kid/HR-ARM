<?php
class Router {

    public function route() {
        $uri = $_SERVER['REQUEST_URI'];
        
        include 'app/controllers/EmployeeController.php';
        include 'app/controllers/HiringController.php';
        include 'app/controllers/TerminationController.php';
        
        include "app/core/Database.php";
        
        $db = new Database();

        include 'includes/header.php';

        switch ($uri) {
            case '/':
                echo 'Hello world!';
                break;

            case '/employee':
                $controller = new EmployeeController($db->conn);
                $controller->index();
                break;

            case '/hiring':
                $controller = new HiringController($db->conn);
                $controller->index();
                break;

            case '/hire':
                $controller = new HiringController($db->conn);
                $controller->Hire();
                break;
    

            case '/termination':
                $controller = new TerminationController($db->conn);
                $controller->index();
                break;

            case '/terminate':
                $controller = new TerminationController($db->conn);
                $controller->deleteEmployee();
                break;

            default:
                // Ошибка 404
                header('HTTP/1.0 404 Not Found');
                echo 'Страница не найдена';
                break;
        }
    }
}