<?php

// Conexión a la base de datos
require '../conexion.php';


// Recibe los datos del formulario
$nombre_usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];

// Consulta a la base de datos
$consulta = "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario' AND contrasenia = '$contrasenia'";
$resultado = $mysqli->query($consulta);

// Si encuentra una coincidencia
if($resultado->num_rows === 1) {
    $_SESSION['usuario'] = $nombre_usuario;
    header("location: ../index.php");
} else {
    // Si no encuentra, muestra alerta y vuelve al login
    echo "<script>
    alert('Usuario o contraseña incorrectos');
    self.location = 'inicio_sesion.php';
    </script>";
}

?>