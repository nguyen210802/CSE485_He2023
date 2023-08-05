<?php

class Employer
{
    private $id;
    private $name;
    private $gender;
    private $phone;
    private $address;
    private $dob;
    private $salary;



//    public function __construct($id, $name, $gender, $phone, $address, $dob, $salary)
//    {
//        $this->id = $id;
//        $this->name = $name;
//        $this->gender = $gender;
//        $this->phone = $phone;
//        $this->address = $address;
//        $this->dob = $dob;
//        $this->salary = $salary;
//    }
    public function __construct()
    {
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender): void
    {
        $this->gender = $gender;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address): void
    {
        $this->address = $address;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function setDob($dob): void
    {
        $this->dob = $dob;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }


}