<?php
// Conexión a la base de datos
require '../conexion.php';

// Conexión a la base de datos
$nombre_usuario = $_POST['nombre_usuario'];
$contrasenia = $_POST['contrasenia'];

// Crear la consulta SQL para insertar un nuevo usuario en la base de datos
$insert = "INSERT INTO usuarios (nombre_usuario, contrasenia) 
           VALUES ('$nombre_usuario', '$contrasenia')";


// Ejecutar la consulta
$result = $mysqli->query($insert);

// Mostrar mensaje de éxito y redirigir al login
echo "<script>
    alert('Usuario registrado correctamente');
    window.location = 'login.php';
</script>";
?>