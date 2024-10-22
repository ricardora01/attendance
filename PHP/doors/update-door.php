<?php
require('../database.php');

$id = $_POST ["id"];
$name = $_POST ["name"];
$description = $_POST ["description"];

$data = [
    "DoorId" => $id,
    'DoorName' => $name,
    'Description' => $description
];

try{
   $sql = 'UPDATE door SET DoorName = :DoorName, Description = :Description WHERE DoorId = :DoorId';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "Record updated succesfully";
    header ("Location: ../../doors.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>