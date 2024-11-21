<?php
require('../database.php');

$id = $_GET ["id"];

$data = [
    'id' => $id,
];

try{
    $sql = 'DELETE FROM visitor WHERE VisitorId= :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record deleted";
     header ("Location: ../../visitors.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }