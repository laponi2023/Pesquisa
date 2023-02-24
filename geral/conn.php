<?php

session_start();


$user="root";
$pass="";
$db= "arquivos";
$host= "localhost";

$mysqli = new mysqli($host, $user, $pass, $db);
if ($mysqli->connect_errno) {
    die("falha na conexão com o banco de dados");
    
}

?>