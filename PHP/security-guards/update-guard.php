<?php
require('../database.php');

$id = $_POST ["id"];
$name = $_POST ["name"];
$lastname = $_POST ["lastname"];
$employeeid = $_POST ["employeeid"];
$password = $_POST ["password"];
$workinghours = $_POST ["workinghours"];
$cellphone = $_POST ["cellphone"];

$data = [
    "GuardId" => $id,
    'FirstName' => $name,
    'LastName' => $lastname,
    'EmployeeId' => $employeeid,
    'Password' => $password,
    'WorkingHours' => $workinghours,
    'Cellphone' => $cellphone
];

try{
   $sql = 'UPDATE guard SET FirstName = :FirstName, LastName = :LastName, EmployeeId = :EmployeeId, Password = :Password, 
   WorkingHours = :WorkingHours, Cellphone = :Cellphone WHERE GuardId = :GuardId';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "Record updated succesfully";
    header ("Location: ../../security-guards.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>