<?php

// Obtener los valores enviados por el formulario
$libro_id = $_POST["libro_id"];
$usuario_id= $_POST["usuario_id"];
$fecha_prestamo = $_POST["fecha_prestamo"];
$fecha_devolucion = $_POST["fecha_devolucion"];
$id = $_POST['id'];

// Conexión a la base de datos
require '../conexion.php';

// Consulta SQL para actualizar los datos del préstamo
$update = "UPDATE prestamos SET libro_id = '$libro_id', usuario_id = '$usuario_id', fecha_prestamo = '$fecha_prestamo', fecha_devolucion = '$fecha_devolucion' WHERE id = '$id'";

// Ejecutar la consulta
$result = $mysqli->query($update);

// Verificar si la consulta se ejecutó correctamente
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