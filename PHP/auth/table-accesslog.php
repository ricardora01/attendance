<?php

require('PHP/database.php');

$sql = "SELECT * FROM accesslog";

$statement = $conn->query($sql);

$access_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($door_list);

?>