<?php

$user = $_POST ["email"];
$password = $_POST ["password"];

if($user == 'admin' && $password == "123abc."){
    header (header: 'Location: ../home.php');
}else{
    echo '<script language="javascript">alert("Datos incorrectos") </script>';
    header ("Location: ../index.php");

}

?>