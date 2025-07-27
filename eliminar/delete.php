<?php

// Obtener el ID que se desea eliminar desde la URL
$id = $_GET['id'];

// Conexión a la base de datos
require_once '../conexion.php';

// Preparar tres sentencias SQL para eliminar un registro con el mismo ID de tres tablas diferentes
$eliminar = "DELETE FROM libros WHERE id = $id";
$eliminar1 = "DELETE FROM usuarios WHERE id = $id";
$eliminar2 = "DELETE FROM prestamos WHERE id = $id";

// Ejecutar cada consulta
$result = $mysqli->query($eliminar);
$result1 = $mysqli->query($eliminar1);
$result2 = $mysqli->query($eliminar2);

// Verificar si al menos una de las eliminaciones falló
if(!$result && $result1 && $result2) {
    // Si falló la eliminación, mostrar un mensaje de error
    echo '<font color="red" style ="font-size: 26px;">No se eliminó la informacion correctamente</font>';
    echo "<br>";
} else {
    // Si todo salió bien, mostrar alerta y redireccionar al inicio
    echo '<script language = javascript>
    alert("Se eliminó la informacion corectamente, redireccionando...")
    self.location = "../index.php"
    </script>';
}


?>