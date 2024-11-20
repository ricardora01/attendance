<?php

require('PHP/database.php');

$sql = "SELECT * FROM guard";

$statement = $conn->query($sql);

$guard_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($door_list);

?>