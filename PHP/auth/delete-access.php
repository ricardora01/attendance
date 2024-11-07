<?php
require('../database.php');

$id = $_GET ["id"];

$data = [
    'id' => $id,
];

try{
    $sql = 'DELETE FROM accesslog WHERE AccessLogId= :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record deleted";
     header ("Location: ../../accesslog.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }