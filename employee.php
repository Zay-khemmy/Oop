<?php
    class Employee
    {
        // public $firstname;
        // public $lastname;
        // public $age;
        // public $date_of_birth;
        // public $address;

        public function firstname(){
            
        }
        public function lastname(){
            
        }
        public function age(){
            
        }
        public function date_of_birth(){
            
        }
        public function firstname_lastname(){
            echo "$this->firstname $this->lastname</br>";
        }
        public function address(){
        
        }
        public function employee_profile(){
            echo "My name is  $this->firstname $this->lastname I was born on $this->date_of_birth and I am $this->age  years old</br>";
        }
    }

    class Employee_department extends Employee
    {
        // public $department;
        // public $designation;
        // public $employee_name;
        // public $employee_age;
        
        public function department(){

        }
        public function designation(){
            
        }
        public function employee_name(){
            echo "$this->firstname exists in this record";
            
        }
        public function employee_age(){
            echo ' I am ' . $this->age;
        }
    } 

// $employee = new Employee;
$department = new Employee_department;
$department->firstname = "Zainab";
$department->lastname =" Bello";
$department->date_of_birth =" 10/01/1990";
$department->age = 20;
$department->firstname_lastname();
$department->employee_profile();
$department->employee_name();
$department->employee_age();
?>