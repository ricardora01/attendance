<?php
require('../database.php');

date_default_timezone_set("America/Mexico_City");

$VisitorId = 1;
$DateIn = date("Y-m-d");
$TimeIn = date("h:i a");
$DoorId = 2;
$DepartmentToVisitId = 3;
$PersonToVisiti = "prueba";
$VisitMotive = "prueba";
$GuardId = 4;

$data = [
    'VisitorId' => $VisitorId,
    'DateIn' => $DateIn,
    'TimeIn' => $TimeIn,
    'DoorId' => $DoorId,
    'DepartmentToVisitId' => $DepartmentToVisitId,
    'PersonToVisiti' => $PersonToVisiti,
    'VisitMotive' => $VisitMotive,
    'GuardId' => $GuardId
];

try{
   $sql = 'INSERT INTO accesslog 
   (VisitorId, DateIn, TimeIn, DoorId, DepartmentToVisitId, PersonToVisiti,
    VisitMotive, GuardId)
     VALUES(:VisitorId, :DateIn, :TimeIn, :DoorId, :DepartmentToVisitId, :PersonToVisiti,
    :VisitMotive, :GuardId)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "New record created successfully";
    header ("Location: ../../presentation.php?success=1");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    header ("Location: ../../presentation.php?success=0");
}
?>