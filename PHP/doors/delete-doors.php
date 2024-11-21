<?php
require('../database.php');

$id = $_GET ["id"];

$data = [
    'id' => $id,
];

try{
    $sql = 'DELETE FROM door WHERE DoorId= :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record deleted";
     header ("Location: ../../doors.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }