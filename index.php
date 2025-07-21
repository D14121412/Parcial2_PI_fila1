<?php

require 'conexion.php';
$consulta = "SELECT * FROM libros";

$result = $mysqli->query($consulta);


echo "<table border='1'>";
echo "<tr><th>Titulo</th>";
echo "<th>autor</th>";
echo "<th>Año</th>";
echo "<th>Categoria</th>";
echo "<th>Stock</th>";
echo "<th colspan='2'>Editar</th></tr>";
while($libros = mysqli_fetch_array($result)) {
     echo "<tr>" . "<td>" . $libros[1] . "</td>";
     echo "<td>" . $libros[2] . "</td>";
     echo "<td>" . $libros[3] . "</td>";
     echo "<td>" . $libros[4] . "</td>";
     echo "<td>" . $libros[5] . "</td>";
     echo "<td><a href=''>Modificar</a></td>";
     echo "<td><a href=''>Eliminar</a></td></tr>";

}

echo "</table>";
echo "<button><a href='insertar/nuevo.php'>Agregar nuevo libro</a></button>";

?>  