<?php
require('../database.php');

$id = $_GET ["id"];

$data = [
    'id' => $id,
];

try{
    $sql = 'DELETE FROM documenttype WHERE DocumentTypeId= :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record deleted";
     header ("Location: ../../document-type.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }