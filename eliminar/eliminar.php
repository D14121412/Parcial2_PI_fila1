<?php

$id = $_GET['id'];

require_once '../conexion.php';

$eliminar = "DELETE FROM libros WHERE id = $id";

$result = $mysqli->query($eliminar);

if(!$result) {
    echo '<font color="red" style ="font-size: 26px;">No se eliminó la informacion correctamente</font>';
    echo "<br>";
} else {
    echo '<script language = javascript>
    alert("Se eliminó la informacion corectamente, redireccionando...")
    self.location = "../index.php"
    </script>';
}

?>