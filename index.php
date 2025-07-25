<?php

require 'conexion.php';
$consulta = "SELECT * FROM libros";
$consulta1 = "SELECT * FROM prestamos";
$consulta2 = "SELECT * FROM usuarios";

$result = $mysqli->query($consulta);
$result1 = $mysqli->query($consulta1);
$result2 = $mysqli->query($consulta2);

echo "<table border='1'>";
echo "<tr><th>libro</th>";
echo "<th>usuario</th>";
echo "<th>fecha prestamo</th>";
echo "<th>Fecha devolucion</th>";
echo "<th colspan='2'>Editar</th></tr>";
while($prestamos = mysqli_fetch_array($result1)) {
     echo "<tr>" . "<td>" . $prestamos[1] . "</td>";
     echo "<td>" . $prestamos[2] . "</td>";
     echo "<td>" . $prestamos[3] . "</td>";
     echo "<td>" . $prestamos[4] . "</td>";
     echo "<td><a href='http://localhost/programacion1/Parcial2_PI_fila1_BarbozaDaira/modificar/modificar_prestamos.php?id=" . $prestamos["id"] . "'>Modificar</a></td>";
     echo "<td><a href='http://localhost/programacion1/Parcial2_PI_fila1_BarbozaDaira/eliminar/delete.php?id=" . $prestamos["id"] . "'>Eliminar</a></td></tr>";

}

echo "</table>";
echo "<button><a href='insertar/nuevo_prestamo.php'>Agregar</a></button>" . "<br><br>";


echo "<table border='1'>";
echo "<tr><th>Id</th>";
echo "<th>Usuario</th>";
echo "<th>Editar</th></tr>";
while($usuarios = mysqli_fetch_array($result2)) {
     echo "<tr>" . "<td>" . $usuarios[0] . "</td>";
     echo "<td>" . $usuarios[1] . "</td>";
     echo "<td><a href='http://localhost/programacion1/Parcial2_PI_fila1_BarbozaDaira/eliminar/delete.php?id=" . $usuarios["id"] . "'>Eliminar</a></td></tr>";

}

echo "</table>" . "<br><br>";


echo "<table border='1'>";
echo "<tr><th>Id</th>";
echo "<th>autor</th>";
echo "<th>autor</th>";
echo "<th>Año</th>";
echo "<th>Categoria</th>";
echo "<th>Stock</th>";
echo "<th colspan='2'>Editar</th></tr>";
while($libros = mysqli_fetch_array($result)) {
     echo "<tr>" . "<td>" . $libros[0] . "</td>";
     echo "<td>" . $libros[1] . "</td>";
     echo "<td>" . $libros[2] . "</td>";
     echo "<td>" . $libros[3] . "</td>";
     echo "<td>" . $libros[4] . "</td>";
     echo "<td>" . $libros[5] . "</td>";
     echo "<td><a href='http://localhost/programacion1/Parcial2_PI_fila1_BarbozaDaira/modificar/modificar_libros.php?id=" . $libros["id"] . "'>Modificar</a></td>";
     echo "<td><a href='http://localhost/programacion1/Parcial2_PI_fila1_BarbozaDaira/eliminar/delete.php?id=" . $libros["id"] . "'>Eliminar</a></td></tr>";

}

echo "</table>";
echo "<button><a href='insertar/nuevo_libro.php'>Agregar nuevo libro</a></button>";
echo "<a href='login/inicio_sesion.php'>Cerrar sesión</a>"

?>  