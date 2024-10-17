<?php

require('database.php');

$sql = "SELECT * FROM visitor";

$statement = $conn->query($sql);

$visitor_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($door_list);
