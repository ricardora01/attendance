<?php
require('../database.php');

$name = $_POST ["name"];
$description = $_POST ["description"];


$data = [
    'DoorName' => $name,
    'Description' => $description
];

try{
   $sql = 'INSERT INTO door (DoorName, Description) VALUES(:DoorName, :Description)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "New record created successfully";
    header ("Location: ../../doors.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>