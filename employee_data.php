<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EmployeeData";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

    //create a table
// $sql = "CREATE TABLE employees(
//             id INT(6) AUTO_INCREMENT PRIMARY KEY,
//             employee_name VARCHAR(50) NOT NULL,
//             home_address VARCHAR(100) NOT NULL,
//             state_origin VARCHAR(100) NOT NULL,
//             phone_number VARCHAR(30) NOT NULL,
//             age VARCHAR(10) NOT NULL
//         )";
        
//         if ($conn->query($sql) === TRUE) {
//             echo "Table Employees created successfully";
//         } else {
//             echo "Error creating table: " . $conn->error;
//         }


    if (isset($_POST['save'])):
        $employee_name = $_POST["employee_name"];
        $home_address = $_POST["home_address"];
        $state_of_origin = $_POST["state_of_origin"];
        $phone_number = $_POST["phone_number"];
        $age = $_POST["age"];
           
    $sql = "INSERT INTO employees (employee_name, home_address, state_origin, phone_number, age)
     VALUES ('$employee_name', '$home_address', '$state_of_origin', '$phone_number', '$age')";

    if ($conn->query($sql) === TRUE) {
        echo "1 record added";
    } else {
        echo "Error updating record: " . $conn->error;
    }
endif;

$conn->close();
?>