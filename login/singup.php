<?php

$nombre_usuario = $_POST['nombre_usuario'];
$contrasenia = $_POST['contrasenia'];

require '../conexion.php';

$insert = "INSERT INTO usuarios (nombre_usuario, contrasenia) VALUES('$nombre_usuario', '$contrasenia')";

$result = $mysqli->query($insert);

echo "<script>
alert('Se registro usuario correctamente.');
self.location = 'login.php';
</script>"

?>