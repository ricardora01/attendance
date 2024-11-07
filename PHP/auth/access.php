<?php

require('PHP/database.php');

$sql = "SELECT accesslog.AccessLogId, accesslog.VisitorId, accesslog.DateIn, accesslog.TimeIn, door.DoorName AS Door, 
department.Name AS department, accesslog.PersonToVisiti, accesslog.VisitMotive, accesslog.GuardId, accesslog.DateOut, accesslog.TimeOut 
FROM accesslog JOIN door ON accesslog.DoorId = door.DoorId JOIN department ON accesslog.DepartmentToVisitId = department.Department;";

$statement = $conn->query($sql);

$access_list = $statement->fetchAll(PDO::FETCH_ASSOC);

///echo json_encode($access_list);

?>