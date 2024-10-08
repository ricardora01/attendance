<?php

$user = $_POST ["user"];
$password = $_POST ["password"];

if($user == 'ricardo' && $password == "123abc."){
    header (header: 'Location: http://localhost/attendance/attendance/home.php');
}else{
    echo '<script language="javascript">alert("Datos incorrectos") </script>';
    header ("Location: index2.php");

}

?>