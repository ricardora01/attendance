<?php

require('PHP/database.php');

$sql = "SELECT visitor.VisitorId, visitor.FirstName, visitor.LastName, documenttype.Name AS Document, visitor.DocumentNumber, visitor.Cellphone, state.Name as State FROM visitor 
JOIN state ON visitor.StateId = state.EstateId JOIN documenttype ON visitor.DocumentTypeId = documenttype.DocumentTypeId;";

$statement = $conn->query($sql);

$visitor_list = $statement->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($door_list);

?>