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

    public function add(){
        //Lấy các giá trị từ FORM
        if(isset($_POST['txtAddName'])){
            $name  = $_POST['txtAddName'];
        }
        if(isset($_POST['txtAddAddress'])){
            $address  = $_POST['txtAddAddress'];
        }
        if(isset($_POST['txtAddSalary'])){
            $salary  = $_POST['txtAddSalary'];
        }
        //Tạo và thiết lập đối tượng User
        $employer = new Employer();
        $employer->setName($name);
        $employer->setAddress($address);
        $employer->setSalary($salary);
        //Truyền và gọi tới saveRegister() của UserRepository
        $emloyerRepo = new EmployerRepository();
//        $userRepo->saveRegister($user);
        if($emloyerRepo->saveRegister($employer) == true){
            header("Location:index.php?c=employer&a=index&addSuccess=true");
        }else{
            header("Location:index.php?c=home&a=error&addSuccess=false");
        }
    }

    public function edit(){
        $id = (isset($_GET['id'])) ? $_GET['id']: 0;
        if(isset($_POST['txtEditName'])){
            $name = $_POST['txtEditName'];
        }
        if(isset($_POST['txtEditAddress'])){
            $address = $_POST['txtEditAddress'];
        }
        if(isset($_POST['txtEditSalary'])){
            $salary = $_POST['txtEditSalary'];
        }
        //Tạo và thiết lập đối tượng User
        $employer = new Employer();
        $employer->setName($name);
        $employer->setAddress($address);
        $employer->setSalary($salary);
        //Truyền và gọi tới saveRegister() của UserRepository
        $emloyerRepo = new EmployerRepository();
//        $userRepo->saveRegister($user);
        if($emloyerRepo->saveEdit($employer, $id) == true){
            header("Location:index.php?c=employer&a=index&editSuccess=true");
        }else{
            header("Location:index.php?c=home&a=error&editSuccess=false");
        }
    }
    public function delete(){
        $id = (isset($_GET['id'])) ? $_GET['id']: 0;
        $emloyerRepo = new EmployerRepository();
//        $userRepo->saveRegister($user);
        if($emloyerRepo->saveDelete($id) == true){
            header("Location:index.php?c=employer&a=index&editSuccess=true");
        }else{
            header("Location:index.php?c=home&a=error&editSuccess=false");
        }
    }
}