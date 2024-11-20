<?php
require('../database.php');

$name = $_POST ["name"];
$lastname = $_POST ["lastname"];
$employeeid = $_POST ["employeeid"];
$password = $_POST ["password"];
$workinghours = $_POST ["workinghours"];
$cellphone = $_POST ["cellphone"];

$data = [
    'FirstName' => $name,
    'LastName' => $lastname,
    'EmployeeId' => $employeeid,
    'Password' => $password,
    'WorkingHours' => $workinghours,
    'Cellphone' => $cellphone
];

try{
   $sql = 'INSERT INTO guard (FirstName, LastName, EmployeeId, Password, WorkingHours, Cellphone) VALUES(:FirstName, :LastName, :EmployeeId,  
   :Password, :WorkingHours, :Cellphone)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "New record created successfully";
    header ("Location: ../../security-guards.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>