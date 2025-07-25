<?php

//tabla prestamos
$libro_id = $_POST["libro_id"];
$usuario_id= $_POST["usuario_id"];
$fecha_prestamo = $_POST["fecha_prestamo"];
$fecha_devolucion = $_POST["fecha_devolucion"];

require '../conexion.php';

$insert = "INSERT INTO prestamos (libro_id, usuario_id, fecha_prestamo, fecha_devolucion) VALUES ('$libro_id', '$usuario_id', '$fecha_prestamo', '$fecha_devolucion')";

$result = $mysqli->query($insert);

echo "<script>
alert('Se agregó correctamente, redirigiendo...');
self.location = '../index.php';
</script>"


?>