<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Data Table</title>
    <style>
        table{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <caption>EMPLOYEE RECORDS</caption>
    <thead>
        <tr>
            <th>S/N</th>
            <th scope="col">NAME</th>
            <th scope="col">HOME ADDRESS</th>
            <th scope="col">STATE OF ORIGIN</th>
            <th scope="col">PHONE NUMBER</th>
            <th scope="col">AGE</th>
        </tr>
    </thead>
    <tbody>
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
            // echo "Connected successfully";
        $sql = "SELECT id, employee_name, home_address, state_origin, phone_number, age FROM employees";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <th scope='row'>Donuts</th>
                    <td> ". $row["employee_name"]." </td>
                    <td> ". $row["home_address"]."</td>
                    <td> <center>". $row["state_origin"]."</center></td>
                    <td> ".  $row["phone_number"]."</td>
                    <td> ". $row["age"]. "</td>
                </tr>";
            }
        }
    ?>
        
    </tbody>
</table>
</body>
</html>