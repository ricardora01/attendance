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
    
    
    echo $visitor[0]["VisitorId"];
    if($visitor[0]["VisitorId"] == $id){
        header ("Location: ../../presentation.php?VisitorId=$id");
    } else {
        header ("Location: ../../presentation.php?VisitorId=0");
    }

    
    //echo json_encode($visitor);
///condicion if
// si $visior regresa un valor, ejecutar un sql para insertar un registro en la tabla  acccess log

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


/*
 if($id >= 0){
    include 'accesslog.php';
  }
*/

//echo json_encode($door_list);

?>

