<?php

// Obtener los datos enviados desde el formulario para la tabla 'libros'
$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$anio = $_POST["anio"];
$categoria = $_POST["categoria_id"];
$stock = $_POST["stock"];

// Conexión a la base de datos
require '../conexion.php';

// Crear la consulta SQL para insertar el nuevo libro en la base de datos
$insert = "INSERT INTO libros (titulo, autor, anio, categoria_id, stock) VALUES('$titulo', '$autor', '$anio', '$categoria', '$stock')";


// Ejecutar la consulta con el objeto $mysqli
$result = $mysqli->query($insert);

// Mostrar un mensaje de éxito y redirigir al index
echo "<script>
alert('Se agregó correctamente, redirigiendo...');
self.location = '../index.php';
</script>"

?>