<?php

require '../conexion.php';

$nombre_usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

$consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contrasenia = '$contrasenia'";

$resultado = $mysqli->query($consulta);

if($resultado->num_rows === 1) {
    $_SESSION['usuario'] = $nombre_usuario;
    header("location: ../index.php");
} else {
    echo "<script>
    alert('Usuario o contraseña incorrectos');
    self.location = 'inicio_sesion.php';
    </script>";
}

?>