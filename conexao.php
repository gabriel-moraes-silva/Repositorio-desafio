<?php

$hostname = "localhost";
$bancodedados = "site1";
$usuario = "root";
$senha = "root";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno. ") " . $mysqli->connect_error;
}

else
{
    echo "";
}

?>
