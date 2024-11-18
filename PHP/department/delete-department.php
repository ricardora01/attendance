<?php
require('../database.php');

$id = $_GET ["id"];

$data = [
    'id' => $id,
];

try{
    $sql = 'DELETE FROM department WHERE Department= :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record deleted";
     header ("Location: ../../department.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }