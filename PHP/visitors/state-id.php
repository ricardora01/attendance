<?php

require('PHP/database.php');

$sql = "SELECT * FROM state;";

$statement = $conn->query($sql);

$state_id_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($document_type_list);

?>