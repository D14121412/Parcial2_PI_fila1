<?php

require '../conexion.php';

$nombre_usuario = $_POST['nombre_usuario'];
$contrasenia = $_POST['contrasenia'];

$insert = "INSERT INTO usuarios (nombre_usuario, contrasenia) 
           VALUES ('$nombre_usuario', '$contrasenia')";

$result = $mysqli->query($insert);

echo "<script>
    alert('Usuario registrado correctamente');
    window.location = 'login.php';
</script>";
?>