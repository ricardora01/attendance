<?php
require('../database.php');

$id = $_GET ["id"];

date_default_timezone_set("America/Mexico_City");

$DateOut = date("Y-m-d");
$TimeOut = date("h:i a");

$data = [
    'id' => $id,
    'DateOut' => $DateOut,
    'TimeOut' => $TimeOut,

];

try{
    $sql = 'UPDATE accesslog SET DateOut = :DateOut, TimeOut = :TimeOut WHERE AccessLogId = :id';
    
    $statement = $conn->prepare($sql);
    
    $statement->execute($data);
     echo "Record updated succesfully";
     header ("Location: ../../accesslog.php");
 } catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
 }