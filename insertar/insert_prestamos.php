<?php

// Obtener los datos enviados desde el formulario mediante método POST
$libro_id = $_POST["libro_id"];
$usuario_id= $_POST["usuario_id"];
$fecha_prestamo = $_POST["fecha_prestamo"];
$fecha_devolucion = $_POST["fecha_devolucion"];

// Conexión a la base de datos
require '../conexion.php';

// Crear la consulta SQL para insertar un nuevo préstamo en la base de datos
$insert = "INSERT INTO prestamos (libro_id, usuario_id, fecha_prestamo, fecha_devolucion) VALUES ('$libro_id', '$usuario_id', '$fecha_prestamo', '$fecha_devolucion')";

// Ejecutar la consulta usando el objeto mysqli
$result = $mysqli->query($insert);


// Mostrar un mensaje de éxito y redirigir a la página principal
echo "<script>
alert('Se agregó correctamente, redirigiendo...');
self.location = '../index.php';
</script>"


?>