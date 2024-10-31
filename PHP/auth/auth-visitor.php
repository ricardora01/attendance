<?php

require('../database.php');

$id = $_POST ["id"];

$data = [
    'VisitorId' => $id
];

try{
    $sql = "SELECT VisitorId FROM visitor WHERE VisitorId = $id";
    $statement = $conn->query($sql);
    $visitor = $statement->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($visitor);
///condicion if
// si $visior regresa un valor, ejecutar un sql para insertar un registro en la tabla  acccess log

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
//echo json_encode($door_list);

?>

