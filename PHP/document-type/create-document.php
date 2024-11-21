<?php
require('../database.php');

$name = $_POST ["name"];


$data = [
    'Name' => $name,
    
];

try{
   $sql = 'INSERT INTO documenttype (Name) VALUES(:Name)';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "New record created successfully";
    header ("Location: ../../document-type.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>