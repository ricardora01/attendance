<?php

require('PHP/database.php');

$sql = "SELECT * FROM department";

$statement = $conn->query($sql);

$department_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($document_type_list);

?>