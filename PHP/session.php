<?php

session_start();

if(!$_SESSION['id'] || $_SESSION['id'] == null)
{
    header (header: 'Location: index.php');
}

?>