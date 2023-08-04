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
                $employer = new Employer($row['id'], $row['name'], $row['gender'], $row['phone_number'], $row['address'], $row['date_of_birth'], $row['salary']);
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
            $employer = new Employer($row['id'], $row['name'], $row['gender'], $row['phone_number'], $row['address'], $row['date_of_birth'], $row['salary']);

            return $employer;
        } catch(PDOException $e) {
            return null;
        }
    }
}