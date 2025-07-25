<?php

require 'conexion.php';
$consulta = "SELECT * FROM libros";
$consulta1 = "SELECT * FROM prestamos";
$consulta2 = "SELECT * FROM usuarios";

$result = $mysqli->query($consulta);
$result1 = $mysqli->query($consulta1);
$result2 = $mysqli->query($consulta2);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <h2 class="mb-3">Listado de Préstamos</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Libro</th>
                <th>Usuario</th>
                <th>Fecha Préstamo</th>
                <th>Fecha Devolución</th>
                <th colspan="2">Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php while($prestamos = mysqli_fetch_array($result1)) { ?>
            <tr>
                <td><?php echo $prestamos[1]; ?></td>
                <td><?php echo $prestamos[2]; ?></td>
                <td><?php echo $prestamos[3]; ?></td>
                <td><?php echo $prestamos[4]; ?></td>
                <td><a href="modificar/modificar_prestamos.php?id=<?php echo $prestamos['id']; ?>" class="btn btn-warning btn-sm">Modificar</a></td>
                <td><a href="eliminar/delete.php?id=<?php echo $prestamos['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <a href="insertar/nuevo_prestamo.php" class="btn btn-success mb-4">Agregar nuevo préstamo</a>

    <h2 class="mb-3">Listado de Usuarios</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
        <?php while($usuarios = mysqli_fetch_array($result2)) { ?>
            <tr>
                <td><?php echo $usuarios[0]; ?></td>
                <td><?php echo $usuarios[1]; ?></td>
                <td><a href="eliminar/delete.php?id=<?php echo $usuarios['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <h2 class="mb-3">Listado de Libros</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Año</th>
                <th>Categoría</th>
                <th>Stock</th>
                <th colspan="2">Editar</th>
            </tr>
        </thead>
        <tbody>
        <?php while($libros = mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $libros[0]; ?></td>
                <td><?php echo $libros[1]; ?></td>
                <td><?php echo $libros[2]; ?></td>
                <td><?php echo $libros[3]; ?></td>
                <td><?php echo $libros[4]; ?></td>
                <td><?php echo $libros[5]; ?></td>
                <td><a href="modificar/modificar_libros.php?id=<?php echo $libros['id']; ?>" class="btn btn-warning btn-sm">Modificar</a></td>
                <td><a href="eliminar/delete.php?id=<?php echo $libros['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <a href="insertar/nuevo_libro.php" class="btn btn-success mb-3">Agregar nuevo libro</a>
    <br>
    <a href="login/inicio_sesion.php" class="btn btn-secondary">Cerrar sesión</a>

</div>
</body>
</html>
