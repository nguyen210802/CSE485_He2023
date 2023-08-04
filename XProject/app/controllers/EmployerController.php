<?php
include "app/repositories/EmployerRepository.php";
class EmployerController
{
    public function index(){
        $employerRepo = new \EmployerRepository();
        $employees = $employerRepo->getAllEmployees();

        include "app/views/index.php";
    }
    public function detail(){
        $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
        $employerRepo = new \EmployerRepository();
        $employer = $employerRepo->getEmployeesById($id);

        include "app/views/detail.php";
    }
}