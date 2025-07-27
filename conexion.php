<?php
// Datos para la conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "biblioteca";

$mysqli = new mysqli($servidor, $usuario, $password, $bd);

// Verificar si hubo un error al conectar
if ($mysqli ->connect_errno) {
    echo "No se puede realizar la conexion: (" . $mysqli->connect_errno;
}


?>