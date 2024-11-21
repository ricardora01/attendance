<?php
require('../database.php');

$id = $_POST ["id"];
$name = $_POST ["name"];


$data = [
    "Department" => $id,
    'Name' => $name,

];

try{
   $sql = 'UPDATE department SET Name = :Name WHERE Department = :Department';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "Record updated succesfully";
    header ("Location: ../../Department.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>