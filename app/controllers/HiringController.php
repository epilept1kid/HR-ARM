<?php
require_once "app/models/HiringModel.php";
require_once "app/views/HiringView.php";

class HiringController {
    private $model;
    private $view;

    public function __construct($conn) {
        $this->model = new HiringModel($conn);
        $this->view = new HiringView();
    }

    public function index() {
        $this->view->render();
    }

    public function Hire(){
        $full_name = $_POST['full_name'];
        $position = $_POST['position'];
        $department = $_POST['department'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        echo $this->model->InsertEmployee($full_name, $position, $department, $email, $phone);

        header("Location: /");
        exit();
    }
}