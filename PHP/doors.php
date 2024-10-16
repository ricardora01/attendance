<?php

require('database.php');

$sql = "SELECT * FROM door";

$statement = $conn->query($sql);

$door_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($door_list);
