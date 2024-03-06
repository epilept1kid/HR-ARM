<?php
require_once "app/models/EmployeeModel.php";
require_once "app/views/EmployeeView.php";

class EmployeeController {
    private $model;
    private $view;

    public function __construct($conn) {
        $this->model = new EmployeeModel($conn);
        $this->view = new EmployeeView();
    }

    public function index() {
        $employees = $this->model->getEmployees();
        $this->view->render($employees);
    }
}