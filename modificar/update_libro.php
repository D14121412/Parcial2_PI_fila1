<?php

// Obtener los datos enviados desde el formulario por método POST
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$anio = $_POST['anio'];
$categoria = $_POST['categoria_id'];
$stock = $_POST['stock'];
$id = $_POST['id'];

// Conexión a la base de datos
require '../conexion.php';


// Consulta SQL para actualizar el libro en la base de datos
$update = "UPDATE libros SET titulo = '$titulo', autor = '$autor', anio = '$anio', categoria_id = '$categoria', stock = '$stock' WHERE id = '$id'";

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