<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "biblioteca";

$mysqli = new mysqli($servidor, $usuario, $password, $bd);

if ($mysqli ->connect_errno) {
    echo "No se puede realizar la conexion: (" . $mysqli->connect_errno;
}


?>