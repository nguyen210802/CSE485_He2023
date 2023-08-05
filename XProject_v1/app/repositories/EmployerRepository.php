<?php
include "app/models/Employer.php";
include "lib/DBConnection.php";
class EmployerRepository
{
    public function getAllEmployees(){
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            $sql = "SELECT * FROM employees";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result = $stmt->fetchAll();
            $employees = [];
            foreach($result as $row){
                $employer = new Employer();
                $employer->setId($row['id']);
                $employer->setName($row['name']);
                $employer->setGender($row['gender']);
                $employer->setPhone($row['phone_number']);
                $employer->setAddress($row['address']);
                $employer->setSalary($row['salary']);
                $employer->setDob($row['date_of_birth']);
                array_push($employees, $employer);
            }
            return $employees;
        } catch(PDOException $e) {
            return null;
        }
    }

    public function getEmployeesById($id){
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            $sql = "SELECT * FROM employees WHERE id= ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $id, PDO::PARAM_STR);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            $employer = new Employer();
            $employer->setId($row['id']);
            $employer->setName($row['name']);
            $employer->setGender($row['gender']);
            $employer->setPhone($row['phone_number']);
            $employer->setAddress($row['address']);
            $employer->setSalary($row['salary']);
            $employer->setDob($row['date_of_birth']);
            return $employer;
        } catch(PDOException $e) {
            return null;
        }
    }

    public function saveRegister($employer){
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            //Tạm thời bỏ qua kiểm tra
            $sql = "INSERT INTO employees (name, address, salary) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $name = $employer->getName();
            $address = $employer->getAddress();
            $salary = $employer->getSalary();
//            $stmt->bindParam('sss', $user->getUsername(), $user->getEmail(), $user->getPassword() );
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $address, PDO::PARAM_STR);
            $stmt->bindParam(3, $salary, PDO::PARAM_STR);
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            if($stmt->execute())
                return true;

        } catch(PDOException $e) {
            return false;
        }
    }

    public function saveEdit($employer, $id){
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            //Tạm thời bỏ qua kiểm tra
            $sql = "UPDATE employees SET name=?, address=?, salary=? WHERE id=?";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $name = $employer->getName();
            $address = $employer->getAddress();
            $salary = $employer->getSalary();
//            $stmt->bindParam('sss', $user->getUsername(), $user->getEmail(), $user->getPassword() );
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $address, PDO::PARAM_STR);
            $stmt->bindParam(3, $salary, PDO::PARAM_STR);
            $stmt->bindParam(4, $id, PDO::PARAM_STR);
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            if($stmt->execute())
                return true;

        } catch(PDOException $e) {
            return false;
        }
    }

    public function saveDelete($id){
        //Kết nối tới CSDL: MySQLi procedural, MySQLi OOP, PDO*
        //1. Kết nối DB Server
        try {
            $db = new DBConnection();
            $conn = $db->connect();
            //2. Thực hiện truy vấn
            //Tạm thời bỏ qua kiểm tra
            $sql = "DELETE FROM employees WHERE id=?";
            $stmt = $conn->prepare($sql); //Chuẩn bị thực hiện câu này
            $stmt->bindParam(1, $id, PDO::PARAM_STR);
            //3. Xử lý kết quả (SELECT/INSERT-UPDATE-DELETE)
            if($stmt->execute())
                return true;

        } catch(PDOException $e) {
            return false;
        }
    }
}