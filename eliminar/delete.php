<?php

$id = $_GET['id'];

require_once '../conexion.php';

$eliminar = "DELETE FROM libros WHERE id = $id";
$eliminar1 = "DELETE FROM usuarios WHERE id = $id";
$eliminar2 = "DELETE FROM prestamos WHERE id = $id";

$result = $mysqli->query($eliminar);
$result1 = $mysqli->query($eliminar1);
$result2 = $mysqli->query($eliminar2);

if(!$result && $result1 && $result2) {
    echo '<font color="red" style ="font-size: 26px;">No se eliminó la informacion correctamente</font>';
    echo "<br>";
} else {
    echo '<script language = javascript>
    alert("Se eliminó la informacion corectamente, redireccionando...")
    self.location = "../index.php"
    </script>';
}


?>