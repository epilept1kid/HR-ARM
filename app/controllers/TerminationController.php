<?php

require_once "app/models/TerminationModel.php";
require_once "app/views/TerminationView.php";

class TerminationController {
    private $model;
    private $view;

    public function __construct($conn) {
        $this->model = new TerminationModel($conn);
        $this->view = new TerminationView();
    }

    public function index() {
        $this->view->render();
    }
    
    public function deleteEmployee() {
        $id = $_POST['employee_id'];

        $this->model->deleteEmployee($id);

        header("Location: /"); 
        exit();
    }
}