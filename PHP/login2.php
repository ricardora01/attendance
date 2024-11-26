<?php
require('database.php');
$user = $_POST["user"];
$password = $_POST["password"];
$password = hash('sha256', $password);
//$password = hash('sha256', $password);

try {
    $sql = "SELECT FirstName, LastName, EmployeeId FROM guard 
    WHERE EmployeeId = :user AND Password = :password";
    $statement = $conn->prepare($sql);
    $statement->bindParam(':user', $user);
    $statement->bindParam(':password', $password);
    $statement->execute();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(count($result) == 1 ){
        header (header: 'Location: ../presentation.php');
    } else {
        header (header: 'Location: ../index.php?error=1');
    }

    echo json_encode($result);
} catch(PDOException $e) {
    die();
    echo "Error: " . $e->getMessage();
}


/*
if($user == 'admin@localhost.com' && $password == "123abc."){
    header (header: 'Location: ../home.php');
}else{
    echo '<script language="javascript">alert("Datos incorrectos") </script>';
    header ("Location: ../index.php");

}*/

?>