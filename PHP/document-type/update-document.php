<?php
require('../database.php');

$id = $_POST ["id"];
$name = $_POST ["name"];


$data = [
    "DocumentTypeId" => $id,
    'Name' => $name,

];

try{
   $sql = 'UPDATE documenttype SET Name = :Name WHERE DocumentTypeId = :DocumentTypeId';
   
   $statement = $conn->prepare($sql);
   
   $statement->execute($data);
    echo "Record updated succesfully";
    header ("Location: ../../document-type.php");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>