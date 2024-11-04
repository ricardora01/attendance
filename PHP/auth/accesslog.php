<?php
require('../database.php');

date_default_timezone_set("America/Mexico_City");
$fecha_es =date("d-m-Y");
$hora_12=date("h:i a");

$VisitorId = 1;
$DateIn = ["fecha_es"];
$TimeIn =["hora_12"];
$DoorId =["2"];
$DepartmentToVisitId =["3"];
$PersonToVisiti =["prueba"];
$VisitMotive =["prueba"];
$GuardId =["4"];
$DateOut =[" "];
$TimeOut =["  "];




$data = [
    'VisitorId' => $VisitorId,
    'DateIn' => $DateIn,
    'TimeIn' => $TimeIn,
    'DoorId' => $DoorId,
    'DepartmentToVisitId' => $DepartmentToVisitId,
    'PersonToVisiti' => $PersonToVisiti,
    'VisitMotive' => $VisitMotive,
    'GuardId' => $GuardId,
    'DateOut' => $DateOut,
    'TimeOut' => $TimeOut
];

try{
   $sql = 'INSERT INTO accesslog 
   (VisitorId, DateIn, TimeIn, DoorId, DepartmentToVisitId, PersonToVisiti,
    VisitMotive, GuardId, DateOut, TimeOut)
     VALUES(:VisitorId, :DateIn, :TimeIn, :DoorId, :DepartmentToVisitId, :PersonToVisiti,
    :VisitMotive, :GuardId, :DateOut, :TimeOut)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "New record created successfully";
    header ("Location: ../../visitors.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>