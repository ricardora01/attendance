<?php
session_start();

unset($_SESSION["firstname"]);
unset($_SESSION["lastname"]);
unset($_SESSION["id"]);


session_destroy();


header (header: 'Location: ../index.php');
?>