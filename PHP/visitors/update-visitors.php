<?php
require('../database.php');

$VisitorId = $_POST["id"];
$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$DucumentTypeId = $_POST["DocumentTypeId"];
$DocumentNumber = $_POST["DocumentNumber"];
$Cellphone = $_POST["Cellphone"];
$StateId = $_POST["StateId"];
$Street = $_POST["Street"];
$Suburb = $_POST["Suburb"];
$ExteriorNumber = $_POST["ExteriorNumber"];
$InteriorNumber = $_POST["InteriorNumber"];
$ZipCode = $_POST["ZipCode"];


$data = [
    'VisitorId' => $VisitorId,
    'FirstName' => $FirstName,
    'LastName' => $LastName,
    'DocumentTypeId' => $DucumentTypeId,
    'DocumentNumber' => $DocumentNumber,
    'Cellphone' => $Cellphone,
    'StateId' => $StateId,
    'Street' => $Street,
    'Suburb' => $Suburb,
    'ExteriorNumber' => $ExteriorNumber,
    'InteriorNumber' => $InteriorNumber,
    'ZipCode' => $ZipCode
];

try{
  // $sql = 'UPDATE door SET DoorName = :DoorName, Description = :Description WHERE DoorId = :DoorId';

   $sql = 'UPDATE visitor SET 
   FirstNAme = :FirstName, 
   LastName = :LastName, 
   DocumentTypeId = :DocumentTypeId,
   DocumentNumber = :DocumentNumber, 
   Cellphone = :Cellphone, 
   StateId = :StateId,
   Street = :Street,
   Suburb =:Suburb, 
   ExteriorNumber = :ExteriorNumber, 
   InteriorNumber = :InteriorNumber, 
   ZipCode = :ZipCode 
   WHERE VisitorId = :VisitorId';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "Record updated succesfully";
    header ("Location: ../../visitors.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>