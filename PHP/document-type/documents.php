<?php

require('PHP/database.php');

$sql = "SELECT * FROM documenttype";

$statement = $conn->query($sql);

$document_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($document_type_list);

?>