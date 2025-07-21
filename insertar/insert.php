<?php

$titulo = $_POST["titulo"];
$autor = $_POST["autor"];
$anio = $_POST["anio"];
$categoria = $_POST["categoria_id"];
$stock = $_POST["stock"];

require '../conexion.php';

$insert = "INSERT INTO libros (titulo, autor, anio, categoria_id, stock) VALUES('$titulo', '$autor', '$anio', '$categoria', '$stock')";

$result = $mysqli->query($insert);

echo "<script>
alert('Se agregó correctamente, redirigiendo...');
self.location = '../index.php';
</script>"

?>