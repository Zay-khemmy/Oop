<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Form</title>
</head>
<body>
    <form action="employee_data.php" method="POST">
    Employee Name:
        <input type="text" name="employee_name"><br>
    Home Address:
        <input type="text" name="home_address"><br>
    State of Origin
        <select name="state_of_origin">
            <option value=""></option>
            <option value="lagos">Lagos</option>
            <option value="ogun">Ogun</option>
            <option value="osun">Osun</option>
            <option value="edo">Edo</option>
            <option value="kano">Kano</option>
        </select><br>
    Phone Number:
        <input type="text" name="phone_number"><br>
    Age:
        <input type="text" name="age"><br>
        <input type="submit" name="save" value="Submit">
    </form>
</body>
</html>