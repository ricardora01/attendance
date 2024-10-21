<?php
require('../database.php');

$FirstName = $_POST ["FirstName"];
$LastName = $_POST ["LastName"];
$DucumentType = $_POST ["DocumentType"];
$DocumentNumber = $_POST ["DocumentNumber"];
$Cellphone = $_POST ["Cellphone"];
$StateId = $_POST ["StateId"];
$Street = $_POST ["Street"];
$Suburb = $_POST ["Suburb"];
$ExteriorNumber = $_POST ["ExteriorNumber"];
$InteriorNumber = $_POST ["InteriorNumber"];
$ZipCode = $_POST ["ZipCode"];




$data = [
    'FirstName' => $FirstName,
    'LastName' => $LastName,
    'DocumentTypeId' => $DucumentType,
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
   $sql = 'INSERT INTO visitor 
   (FirstName, LastName, DocumentTypeId, DocumentNumber, Cellphone, StateId,
    Street, Suburb, ExteriorNumber, InteriorNumber, ZipCode)
     VALUES(:FirstName, :LastName, :DocumentTypeId, :DocumentNumber, :Cellphone, 
     :StateId, :Street, :Suburb, :ExteriorNumber, :InteriorNumber, :ZipCode)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "New record created successfully";
    header ("Location: ../../visitors.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>