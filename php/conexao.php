<?php

$hostname = "localhost";
$bd = "clinicaperes";
$usuario = "root";
$senha = "123456";

$mysqli = new mysqli ($hostname, $usuario, $senha, $bd);
if ($mysqli->connect_errno) {
    echo "falha ao conectar: (" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
}
?>