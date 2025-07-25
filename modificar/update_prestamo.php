<?php

$libro_id = $_POST["libro_id"];
$usuario_id= $_POST["usuario_id"];
$fecha_prestamo = $_POST["fecha_prestamo"];
$fecha_devolucion = $_POST["fecha_devolucion"];
$id = $_POST['id'];

require '../conexion.php';

$update = "UPDATE prestamos SET libro_id = '$libro_id', usuario_id = '$usuario_id', fecha_prestamo = '$fecha_prestamo', fecha_devolucion = '$fecha_devolucion' WHERE id = '$id'";

$result = $mysqli->query($update);

if(!$result) {
    echo '<font color="red" style ="font-size: 26px;">No se modificó la informacion correctamente</font>';
    echo "<br>";
} else {
     echo '<script language = javascript>
    alert("Se modificó la informacion corectamente, redireccionando...")
    self.location = "../index.php"
    </script>'; 
}

?>