<?php 
include_once 'config.inc.php';

function conectar()
{
    return mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);
}

?>