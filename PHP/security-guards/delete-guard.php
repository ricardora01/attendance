<?php
require('../database.php');

$id = $_GET ["id"];

$data = [
    'id' => $id,
];

try{
    $sql = 'DELETE FROM guard WHERE GuardId= :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record deleted";
     header ("Location: ../../security-guards.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }